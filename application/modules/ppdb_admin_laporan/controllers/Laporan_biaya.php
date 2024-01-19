<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan_biaya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->model('Laporan_biaya_model', 'ion_auth');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Laporan Biaya';
            $data['home'] = 'PPDB Laporan';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();

            $this->load->view('layout/header-top', $data);
            $this->load->view('ppdb_admin_laporan/laporan_biaya/_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('ppdb_admin_laporan/laporan_biaya/_v', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('ppdb_admin_laporan/laporan_biaya/_js');
            $this->load->view('layout/footer-bottom');
            $this->benchmark->mark('code_end');
        } else {
        }
    }

    public function tabel($id, $tgl)
    {

        $date1 = date_create($id);
        $date2 = date_create($tgl);
        $diff = date_diff($date1, $date2);
        $realDiff = $diff->format("%R%a") + 1;
        if ($realDiff < 32) {
            
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $get_tasm = $this->db->get_where('t_tahun', ['aktif' => 'Y'])->row_array();
            $bayar =
                $this->db->select('a.*')
                ->from('ppdb_bayar a') 
                ->where('a.tgl_bayar >=', $id)->where('a.tgl_bayar <=', $tgl)               
                ->group_by('a.id_bayar', 'ASC')
                ->get()->result_array();       

            $siswa =
                $this->db->select('a.*')
                ->from('ppdb_daftar a')      
                ->get()->result_array();    

                $html = '<div class="table-responsive">' ;
                $html = '  <table class="table datatable" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Nama Siswa</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Tgl Bayar</th>                                                                  
                                    </tr>
                                </thead>
                                <tbody>';
                                    if (!empty($bayar)) {
                                        $no = 1;                                       
                                        foreach ($bayar as $s)
                                            foreach ($siswa as $si)
                                                if($si['id_daftar'] == $s['id_daftar'])
                                                $html .= '<td>' . $no++ . '</td><td>' . $s['id_bayar'] . '</td><td>' . $si['no_daftar'] . '</td><td>' . $si['nama'] . '</td><td>' . $s['jumlah'] . '</td><td>' . $s['tgl_bayar'] . '</td></tr>';
                                    }';                       
                                </tbody>
                            </table>
                        </div>';
                $this->d['html'] = $html;
                $this->load->view('ppdb_admin_laporan/laporan_biaya/_list', $this->d);
        } else {
            echo "Tidak Boleh Lebih dari 30 Hari";
        }
    }


    public function ajax_list()
    {
        $list = $this->rekap->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $gedung) {
            $no++;
            $row = array();
            $row[]  =  $gedung->nama_gedung;
            $row[] = $gedung->alamat;
            $row[] =
                '
        <a class="btn btn-lg btn-info btn3d" href="#" title="Rekap Absensi" onclick="absen(' . "'" . $gedung->gedung_id . "'" . ')"><i class="fa fa-check-square"></i> Absensi</a>
        <a class="btn btn-lg btn-primary btn3d" href="#" title="Laporan" onclick="laporan(' . "'" . $gedung->gedung_id . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Laporan</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->rekap->count_all(),
            "recordsFiltered" => $this->rekap->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function ajax_list_modal($id)
    {
        $id_karyawan = $this->input->get('id_karyawan');
        $start = $this->input->get('tgl');
        $end = $this->input->get('tgl');
        $id_shift = $this->input->get('id_shift');
        $data['segment'] = $id;
        $data['colspan'] = $this->rekap->jmlHadir($segment = $this->uri->segment(3), $start, $end);
        $data['gedung'] =  $this->gedung->get_by_id($segment = $this->uri->segment(3));
        $data['start'] = $this->input->get('tgl');
        $data['end'] = $this->input->get('tgl');
        $data['id_shift'] = $this->input->get('id_shift');
        $data['resultHadir'] =   $this->rekap->resultHadir2($segment, $start, $end);
        $data['data'] = $this->rekap->resultHadir2($segment, $start, $end);
        $startdate = $this->input->get('start');
        $st = date('Y-m-d', strtotime($startdate));
        $t = explode('-', $st);
        $bulan = $this->tanggal->bulan($t[1]);
        $data['periode'] = $bulan . '&nbsp' . $t[0];
        $id_khd['id_khd'] = set_value('id_khd');
        $result = array(
            $this->rekap->karyawan_bak2($id, $start, $end),
        );
        $this->load->view("rekap/modalAbsen", $data, $id_khd, $result);
    }

    public function ajax_list_laporan($id)
    {
        $user = $this->user;
        $data['user'] = $user;
        $start = $this->input->get('tgl');
        $end = $this->input->get('tgl');
        $data['segment'] = $id;
        $this->load->view("rekap/ModalLaporan", $data, $start, $end);
    }

    public function ajax_list_modal2($id)
    {

        $id_karyawan = $this->input->get('id_karyawan');
        $start = $this->input->get('tgl');
        $end = $this->input->get('tgl');
        $id_shift = $this->input->get('$id_shift');
        $data['segment'] = $id;
        $data['id_khd'] = set_value('id_khd');
        $data['colspan'] = $this->rekap->jmlHadir($segment = $this->uri->segment(3), $start, $end);
        $data['gedung'] =  $this->gedung->get_by_id($segment = $this->uri->segment(3));
        $data['start'] = $this->input->get('tgl');
        $data['end'] = $this->input->get('tgl');
        $data['id_shift'] = $this->input->get('id_shift');
        $data['resultHadir2'] = $this->rekap->karyawan_bak3($segment, $start, $end, $id_shift);
        $startdate = $this->input->get('start');
        $st = date('Y-m-d', strtotime($startdate));
        $t = explode('-', $st);
        $bulan = $this->tanggal->bulan($t[1]);
        $data['periode'] = $bulan . '&nbsp' . $t[0];
        $result = array(
            $this->rekap->karyawan_bak3($id, $start, $end, $id_shift),
        );
        $this->load->view("rekap/modalAbsen", $data, $result);
    }

    function addkhd()
    {
        $data = $this->rekap->update_khd();
    }
}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan_legalisir extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        cek_aktif_login();
        cek_akses_user();
        is_logged_in();
        cek_akses();  
        $this->load->library('form_validation');
        $this->load->model('Laporan_legalisir_model', 'ion_auth');
    }

    public function index()
    {
        if ($this->form_validation->run() == false) {
            $this->benchmark->mark('code_start');
            $data['title'] = 'Laporan Legalisir';
            $data['home'] = 'Lulus Laporan';
            $data['subtitle'] = $data['title'];
            $data['main_menu'] = main_menu();
            $data['sub_menu'] = sub_menu();
            $data['cek_akses'] = cek_akses_user();
            $data['pegawai'] = $this->db->get_where('pegawai', ['email_pegawai' => $this->session->userdata('email_pegawai')])->row_array();
            $data['sekolah'] = $this->db->get('m_sekolah')->row_array();

            $this->load->view('layout/header-top', $data);
            $this->load->view('lulus_laporan/laporan_legalisir/_css');
            $this->load->view('layout/header-bottom', $data);
            $this->load->view('layout/main-navigation', $data);
            $this->load->view('lulus_laporan/laporan_legalisir/_v', $data);
            $this->load->view('layout/footer-top');
            $this->load->view('lulus_laporan/laporan_legalisir/_js');
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
            $transaksi =
                $this->db->select('a.*')
                ->from('alumni_legalisir a') 
                ->where('a.datecreate >=', $id)->where('a.datecreate <=', $tgl)               
                ->group_by('a.nama_siswa', 'ASC')
                ->get()->result_array();        

                $html = '<div class="table-responsive">' ;
                $html = '  <table class="table datatable" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tujuan</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Tanggal Pengambilan</th>
                                        <th>Keterangan</th>                                           
                                    </tr>
                                </thead>
                                <tbody>';
                                    if (!empty($transaksi)) {
                                        $no = 1;
                                        foreach ($transaksi as $s)
                                        $html .= '<td>' . $no++ . '</td><td>' . $s['nis'] . '</td><td>' . $s['nama_siswa'] . '</td><td>' . $s['tgl_pengajuan'] . '</td><td>' . $s['tujuan'] . '</td><td>' . $s['tgl_bayar'] . '</td><td>' .  'Rp ' . number_format($s['jum_bayar'], 0, ',', '.') . '</td><td>' . $s['tgl_pengambilan'] . '</td><td>' . $s['ket_pengambilan'] . '</td></tr>';
                                        
                                    }';                       
                                </tbody>
                            </table>
                        </div>';
                $this->d['html'] = $html;
                $this->load->view('lulus_laporan/laporan_legalisir/_list', $this->d);
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

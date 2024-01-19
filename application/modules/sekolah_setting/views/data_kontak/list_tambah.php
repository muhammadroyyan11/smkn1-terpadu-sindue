<div class="modal fade modal-action" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?= ucwords($this->uri->segment(3, 0)) ?> Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart(base_url() . $this->uri->segment(1, 0) . $this->uri->slash_segment(2, 'both').'/simpan_tambah'); ?>
                <div class="modal-body">
                    <!-- form start -->
                    <div class="row">                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Guru <span class="symbol required"> </span></label>
                                <select class="form-control select2" style="width: 100%;" id="nik" name="nik">
                                    <option value="">--Nama Guru--</option>
                                    <?php foreach ($pegawai_data as $pd) : ?>
                                        <option value="<?= $pd['nik']; ?>"><?= $pd['nama_lengkap']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>                   
                    <div class="row">                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telp <span class="symbol required"> </span></label>
                                <input type="text" name="no_kontak" id="no_kontak" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
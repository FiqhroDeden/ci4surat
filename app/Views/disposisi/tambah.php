<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="section-header">
    <h1>Disposisi</h1>
</div>
<div class="section-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Tambah Disposisi</h4>
            <div class="card-header-action">
                <a href=" <?= base_url('disposisi/index'); ?>">
                    <button class=" btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Surat Dari : <br><b>Kantor Gubernur</b></td>
                                    <td>Tanggal Terima : <br><b>10/01/2020</b> </td>
                                </tr>
                                <tr>
                                    <td>Nomor Surat : <br><b>07/KR.TA/11/2020</b> </td>
                                    <td>Tanggal Surat : <br><b>09/01/2020</b> </td>
                                </tr>
                                <tr>
                                    <td>Perihal : <br><b>Undangan Rapat</b> </td>
                                    <td>Sifat : <br><b>Segera</b> </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-sm-1"></div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-5">
                    <form action="">

                        <label for="data" class="col-form-label"><b>Diteruskan kepada Sdr :</b></label>
                        <div class="ml-3">
                            <div class="custom-control custom-checkbox custom-control-solid">
                                <input class="custom-control-input" id="1" name="data[]" type="checkbox" value="NIM">
                                <label class="custom-control-label" for="1">Sekertaris <br>Martin</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-solid">
                                <input class="custom-control-input" id="2" name="data[]" type="checkbox" value="Nama Mahasiswa">
                                <label class="custom-control-label" for="2">Kepala bidang <br> Dio</label>
                            </div>
                        </div>
                        <br>





                </div>
                <div class="col-md-5">


                    <label for="data" class="col-form-label"><b>Dengan hormat harap :</b></label>
                    <div class="ml-3">
                        <div class="custom-control custom-checkbox custom-control-solid">
                            <input class="custom-control-input" id="3" name="data[]" type="checkbox" value="NIM">
                            <label class="custom-control-label" for="3">Tanggapan dan Saran</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-solid">
                            <input class="custom-control-input" id="4" name="data[]" type="checkbox" value="Nama Mahasiswa">
                            <label class="custom-control-label" for="4">Proses lebih lanjut</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-solid">
                            <input class="custom-control-input" id="5" name="data[]" type="checkbox" value="Nama Mahasiswa">
                            <label class="custom-control-label" for="5">Koordinasikan / konfirmasikan</label>
                        </div>
                    </div>



                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label for=""><b>Catatan :</b></label>
                    <textarea class="form-control" name="" id="" cols="100" rows="10"></textarea>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-1"></div>
            </div>

            <hr>
            <div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
                <button type="reset" class="btn btn-danger ">Batal</button>
                </form>
            </div>

        </div>

    </div>
</div>

<?= $this->endSection(); ?>
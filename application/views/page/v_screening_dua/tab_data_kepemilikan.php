<section class="content">
    <div class="container-fluid">
        <h5 style="margin-top:15px; margin-bottom:15px">Informasi Data Kepemilikan & Dokumen</h5>
        <hr>
        <div class="col-md-12">
            <!-- Start Data Kepemilikan Rumah -->
            <div class="flex-square">
                <div class="flex-square-title">
                    <center>
                        <h5>Data Kepemilikan Rumah</h5>
                    </center>
                </div>
                <div class="flex-square-body">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Status Kepemilikan Rumah:</label>
                            <div class="col-sm-6">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-kepemilikan-rumah">
                                    <option selected disabled=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Lama Tinggal:</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control inp-digit" id="inp-lama-tinggal-thn">
                                    <div class="col-md-1" style="display:flex; justify-content:center; align-items:center; margin:2px">
                                        <center>
                                            Thn
                                        </center>
                                    </div>
                                    <input type="text" class="form-control" id="inp-lama-tinggal-bln">
                                    <div class="col-md-1" style="display:flex; justify-content:center; align-items:center;">
                                        <center>
                                            Bln
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Data Kepemilikan Rumah -->
            <br>
            <!-- Start Upload Dokumen -->
            <div class="flex-square">
                <div class="flex-square-title">
                    <center>
                        <h5>Upload Dokumen</h5>
                    </center>
                </div>
                <div class="flex-square-body">
                    <div class="col-md-12">
                        <table id="tbl-upload-dokumen" class="table table-bordered table-hover" method="post" action='<?= base_url(); ?>'>
                            <thead>
                                <tr>
                                    <th>Kode Dok</th>
                                    <th>Nama Dokumen</th>
                                    <th>Upload</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td name="kode_dok">00123</td>
                                    <td name="nama_dok">Kartu Keluarga (KK)</td>
                                    <td style="text-align: center;"><a class="btn btn-file"><i class="fas fa-upload"></i><input type="file" /></a></td>
                                    <td style="text-align: center;"><a class="btn" href="<?php echo site_url('#') ?>"><i class="fas fa-eye"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Upload Dokumen -->
            <br>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
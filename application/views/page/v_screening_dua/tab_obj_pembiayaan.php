<section class="content">
    <div class="container-fluid">
        <h5 style="margin-top:15px; margin-bottom:15px">Informasi Identitas Order</h5>
        <hr>
        <div class="row" id="form-pekerjaan">
            <div class="col-md-6">
                <!-- Start Informasi Aplikasi -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Informasi Aplikasi</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tujuan Penggunaan Unit*:</label>
                                <div class="col-sm-7">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-tujuan-penggunaan-unit">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Tujuan Penggunaan Dana*:</label>
                                <div class="col-sm-7">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-tujuan-penggunaan-dana">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- END Informasi Aplikasi -->
            </div>
            <div class="col-md-6">
                <!-- Start Informasi Informasi Objek Pembiayaan -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Informasi Informasi Objek Pembiayaan</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="col-md-12">
                            <div class="form-group row" id="form-object-pemb-tipe-pembiayaan">
                                <label class="col-sm-4 col-form-label">Tipe Pembiayaan*:</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-tipe-pemb">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-jenis-kend">
                                <label class="col-sm-4 col-form-label">Jenis Kendaraan*:</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-kend">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-radio">
                                <label for="lbl-object-pembiyaan" class="col-sm-4 col-form-label">Object Pembiayaan*:</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline">
                                        <input type="radio" name="pilihObjPembiayaan" value="kendaraan" id="radio-obj-kend"> Kendaraan
                                    </label>
                                    <label class="radio-inline" style="margin-left: 10px;">
                                        <input type="radio" name="pilihObjPembiayaan" value="dana" id="radio-obj-dana"> Dana
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-merk-model">
                                <label class="col-sm-4 col-form-label">Merk - Model Kendaraan*:</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-merk-model-modal-kend">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-tahun-pembuatan">
                                <label class="col-sm-4 col-form-label">Tahun Pembuatan*:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-tahun-pembuatan" maxlength="4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-harga-kend">
                                <label class="col-sm-4 col-form-label">Harga Kendaraan*:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-harga-kend" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-tenor">
                                <label class="col-sm-4 col-form-label">Tenor*:</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-tenor-kend">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-dp">
                                <label class="col-sm-4 col-form-label">Down Payment*:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-dp-kend">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-dp-min">
                                <label class="col-sm-4 col-form-label">Down Payment Minimum:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-dp-min-kend" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- Object Pembiayaan Dana -->
                            <div class="form-group row" id="form-object-pemb-dana-est-harga" style="display: none;">
                                <label class="col-sm-4 col-form-label">Estimasi Harga Kendaraan*:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-est-harga-kend" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-dana-pengajuan-cair" style="display: none;">
                                <label class="col-sm-4 col-form-label">Pengajuan Pencairan:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-pengajuan-pencairan-dana">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-dana-max-pencairan" style="display: none;">
                                <label class="col-sm-4 col-form-label">Maksimum Pencairan:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-max-pencairan-dana" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- End Object Pembiayaan Dana -->
                            <div class="form-group row" id="form-object-pemb-angs">
                                <label class="col-sm-4 col-form-label">Angsuran Perbulan:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-angs-perbln-kend" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="form-object-pemb-tot-pembayaran">
                                <label class="col-sm-4 col-form-label">Total Pembayaran Pertama:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-tot-bayar-kend" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Informasi Informasi Objek Pembiayaan -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
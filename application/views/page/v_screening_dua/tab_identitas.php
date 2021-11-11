<section class="content">
    <div class="container-fluid">
        <h4 style="margin-top:15px; margin-bottom:15px">Informasi Identitas</h4>
        <hr>
        <div class="row" id="form-identitas-digital">
            <div class="col-md-12">
                <!-- Start Identitas Debitur -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Identitas Debitur</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No KTP Debitur*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-ktp-deb" maxlength="16" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Sesuai KTP*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-deb" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Lengkap Tanpa Singkatan dan Tanpa Gelar*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-lengkap">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Pendidikan*:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-pendidikan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Jumlah Tanggungan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-jml-tanggungan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Gadis Ibu Kandung*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-ibu">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No HP 1*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-hp-1" maxlength="13" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No HP 2:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-hp-2" maxlength="13" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No HP 3:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-hp-3" maxlength="13">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Email*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-email" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Identitas Debitur -->
                <br>
                <!-- Start Identitas Pasangan -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Identitas Pasangan</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Jenis Identitas Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2bs4" style="width: 100%;" id="slc-jenis-id-pasangan">
                                            <option selected disabled=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Foto KTP Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="btn btn-info btn-file"><i class="fas fa-file-upload"></i> Upload<input type="file" /></span>
                                            <label style="margin-left: 10px;">.jpg, .jpeg, .png</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Nama Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-nama-pasangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">No Identitas Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control inp-digit" id="inp-no-identitas-pasangan" maxlength="16">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Tempat Lahir Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inp-tempat-lahir-pasangan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Tanggal Lahir Pasangan*:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="input-group date" id="reservationdate">
                                                <input id="inp-tanggal-lahir" type="text" class="form-control datetimepicker-input tanggal" data-toggle="datetimepicker">
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Identitas Pasangan -->
                <br>
            </div>
            <div class="col-md-6">
                <!-- Start Alamat KTP -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Alamat KTP</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat KTP*:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea class="form-control" id="inp-alamat-ktp"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">RT/RW*:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-rt-ktp">
                                        <div class="col-md-1" style="display:flex; justify-content:center; align-items:center; font-weight:bold">
                                            <center>
                                                /
                                            </center>
                                        </div>
                                        <input type="text" class="form-control" id="inp-rw-ktp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Pos*:</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-zipcode-ktp">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kelurahan*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kelurahan-ktp" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kecamatan*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kecamatan-ktp" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kab/Kota*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kabkot-ktp" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Provinsi*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-provinsi-ktp" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Telephone*:</label>
                                <div class="col-sm-9">
                                    <div class="input-gorup">
                                        <input type="text" class="form-control inp-digit" id="inp-no-telp">
                                    </div>
                                    <div class="input-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check-alamat-ktp-dom">
                                            <label class="form-check-label" for="checkAjuanCepat">Alamat KTP sama dengan Alamat Domisili</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- END Alamat KTP -->
            </div>
            <div class="col-md-6">
                <!-- Start Alamat Domisili -->
                <div class="flex-square">
                    <div class="flex-square-title">
                        <center>
                            <h5>Alamat Domisili</h5>
                        </center>
                    </div>
                    <div class="flex-square-body">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat KTP*:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea class="form-control" id="inp-alamat-dom"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">RT/RW*:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control inp-digit" id="inp-rt-dom">
                                        <div class="col-md-1" style="display:flex; justify-content:center; align-items:center; font-weight:bold">
                                            <center>
                                                /
                                            </center>
                                        </div>
                                        <input type="text" class="form-control" id="inp-rw-dom">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Pos*:</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2bs4" style="width: 100%;" id="slc-zipcode-dom">
                                        <option selected disabled=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kelurahan*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kelurahan-dom" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kecamatan*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kecamatan-dom" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kab/Kota*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-kabkot-dom" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Provinsi*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-provinsi-dom" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Telephone*:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inp-no-telp">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- END Alamat Domisili -->
            </div>
        </div>
    </div>
</section>
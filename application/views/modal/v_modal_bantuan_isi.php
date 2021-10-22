<div class="modal fade" id="modal-bantuan-isi">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Entry Digital</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Apakah Anda Bersedia Melanjutkan Proses?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bantuanIsiData" id="bantuan-isi-ya" value="01">
                            <label class="form-check-label" for="bantuan-isi-ya">
                                Saya bersedia melanjutkan proses, tetapi saya memerlukan bantuan officer MUF untuk melengkapi pengisian data entry
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bantuanIsiData" id="bantuan-isi-tidak" value="02">
                            <label class="form-check-label" for="bantuan-isi-tidak">
                                Saya tidak bersedia melanjutkan kredit di MUF
                            </label>
                        </div>
                        <div class="form-group row" id="form-alasan-batal" style="display: none;">
                            <label class="col-sm-2 col-form-label">Alasan batal:</label>
                            <div class="col-sm-4">
                                <select class="form-control select2bs4" style="width: 100%;" id="slc-alasan-batal">
                                    <option selected disabled=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="float-right">
                            <a href="#" class="btn btn-primary" id="btn-submit-bantuan">Submit</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('modal/v_modal_bantuan_final'); ?>
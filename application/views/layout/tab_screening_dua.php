<div class="card card-primary card-outline card-outline-tabs">
  <div class="card-header p-2">
    <ul class="nav nav-tabs" id="nav-tab-screening-dua" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas">Identitas</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan">Pekerjaan</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-toggle="tab" href="#pendapatan" role="tab" aria-controls="pendapatan">Pendapatan</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-toggle="tab" href="#obj-pembiayaan" role="tab" aria-controls="obj-pembiayaan">Object Pembiayaan</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-toggle="tab" href="#data-kepemilikan" role="tab" aria-controls="data-kepemilikan">Data Kepemilikan & Dokumen</a>
      </li>
    </ul>
    <div class="tab-content" id="nav-tab-content-screening-dua">
      <div class="tab-pane active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_identitas'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <button class="btn btn-success" id="btn-save-tab-identitas" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <a class="btn btn-primary btnNext" id="btn-next-tab-identitas"><i class="fa fa-chevron-right"></i> Selanjutnya</a>
        </div>
      </div>

      <div class="tab-pane" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_pekerjaan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <a class="btn btn-primary btnPrev" id="btn-prev-tab-pekerjaan"><i class="fa fa-chevron-left"></i> Sebelumnya</a>
          <button class="btn btn-success" id="btn-save-tab-pekerjaan" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <a class="btn btn-primary btnNext" id="btn-next-tab-pekerjaan"><i class="fa fa-chevron-right"></i> Selanjutnya</a>
        </div>
      </div>

      <div class="tab-pane" id="pendapatan" role="tabpanel" aria-labelledby="pendapatan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_pendapatan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <a class="btn btn-primary btnPrev" id="btn-prev-tab-pendapatan"><i class="fa fa-chevron-left"></i> Sebelumnya</a>
          <button class="btn btn-success" id="btn-save-tab-pendapatan" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <a class="btn btn-primary btnNext" id="btn-next-tab-pendapatan"><i class="fa fa-chevron-right"></i> Selanjutnya</a>
        </div>
      </div>

      <div class="tab-pane" id="obj-pembiayaan" role="tabpanel" aria-labelledby="obj-pembiayaan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_obj_pembiayaan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <a class="btn btn-primary btnPrev" id="btn-prev-tab-obj-pemb"><i class="fa fa-chevron-left"></i> Sebelumnya</a>
          <button class="btn btn-success" id="btn-save-tab-obj-pemb" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <a class="btn btn-primary btnNext" id="btn-next-tab-obj-pemb"><i class="fa fa-chevron-right"></i> Selanjutnya</a>
        </div>
      </div>

      <div class="tab-pane" id="data-kepemilikan" role="tabpanel" aria-labelledby="data-kepemilikan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_data_kepemilikan'); ?>
        <!-- Button -->

      </div>
    </div>
  </div>
</div>
<div class="card card-primary card-outline card-outline-tabs">
  <div class="card-header p-2">

    <ul class="nav nav-tabs" id="nav-tab-screening-dua-digital" role="tablist">
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
          <button class="btn btn-primary next">Selanjutnya</button>
        </div>
        <!-- End Button -->
      </div>

      <div class="tab-pane" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_pekerjaan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <button class="btn btn-primary previous">Sebelumnya</button>
          <button class="btn btn-success" id="btn-save-tab-pekerjaan" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <button class="btn btn-primary next">Selanjutnya</button>
        </div>
        <!-- End Button -->
      </div>

      <div class="tab-pane" id="pendapatan" role="tabpanel" aria-labelledby="pendapatan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_pendapatan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <button class="btn btn-primary previous">Sebelumnya</button>
          <button class="btn btn-success" id="btn-save-tab-pendapatan" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <button class="btn btn-primary next">Selanjutnya</button>
        </div>
        <!-- End Button -->
      </div>

      <div class="tab-pane" id="obj-pembiayaan" role="tabpanel" aria-labelledby="obj-pembiayaan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_obj_pembiayaan'); ?>
        <!-- Button -->
        <div class="float-right" style="margin-top: 10px;">
          <button class="btn btn-primary previous">Sebelumnya</button>
          <button class="btn btn-success" id="btn-save-tab-obj-pemb" data-toggle="modal"><i class="fa fa-save"></i> Simpan</button>
          <button class="btn btn-primary next">Selanjutnya</button>
        </div>
        <!-- End Button -->
      </div>

      <div class="tab-pane" id="data-kepemilikan" role="tabpanel" aria-labelledby="data-kepemilikan-tab">
        <?php $this->load->view('/page/v_screening_dua/tab_data_kepemilikan'); ?>
        <!-- Button -->
        <div style="margin-top: 5px; display:flex; justify-content: center">
          <button class="btn btn-success" id="btn-entry-digital-submit" data-toggle="modal"><i class="fa fa-save"></i> Submit</button>
        </div>
      </div>
    </div>

  </div>
</div>
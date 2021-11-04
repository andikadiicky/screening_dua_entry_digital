<?php $this->load->view('layout/header'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>
            <center>Data Entry Digital</center>
          </h1>
        </div>
        <div class="col-sm-12">
          <div class="form-group row responsive-bantuan-isi">
            <label class="col-sm-6 col-form-label judul-bantuan">Butuh Bantuan Pengisian Data?</label>
            <div>
              <button type="button" class="btn btn-secondary" id="btn-bantuan-isi-data">Klik Disini</button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <?php $this->load->view('layout/tab_screening_dua') ?>
      <br>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('modal/v_modal_alert'); ?>
<?php $this->load->view('modal/v_modal_bantuan_isi'); ?>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>
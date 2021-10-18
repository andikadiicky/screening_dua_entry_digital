<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navmenu'); ?>

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
          <div class="form-group row" style="justify-content: flex-end;">
            <label class="col-sm-2 col-form-label">Butuh Bantuan Pengisian Data?</label>
            <div>
              <button type="button" class="btn btn-secondary">Klik Disini</button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- TAB EFD 2 -->
      <?php $this->load->view('layout/tab_screening_dua') ?>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('modal/v_modal_alert'); ?>
<?php $this->load->view('layout/footer'); ?>
<?php $this->load->view('layout/footer_end'); ?>
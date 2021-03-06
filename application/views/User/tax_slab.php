<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Tax Slab</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Tax Slab</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="col-md-8 offset-md-2">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Tax Title </label>
                        <input type="text" class="form-control form-control-sm" name="tax_title" id="tax_title" value="<?php if(isset($tax_info)){ echo $tax_info['tax_title']; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Tax Rate</label>
                        <input type="number" min="0" max="100" class="form-control form-control-sm" name="tax_rate" id="tax_rate" value="<?php if(isset($tax_info)){ echo $tax_info['tax_rate']; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea name="tax_desc" id="tax_desc" class="form-control" rows="3" cols="95"><?php if(isset($tax_info)){ echo $tax_info['tax_desc']; } ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer row">
                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox ml-2">
                      <input class="custom-control-input" type="checkbox" name="tax_status" id="tax_status" value="1" <?php if(isset($tax_info) && $tax_info['tax_status'] == 1){ echo 'checked'; } elseif (!isset($tax_info)){ echo 'checked'; } ?>>
                      <label for="tax_status" class="custom-control-label">Active</label>
                    </div>
                  </div>
                  <div class="col-md-6 text-right">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/manufacturer_list" class="btn btn-default ml-4">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

  <script type="text/javascript">
  </script>
</body>
</html>

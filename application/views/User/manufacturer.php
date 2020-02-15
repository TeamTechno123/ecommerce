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
            <h1>Manufacturer</h1>
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
                <h3 class="card-title">Add Manufacturer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="col-md-8 offset-md-2">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-sm" name="manufacturer_name" id="manufacturer_name" value="<?php if(isset($manufacturer_name)){ echo $manufacturer_name; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label>Other Info</label>
                        <input type="text" class="form-control form-control-sm" name="manufacturer_info" id="manufacturer_info" value="<?php if(isset($manufacturer_info)){ echo $manufacturer_info; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Image</label>
                        <input type="file" class="form-control form-control-sm" name="manufacturer_img" id="manufacturer_img" class="form-control" id="exampleInputFile">
                      </div>
                      <?php if(isset($update)){ ?>
                        <div class="form-group col-md-6">
                          <img width="50%" src="<?php echo base_url(); ?>assets/images/manufacturer/<?php echo $manufacturer_img; ?>" alt="Manufacturer Image">
                        </div>
                        <input type="hidden" name="old_img" value="<?php echo $manufacturer_img; ?>">
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="card-footer row">
                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox ml-2">
                      <input class="custom-control-input" type="checkbox" name="manufacturer_status" id="manufacturer_status" value="1" <?php if(isset($manufacturer_status) && $manufacturer_status == 1){ echo 'checked'; } elseif (!isset($manufacturer_status)){ echo 'checked'; } ?>>
                      <label for="manufacturer_status" class="custom-control-label">Active</label>
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
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
// Check Mobile Duplication..
  var manufacturer_name1 = $('#manufacturer_name').val();
  $('#manufacturer_name').on('change',function(){
    var manufacturer_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"manufacturer_name",
             "column_val":manufacturer_name,
             "table_name":"manufacturer"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#manufacturer_name').val(manufacturer_name1);
          toastr.error(manufacturer_name+' Exist.');
        }
      }
    });
  });
</script>
</body>
</html>

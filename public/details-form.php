<?php
include_once('includes/functions.php');
date_default_timezone_set('Asia/Kolkata');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

$sql_query = "SELECT id, name FROM category ORDER BY id ASC";
$db->sql($sql_query);

$res = $db->getResult();
$sql_query = "SELECT value FROM settings WHERE variable = 'Currency'";
$pincode_ids_exc = "";
$db->sql($sql_query);

$res_cur = $db->getResult();
if (isset($_POST['btnAdd'])) {
        $error = array();
        $max_user = $db->escapeString($fn->xss_clean($_POST['max_user']));
        
        
       
        if (empty($max_user)) {
            $error['max_user'] = " <span class='label label-danger'>Required!</span>";
        }
      

        if (!empty($max_user))
        {
            
			$sql = "INSERT INTO settings (max_user) VALUE('$max_user')";
            $db->sql($sql);
            $settings_result = $db->getResult();
            if (!empty($settings_result)) {
                $settings_result = 0;
            } else {
                $settings_result = 1;
            }
            if ($settings_result == 1) {
                $error['add_menu'] = "<section class='content-header'>
                                                <span class='label label-success'>Maximum user detail Added Successfully</span>
                                                <h4><small><a  href='users.php'><i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to User</a></small></h4>
                                                 </section>";
            } else {
                $error['add_menu'] = " <span class='label label-danger'>Failed</span>";
            }

        }
    }
?>
<section class="content-header">
    <h1>Add Max Users Count</h1>
    <?php echo isset($error['add_menu']) ? $error['add_menu'] : ''; ?>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
    </ol>

</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Details</h3>
                </div>
                <div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>

                <!-- /.box-header -->
                <!-- form start -->
                <form id='notification_form' method="post"  enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Maximum Users per day</label> <i class="text-danger asterik">*</i><?php echo isset($error['max_user']) ? $error['max_user'] : ''; ?>
                                    <input type="text" class="form-control" name="max_user" required>
                                </div>
                            </div>

                        </div>

                        <hr>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn-primary btn" value="Add" name="btnAdd" />&nbsp;
                        <!-- <input type="reset" class="btn-danger btn" value="Clear" id="btnClear" /> -->
                        <!--<div  id="res"></div>-->
                    </div>
                </form>
                <div id="result"></div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<div class="separator"> </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

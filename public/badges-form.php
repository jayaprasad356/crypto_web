<?php
include_once('includes/functions.php');
date_default_timezone_set('Asia/Kolkata');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

if (isset($_POST['btnUpdate'])){
    $error = array();
    $badge_value1 = $db->escapeString($fn->xss_clean($_POST['badge_value1']));
    $badge_value2 = $db->escapeString($fn->xss_clean($_POST['badge_value2']));
    $badge_value3 = $db->escapeString($fn->xss_clean($_POST['badge_value3']));
    $badge_value4 = $db->escapeString($fn->xss_clean($_POST['badge_value4']));
    $badge_value5 = $db->escapeString($fn->xss_clean($_POST['badge_value5']));
    $from_value1 = $db->escapeString($fn->xss_clean($_POST['from_value1']));
    $from_value2 = $db->escapeString($fn->xss_clean($_POST['from_value2']));
    $from_value3 = $db->escapeString($fn->xss_clean($_POST['from_value3']));
    $from_value4 = $db->escapeString($fn->xss_clean($_POST['from_value4']));
    $from_value5 = $db->escapeString($fn->xss_clean($_POST['from_value5']));
    $to_value1 = $db->escapeString($fn->xss_clean($_POST['to_value1']));
    $to_value2 = $db->escapeString($fn->xss_clean($_POST['to_value2']));
    $to_value3 = $db->escapeString($fn->xss_clean($_POST['to_value3']));
    $to_value4 = $db->escapeString($fn->xss_clean($_POST['to_value4']));
    $to_value5 = $db->escapeString($fn->xss_clean($_POST['to_value5']));
   

    
   
    if (empty($badgevalue1)) {
        $error['badgevalue1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($badgevalue2)) {
        $error['badgevalue2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($badgevalue3)) {
        $error['badgevalue3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($badgevalue4)) {
        $error['badgevalue4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($badgevalue5)) {
        $error['badgevalue5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($from_value1)) {
        $error['from_value1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($from_value2)) {
        $error['from_value2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($from_value3)) {
        $error['from_value3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($from_value4)) {
        $error['from_value4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($from_value5)) {
        $error['from_value5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($to_value1)) {
        $error['to_value1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($to_value2)) {
        $error['to_value2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($to_value3)) {
        $error['to_value3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($to_value4)) {
        $error['to_value4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($to_value5)) {
        $error['to_value5'] = " <span class='label label-danger'>Required!</span>";
    }
   
   

    if (!empty($badge_value1)&& !empty($badge_value2) && !empty($badge_value3)&& !empty($badge_value4)&& !empty($badge_value5)&& !empty($from_value1)&& !empty($from_value2)&& !empty($from_value3)&& !empty($from_value4) && !empty($from_value5) && !empty($to_value1)&& !empty($to_value2)&& !empty($to_value3)&& !empty($to_value4)&& !empty($to_value5))
    {
        $sql = "UPDATE badges SET badge_value='$badge_value1',from_value='$from_value1',to_value='$to_value1' WHERE badge='bronze'";
        $db->sql($sql);
        $sql = "UPDATE badges SET badge_value='$badge_value2',from_value='$from_value2',to_value='$to_value2' WHERE badge='silver'";
        $db->sql($sql);
        $sql = "UPDATE badges SET badge_value='$badge_value3',from_value='$from_value3',to_value='$to_value3' WHERE badge='gold'";
        $db->sql($sql);
        $sql = "UPDATE badges SET badge_value='$badge_value4',from_value='$from_value4',to_value='$to_value4' WHERE badge='diamond'";
        $db->sql($sql);
        $sql = "UPDATE badges SET badge_value='$badge_value5',from_value='$from_value5',to_value='$to_value5' WHERE badge='platinum'";
        $db->sql($sql);
        $badge_result = $db->getResult();
        if (!empty($badge_result)) {
            $badge_result = 0;
        } else {
            $badge_result = 1;
        }
        if ($badge_result == 1) {
            $error['add_menu'] = "<section class='content-header'>
                                            <span class='label label-success'>Badges Updated Successfully</span>
                                             </section>";
        } else {
            $error['add_menu'] = " <span class='label label-danger'>Failed</span>";
        }

    }
}

$sql = "SELECT * FROM `badges`";
$db->sql($sql);
$res = $db->getResult();



?>
<section class="content-header">
    <h1>Badges</h1>
    <?php echo isset($error['add_menu']) ? $error['add_menu'] : ''; ?>
    <ol class="breadcrumb">
        <li><a style="color:black!important;" href="home.php"><i class="fa fa-home"></i> Home</a></li>
    </ol>

</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>

                <!-- /.box-header -->
                <!-- form start -->
                <form id='badge_form' method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Bronze</label>
                                    <input type="number"  class="form-control" name="badge_value1" value="<?php echo $res[0]['badge_value']?>"  readonly>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">From Value</label> 
                                    <input  type="number" class="form-control" name="from_value1" value="<?php echo $res[0]['from_value']?>" required>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">To Value</label> 
                                    <input  type="number" class="form-control" name="to_value1" value="<?php echo $res[0]['to_value']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Silver</label>
                                    <input type="number"  class="form-control" name="badge_value2" value="<?php echo $res[1]['badge_value']?>"  readonly>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">From Value</label> 
                                    <input  type="number" class="form-control" name="from_value2" value="<?php echo $res[1]['from_value']?>" required>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">To Value</label> 
                                    <input  type="number" class="form-control" name="to_value2" value="<?php echo $res[1]['to_value']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Gold</label>
                                    <input type="number"  class="form-control" name="badge_value3" value="<?php echo $res[2]['badge_value']?>"  readonly>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">From Value</label> 
                                    <input  type="number" class="form-control" name="from_value3" value="<?php echo $res[2]['from_value']?>" required>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">To Value</label> 
                                    <input  type="number" class="form-control" name="to_value3" value="<?php echo $res[2]['to_value']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Diamond</label>
                                    <input type="number"  class="form-control" name="badge_value4" value="<?php echo $res[3]['badge_value']?>"  readonly>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">From Value</label> 
                                    <input  type="number" class="form-control" name="from_value4" value="<?php echo $res[3]['from_value']?>" required>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">To Value</label> 
                                    <input  type="number" class="form-control" name="to_value4" value="<?php echo $res[3]['to_value']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Platinum</label>
                                    <input type="number"  class="form-control" name="badge_value5" value="<?php echo $res[4]['badge_value']?>"  readonly>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">From Value</label> 
                                    <input  type="number" class="form-control" name="from_value5" value="<?php echo $res[4]['from_value']?>" required>
                                </div>
                                <div class='col-md-3'>
                                    <label  for="exampleInputEmail1">To Value</label> 
                                    <input  type="number" class="form-control" name="to_value5" value="<?php echo $res[4]['to_value']?>" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit" class="btn-primary btn" value="Update" name="btnUpdate" />&nbsp;
                        <!--<div  id="res"></div>-->
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<div class="separator"> </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

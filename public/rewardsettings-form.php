<?php
include_once('includes/functions.php');
date_default_timezone_set('Asia/Kolkata');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

if (isset($_POST['btnUpdate'])){
    $error = array();
    $reward1 = $db->escapeString($fn->xss_clean($_POST['reward1']));
    $reward2 = $db->escapeString($fn->xss_clean($_POST['reward2']));
    $reward3 = $db->escapeString($fn->xss_clean($_POST['reward3']));
    $reward4 = $db->escapeString($fn->xss_clean($_POST['reward4']));
    $reward5 = $db->escapeString($fn->xss_clean($_POST['reward5']));
    $reward6 = $db->escapeString($fn->xss_clean($_POST['reward6']));
    $reward7 = $db->escapeString($fn->xss_clean($_POST['reward7']));
    $reward8 = $db->escapeString($fn->xss_clean($_POST['reward8']));
    $reward9 = $db->escapeString($fn->xss_clean($_POST['reward9']));
    $reward10 = $db->escapeString($fn->xss_clean($_POST['reward10']));
    $step1 = $db->escapeString($fn->xss_clean($_POST['step1']));
    $step2 = $db->escapeString($fn->xss_clean($_POST['step2']));
    $step3 = $db->escapeString($fn->xss_clean($_POST['step3']));
    $step4 = $db->escapeString($fn->xss_clean($_POST['step4']));
    $step5 = $db->escapeString($fn->xss_clean($_POST['step5']));
    $step6 = $db->escapeString($fn->xss_clean($_POST['step6']));
    $step7 = $db->escapeString($fn->xss_clean($_POST['step7']));
    $step8 = $db->escapeString($fn->xss_clean($_POST['step8']));
    $step9 = $db->escapeString($fn->xss_clean($_POST['step9']));
    $step10 = $db->escapeString($fn->xss_clean($_POST['step10']));
    $bronze1 = $db->escapeString($fn->xss_clean($_POST['bronze1']));
    $bronze2 = $db->escapeString($fn->xss_clean($_POST['bronze2']));
    $bronze3 = $db->escapeString($fn->xss_clean($_POST['bronze3']));
    $bronze4 = $db->escapeString($fn->xss_clean($_POST['bronze4']));
    $bronze5 = $db->escapeString($fn->xss_clean($_POST['bronze5']));
    $bronze6 = $db->escapeString($fn->xss_clean($_POST['bronze6']));
    $bronze7 = $db->escapeString($fn->xss_clean($_POST['bronze7']));
    $bronze8 = $db->escapeString($fn->xss_clean($_POST['bronze8']));
    $bronze9 = $db->escapeString($fn->xss_clean($_POST['bronze9']));
    $bronze10 = $db->escapeString($fn->xss_clean($_POST['bronze10']));
    $silver1 = $db->escapeString($fn->xss_clean($_POST['silver1']));
    $silver2 = $db->escapeString($fn->xss_clean($_POST['silver2']));
    $silver3 = $db->escapeString($fn->xss_clean($_POST['silver3']));
    $silver4 = $db->escapeString($fn->xss_clean($_POST['silver4']));
    $silver5 = $db->escapeString($fn->xss_clean($_POST['silver5']));
    $silver6 = $db->escapeString($fn->xss_clean($_POST['silver6']));
    $silver7 = $db->escapeString($fn->xss_clean($_POST['silver7']));
    $silver8 = $db->escapeString($fn->xss_clean($_POST['silver8']));
    $silver9 = $db->escapeString($fn->xss_clean($_POST['silver9']));
    $silver10 = $db->escapeString($fn->xss_clean($_POST['silver10']));
    $gold1 = $db->escapeString($fn->xss_clean($_POST['gold1']));
    $gold2 = $db->escapeString($fn->xss_clean($_POST['gold2']));
    $gold3 = $db->escapeString($fn->xss_clean($_POST['gold3']));
    $gold4 = $db->escapeString($fn->xss_clean($_POST['gold4']));
    $gold5 = $db->escapeString($fn->xss_clean($_POST['gold5']));
    $gold6 = $db->escapeString($fn->xss_clean($_POST['gold6']));
    $gold7 = $db->escapeString($fn->xss_clean($_POST['gold7']));
    $gold8 = $db->escapeString($fn->xss_clean($_POST['gold8']));
    $gold9 = $db->escapeString($fn->xss_clean($_POST['gold9']));
    $gold10 = $db->escapeString($fn->xss_clean($_POST['gold10']));
    $diamond1 = $db->escapeString($fn->xss_clean($_POST['diamond1']));
    $diamond2 = $db->escapeString($fn->xss_clean($_POST['diamond2']));
    $diamond3 = $db->escapeString($fn->xss_clean($_POST['diamond3']));
    $diamond4 = $db->escapeString($fn->xss_clean($_POST['diamond4']));
    $diamond5 = $db->escapeString($fn->xss_clean($_POST['diamond5']));
    $diamond6 = $db->escapeString($fn->xss_clean($_POST['diamond6']));
    $diamond7 = $db->escapeString($fn->xss_clean($_POST['diamond7']));
    $diamond8 = $db->escapeString($fn->xss_clean($_POST['diamond8']));
    $diamond9 = $db->escapeString($fn->xss_clean($_POST['diamond9']));
    $diamond10 = $db->escapeString($fn->xss_clean($_POST['diamond10']));
    $platinum1 = $db->escapeString($fn->xss_clean($_POST['platinum1']));
    $platinum2 = $db->escapeString($fn->xss_clean($_POST['platinum2']));
    $platinum3 = $db->escapeString($fn->xss_clean($_POST['platinum3']));
    $platinum4 = $db->escapeString($fn->xss_clean($_POST['platinum4']));
    $platinum5 = $db->escapeString($fn->xss_clean($_POST['platinum5']));
    $platinum6 = $db->escapeString($fn->xss_clean($_POST['platinum6']));
    $platinum7 = $db->escapeString($fn->xss_clean($_POST['platinum7']));
    $platinum8 = $db->escapeString($fn->xss_clean($_POST['platinum8']));
    $platinum9 = $db->escapeString($fn->xss_clean($_POST['platinum9']));
    $platinum10 = $db->escapeString($fn->xss_clean($_POST['platinum10']));
    

    
   
    if (empty($reward1)) {
        $error['reward1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward2)) {
        $error['reward2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward3)) {
        $error['reward3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward4)) {
        $error['reward4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward5)) {
        $error['reward5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward6)) {
        $error['reward6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward7)) {
        $error['reward7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward8)) {
        $error['reward8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward9)) {
        $error['reward9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($reward10)) {
        $error['reward10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step1)) {
        $error['step1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step2)) {
        $error['step2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step3)) {
        $error['step3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step4)) {
        $error['step4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step5)) {
        $error['step5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step6)) {
        $error['step6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step7)) {
        $error['step7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step8)) {
        $error['step8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step9)) {
        $error['step9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($step10)) {
        $error['step10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze1)) {
        $error['bronze1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze2)) {
        $error['bronze2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze3)) {
        $error['bronze3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze4)) {
        $error['bronze4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze5)) {
        $error['bronze5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze6)) {
        $error['bronze6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze7)) {
        $error['bronze7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze8)) {
        $error['bronze8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze9)) {
        $error['bronze9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($bronze10)) {
        $error['bronze10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver1)) {
        $error['silver1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver2)) {
        $error['silver2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver3)) {
        $error['silver3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver4)) {
        $error['silver4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver5)) {
        $error['silver5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver6)) {
        $error['silver6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver7)) {
        $error['silver7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver8)) {
        $error['silver8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver9)) {
        $error['silver9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($silver10)) {
        $error['silver10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold1)) {
        $error['gold1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold2)) {
        $error['gold2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold3)) {
        $error['gold3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold4)) {
        $error['gold4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold5)) {
        $error['gold5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold6)) {
        $error['gold6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold7)) {
        $error['gold7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold8)) {
        $error['gold8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold9)) {
        $error['gold9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($gold10)) {
        $error['gold10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond1)) {
        $error['diamond1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond2)) {
        $error['diamond2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond3)) {
        $error['diamond3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond4)) {
        $error['diamond4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond5)) {
        $error['diamond5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond6)) {
        $error['diamond6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond7)) {
        $error['diamond7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond8)) {
        $error['diamond8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond9)) {
        $error['diamond9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($diamond10)) {
        $error['diamond10'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum1)) {
        $error['platinum1'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum2)) {
        $error['platinum2'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum3)) {
        $error['platinum3'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum4)) {
        $error['platinum4'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum5)) {
        $error['platinum5'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum6)) {
        $error['platinum6'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum7)) {
        $error['platinum7'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum8)) {
        $error['platinum8'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum9)) {
        $error['platinum9'] = " <span class='label label-danger'>Required!</span>";
    }
    if (empty($platinum10)) {
        $error['platinum10'] = " <span class='label label-danger'>Required!</span>";
    }
 

    if (!empty($reward1)&& !empty($reward2) && !empty($reward3)&& !empty($reward4)&& !empty($reward5)&& !empty($reward6)&& !empty($reward7)&& !empty($reward8)&& !empty($reward9) && !empty($reward10) && !empty($step1)&& !empty($step2)&& !empty($step3)&& !empty($step4)&& !empty($step5)&& !empty($step6)&& !empty($step7)&& !empty($step8)&& !empty($step9)&& !empty($step10)&& !empty($bronze1)&& !empty($bronze2)&& !empty($bronze3)&& !empty($bronze4)&& !empty($bronze5)&& !empty($bronze6)&& !empty($bronze7)&& !empty($bronze8)&& !empty($bronze9)&& !empty($bronze10)&& !empty($silver1)&& !empty($silver2)&& !empty($silver3)&& !empty($silver4)&& !empty($silver5)&& !empty($silver6)&& !empty($silver7)&& !empty($silver8)&& !empty($silver9)&& !empty($silver10)&& !empty($gold1)&& !empty($gold2)&& !empty($gold3)&& !empty($gold4)&& !empty($gold5)&& !empty($gold6)&& !empty($gold7)&& !empty($gold8)&& !empty($gold9)&& !empty($gold10)&& !empty($diamond1)&& !empty($diamond2)&& !empty($diamond3)&& !empty($diamond4)&& !empty($diamond5)&& !empty($diamond6)&& !empty($diamond7)&& !empty($diamond8)&& !empty($diamond9)&& !empty($diamond10)&& !empty($platinum1)&& !empty($platinum2)&& !empty($platinum3)&& !empty($platinum4)&& !empty($platinum5)&& !empty($platinum6)&& !empty($platinum7)&& !empty($platinum8)&& !empty($platinum9)&& !empty($platinum10))
    {
        $sql = "UPDATE reward_settings SET reward='$reward1',bronze='$bronze1',silver='$silver1',gold='$gold1',diamond='$diamond1',platinum='$platinum1' WHERE step='$step1'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward2',bronze='$bronze2',silver='$silver2',gold='$gold2',diamond='$diamond2',platinum='$platinum2' WHERE step='$step2'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward3',bronze='$bronze3',silver='$silver3',gold='$gold3',diamond='$diamond3',platinum='$platinum3' WHERE step='$step3'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward4',bronze='$bronze4',silver='$silver4',gold='$gold4',diamond='$diamond4',platinum='$platinum4' WHERE step='$step4'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward5',bronze='$bronze5',silver='$silver5',gold='$gold5',diamond='$diamond5',platinum='$platinum5' WHERE step='$step5'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward6',bronze='$bronze6',silver='$silver6',gold='$gold6',diamond='$diamond6',platinum='$platinum6' WHERE step='$step6'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward7',bronze='$bronze7',silver='$silver7',gold='$gold7',diamond='$diamond7',platinum='$platinum7' WHERE step='$step7'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward8',bronze='$bronze8',silver='$silver8',gold='$gold8',diamond='$diamond8',platinum='$platinum8' WHERE step='$step8'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward9',bronze='$bronze9',silver='$silver9',gold='$gold9',diamond='$diamond9',platinum='$platinum9' WHERE step='$step9'";
        $db->sql($sql);
        $sql = "UPDATE reward_settings SET reward='$reward10',bronze='$bronze10',silver='$silver10',gold='$gold10',diamond='$diamond10',platinum='$platinum10' WHERE step='$step10'";
        $db->sql($sql);
        $reward_result = $db->getResult();
        if (!empty($reward_result)) {
            $reward_result = 0;
        } else {
            $reward_result = 1;
        }
        if ($reward_result == 1) {
            $error['add_menu'] = "<section class='content-header'>
                                            <span class='label label-success'>Reward details Updated Successfully</span>
                                            <h4><small><a  href='users.php'><i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to users</a></small></h4>
                                             </section>";
        } else {
            $error['add_menu'] = " <span class='label label-danger'>Failed</span>";
        }

    }
}

$sql = "SELECT * FROM `reward_settings`";
$db->sql($sql);
$res = $db->getResult();



?>
<section class="content-header">
    <h1>Reward settings</h1>
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
                    <h3 class="box-title">Reward settings</h3>
                </div>
                <div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>

                <!-- /.box-header -->
                <!-- form start -->
                <form id='reward_form' method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step1</label>
                                    <input type="number" value="2000"class="form-control" name="step1" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label  for="exampleInputEmail1">reward1</label> 
                                    <input  type="number" class="form-control" name="reward1" value="<?php echo $res[0]['reward']?>" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze1</label>
                                    <input type="number" class="form-control" name="bronze1" value="<?php echo $res[0]['bronze']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver1</label> 
                                    <input  type="number" class="form-control" name="silver1" value="<?php echo $res[0]['silver']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold1</label>
                                    <input type="number" class="form-control" name="gold1" value="<?php echo $res[0]['gold']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond1</label>
                                    <input type="number"  class="form-control" name="diamond1" value="<?php echo $res[0]['diamond']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum1</label>
                                    <input type="number" class="form-control" name="platinum1" value="<?php echo $res[0]['platinum']?>" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step2</label>
                                    <input type="number" value="4000"class="form-control" name="step2" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward2</label> 
                                    <input type="number" class="form-control"  name="reward2" value="<?php echo $res[1]['reward']?>" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze2</label>
                                    <input type="number" class="form-control" name="bronze2" value="<?php echo $res[1]['bronze']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver2</label> 
                                    <input  type="number" class="form-control" name="silver2" value="<?php echo $res[1]['silver']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold2</label>
                                    <input type="number" class="form-control" name="gold2" value="<?php echo $res[1]['gold']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond2</label>
                                    <input type="number"  class="form-control" name="diamond2" value="<?php echo $res[1]['diamond']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum2</label>
                                    <input type="number" class="form-control" name="platinum2" value="<?php echo $res[1]['platinum']?>" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step3</label>
                                    <input type="number" value="6000"class="form-control" name="step3" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward3</label> 
                                    <input type="number" class="form-control"  name="reward3" value="<?php echo $res[2]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze3</label>
                                    <input type="number" class="form-control" name="bronze3" value="<?php echo $res[2]['bronze']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver3</label> 
                                    <input  type="number" class="form-control" name="silver3" value="<?php echo $res[2]['silver']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold3</label>
                                    <input type="number" class="form-control" name="gold3" value="<?php echo $res[2]['gold']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond3</label>
                                    <input type="number"  class="form-control" name="diamond3" value="<?php echo $res[2]['diamond']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum3</label>
                                    <input type="number" class="form-control" name="platinum3" value="<?php echo $res[2]['platinum']?>"  >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step4</label>
                                    <input type="number" value="8000"class="form-control" name="step4"  readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward4</label> 
                                    <input type="number" class="form-control"  name="reward4" value="<?php echo $res[3]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze4</label>
                                    <input type="number" class="form-control" name="bronze4" value="<?php echo $res[3]['bronze']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver4</label> 
                                    <input  type="number" class="form-control" name="silver4" value="<?php echo $res[3]['silver']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold4</label>
                                    <input type="number" class="form-control" name="gold4" value="<?php echo $res[3]['gold']?>"  >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond4</label>
                                    <input type="number"  class="form-control" name="diamond4" value="<?php echo $res[3]['diamond']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum4</label>
                                    <input type="number" class="form-control" name="platinum4" value="<?php echo $res[3]['platinum']?>" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step5</label>
                                    <input type="number" value="10000"class="form-control" name="step5" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward5</label> 
                                    <input type="number" class="form-control" name="reward5" value="<?php echo $res[4]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze5</label>
                                    <input type="number" class="form-control" name="bronze5" value="<?php echo $res[4]['bronze']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver5</label> 
                                    <input  type="number" class="form-control" name="silver5" value="<?php echo $res[4]['silver']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold5</label>
                                    <input type="number" class="form-control" name="gold5" value="<?php echo $res[4]['gold']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond5</label>
                                    <input type="number"  class="form-control" name="diamond5" value="<?php echo $res[4]['diamond']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum5</label>
                                    <input type="number" class="form-control" name="platinum5" value="<?php echo $res[4]['platinum']?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step6</label>
                                    <input type="number" value="12000"class="form-control" name="step6" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward6</label> 
                                    <input type="number" class="form-control"  name="reward6" value="<?php echo $res[5]['reward']?>" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze6</label>
                                    <input type="number" class="form-control" name="bronze6" value="<?php echo $res[5]['bronze']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver6</label> 
                                    <input  type="number" class="form-control" name="silver6" value="<?php echo $res[5]['silver']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold6</label>
                                    <input type="number" class="form-control" name="gold6" value="<?php echo $res[5]['gold']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond6</label>
                                    <input type="number"  class="form-control" name="diamond6" value="<?php echo $res[5]['diamond']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum6</label>
                                    <input type="number" class="form-control" name="platinum6" value="<?php echo $res[5]['platinum']?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step7</label>
                                    <input type="number" value="14000"class="form-control" name="step7" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward7</label> 
                                    <input type="number" class="form-control" name="reward7" value="<?php echo $res[6]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze7</label>
                                    <input type="number" class="form-control" name="bronze7" value="<?php echo $res[6]['bronze']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver7</label> 
                                    <input  type="number" class="form-control" name="silver7" value="<?php echo $res[6]['silver']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold7</label>
                                    <input type="number" class="form-control" name="gold7" value="<?php echo $res[6]['gold']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond7</label>
                                    <input type="number"  class="form-control" name="diamond7" value="<?php echo $res[6]['diamond']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum7</label>
                                    <input type="number" class="form-control" name="platinum7" value="<?php echo $res[6]['platinum']?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step8</label>
                                    <input type="number" value="16000"class="form-control" name="step8" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward8</label> 
                                    <input type="number" class="form-control"  name="reward8" value="<?php echo $res[7]['reward']?>" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze8</label>
                                    <input type="number" class="form-control" name="bronze8" value="<?php echo $res[7]['bronze']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver8</label> 
                                    <input  type="number" class="form-control" name="silver8" value="<?php echo $res[7]['silver']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold8</label>
                                    <input type="number" class="form-control" name="gold8" value="<?php echo $res[7]['gold']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond8</label>
                                    <input type="number"  class="form-control" name="diamond8" value="<?php echo $res[7]['diamond']?>">
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum8</label>
                                    <input type="number" class="form-control" name="platinum8" value="<?php echo $res[7]['platinum']?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step9</label>
                                    <input type="number" value="18000"class="form-control" name="step9" readonly>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward9</label> 
                                    <input type="number" class="form-control" name="reward9" value="<?php echo $res[8]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze9</label>
                                    <input type="number" class="form-control" name="bronze9" value="<?php echo $res[8]['bronze']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver9</label> 
                                    <input  type="number" class="form-control" name="silver9" value="<?php echo $res[8]['silver']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold9</label>
                                    <input type="number" class="form-control" name="gold9" value="<?php echo $res[8]['gold']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond9</label>
                                    <input type="number"  class="form-control" name="diamond9" value="<?php echo $res[8]['diamond']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum9</label>
                                    <input type="number" class="form-control" name="platinum9" value="<?php echo $res[8]['platinum']?>" >
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Step10</label>
                                    <input type="number" value="20000"class="form-control" name="step10" readonly >
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">reward10</label> 
                                    <input type="number" class="form-control" name="reward10" value="<?php echo $res[9]['reward']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Bronze10</label>
                                    <input type="number" class="form-control" name="bronze10" value="<?php echo $res[9]['bronze']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label  for="exampleInputEmail1">Silver10</label> 
                                    <input  type="number" class="form-control" name="silver10" value="<?php echo $res[9]['silver']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Gold10</label>
                                    <input type="number" class="form-control" name="gold10" value="<?php echo $res[9]['gold']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Diamond10</label>
                                    <input type="number"  class="form-control" name="diamond10" value="<?php echo $res[9]['diamond']?>" >
                                </div>
                                <div class='col-md-2'>
                                    <label for="exampleInputEmail1">Platinum10</label>
                                    <input type="number" class="form-control" name="platinum10" value="<?php echo $res[9]['platinum']?>" >
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

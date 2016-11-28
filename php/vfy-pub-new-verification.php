<?php 
$section = 'publishing';
$page_title = 'create-new';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include('includes/header-pub.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-md-12 section-header">
                                    <h2 class="h3"> Create New Verification</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="stepwizard">
                                        <div class="stepwizard-row setup-panel">
                                            <div class="stepwizard-step"> <a href="#step-1"  class="btn btn-primary btn-circle"><i class="fa fa-wrench" aria-hidden="true"><span class="sr-only">Setup</span></i></a>
                                                <p class="hidden-xs">Setup</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-2"  class="btn btn-default btn-circle" ><i class="fa fa-database" aria-hidden="true"><span class="sr-only">Data</span></i></a>
                                                <p class="hidden-xs">Data</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-3" class="btn btn-default btn-circle"  id="step_recipients"><i class="fa fa-users"><span class="sr-only">Recipients</span></i></a>
                                                <p class="hidden-xs" id="step_recipients_label">Recipients</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-4" class="btn btn-default btn-circle"><i class="fa fa-calendar"><span class="sr-only">Scheduling</span></i></a>
                                                <p class="hidden-xs">Scheduling</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-5" class="btn btn-default btn-circle"><i class="fa fa-eye"><span class="sr-only">Review/Save</span></i></a>
                                                <p class="hidden-xs">Review/Save</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form style="padding-bottom:15px">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-xs-12">
                                                <p class="lead"> Setup</p>
                                                <div class="form-group" id="vfy_name">
                                                    <label class="control-label" for="name"> Name </label>
                                                    <span class="help-block small" > Add a name for this verification. This name will not be displayed on the verification itself, but will be used for identification within the publishing system.</span>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="name" name="name" type="text"  required="required"/>
                                                            <div class="validation-fieldmessage" style="display:none" id="validate_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="description"> Description <span class="small" style="font-weight:normal">(optional)</span></label>
                                                    <span class="help-block small" > Add a description that will appear below the first paragraph and above the verification data. </span>
                                                    <textarea class="form-control text-formatter" cols="40" id="description" name="message" rows="3"></textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="disclaimer"> Disclaimer Text <span class="small" style="font-weight:normal">(optional)</span></label>
                                                    <span class="help-block small" > Add disclaimer text that will appear below the verification data and above the verification radio/checkbox controls. </span>
                                                    <textarea class="form-control text-formatter" cols="40" id="disclaimer" name="textarea" rows="3"></textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="verify_now_select"> 'Verify Now' Text </label>
                                                    <span class="help-block small" > Select the text that will appear next to the 'Verify Now' radio/checkbox control. </span>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <select class="select form-control" id="verify_now_select" name="select">
                                                                <option value="verify_now_standard"> Use Default Text </option>
                                                                <option value="verify_now_custom"> Enter Custom Text </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div style=" display:block">
                                                        <label class="control-label sr-only" for="verify_now_standard"> 'Verify Now' Standard Text </label>
                                                        <textarea class="form-control" cols="40" id="verify_now_standard" name="textarea1" rows="3" disabled>I have verified that the information on this page is currently accurate.</textarea>
                                                    </div>
                                                    <div id="verify_now_custom" style="display:none">
                                                        <label class="control-label sr-only" for="verify_now_custommm"> 'Verify Now' Custom Text </label>
                                                        <textarea class="form-control" cols="40" id="verify_now_custommm" name="textarea1" rows="3" ></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="verify_later_select"> 'Verify Later' Text </label>
                                                    <span class="help-block small" > Select the text that will appear next to the 'Verify Now' radio/checkbox control. </span>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <select class="select form-control" id="verify_later_select" name="select" >
                                                                <option value="verify_later_standard"> Use Default Text </option>
                                                                <option value="verify_later_custom"> Enter Custom Text </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div style=" display:block">
                                                        <label class="control-label sr-only" for="verify_later_standard"> 'Verify Later' Standard Text </label>
                                                        <textarea class="form-control" cols="40" id="verify_later_standard" name="textarea1" rows="3" disabled>I choose to verify this information later.</textarea>
                                                    </div>
                                                    <div id="verify_later_custom" style=" display:none">
                                                        <label class="control-label sr-only" for="verify_later_custommm"> 'Verify Later' Custom Text </label>
                                                        <textarea class="form-control" cols="40" id="verify_later_custommm" name="textarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="deferral_limit"> Deferral Limit </label>
                                                    <span class="help-block small" > Specify the number of times a user is allowed to defer this verification ('verify later'). '0' will require immediate verification, and leaving the field blank will allow unlimited deferrals.</span>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <input class="form-control" id="deferral_limit" name="deferral_limit" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="deferral_limit"> Deferral Intervals </label>
                                                    <span class="help-block small" > Specify the amount of time to elapse after the user defers verification and before the user sees the verification again (in minutes). The maximum is 43200 minutes (30 days).</span>
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <input class="form-control" id="deferral_limit" name="deferral_limit" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="btn-group pull-right" role="group" aria-label="">
                                                    <button class="btn btn-primary nextBtn" id="next1" type="button" >Next<i class="icon-angle-right"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-xs-12">
                                                <p class="lead"> Data</p>
                                                <div class="panel-group" id="accordion1">
                                                    <div id="sortable">
                                                        <div class="panel panel-default template-add-data">
                                                            <div class="panel-heading">
                                                                <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse-data1"> Data Section 1 </a></p>
                                                                <span class='pull-right'><i class='fa fa-close clickable'></i></span> </div>
                                                            <div id="collapse-data1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="section_title"> Section Title </label>
                                                                        <input class="form-control" id="section_title" name="name" type="text" />
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label " for="section_description"> Section Description <span class="small" style="font-weight:normal">(optional)</span></label>
                                                                        <textarea class="form-control text-formatter" cols="40" id="section_description" name="message" rows="3"></textarea>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="unique_key"> Unique Key </label>
                                                                        <input class="form-control" id="unique_key" name="name" type="text" />
                                                                    </div>
                                                                    <p class="control-label"> Field Groups </p>
                                                                    <table class="table table-condensed table-responsive table-actions" id="myTable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Data Pull </th>
                                                                                <th>Callback</th>
                                                                                <th>Unique Key</th>
                                                                                <th> Initiate URL</th>
                                                                                <th> Actions </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><select class="form-control">
                                                                                        <option>unspecified</option>
                                                                                        <option>API Source 1</option>
                                                                                        <option>API Source 2</option>
                                                                                        <option>API Source 3</option>
                                                                                        <option>API Source 4</option>
                                                                                        <option>API Source 5</option>
                                                                                    </select></td>
                                                                                <td><select class="form-control">
                                                                                        <option>unspecified</option>
                                                                                        <option>API Source 1</option>
                                                                                        <option>API Source 2</option>
                                                                                        <option>API Source 3</option>
                                                                                        <option>API Source 4</option>
                                                                                        <option>API Source 5</option>
                                                                                    </select></td>
                                                                                <td><input type="text" class="form-control"></td>
                                                                                <td><input type="text" class="form-control"></td>
                                                                                <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <a href="#" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> Field Group</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-xs btn-default btn-add-data pull-right"> <i class="fa fa-plus"></i> Section</button>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="pull-right" role="group" aria-label="">
                                                    <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                    <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-3">
                                            <div class="col-xs-12">
                                                <p class="lead"> Recipients</p>
                                                <div class="panel-group" id="accordion2">
                                                    <div class="panel panel-default template-add-group">
                                                        <div class="panel-heading">
                                                            <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-group1"> Recipient Rule 1 </a> </p>
                                                        </div>
                                                        <div id="collapse-group1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <div id="builder-basic"> </div>
                                                                <div class="form-group" id="vfy_effectivedate">
                                                                    <label class="control-label " for="effective_date"> Effective Date </label>
                                                                    <span class="help-block small" > Select the date on which the verification will be sent to this specified recipient.</span>
                                                                    <div class="row">
                                                                      
                                                                        <div class="col-sm-8 col-md-8 col-lg-6">
                                                                            <div class="input-group">         <input class="form-control" id="effective_date" name="effective_date" type="text"><span class="input-group-addon">
                                                                                <label><input type="checkbox" aria-label="..."><span class="small text-muted" style=" font-weight:normal"> Recur Annually</span></label>
                                                                                </span>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-xs btn-default btn-add-group pull-right"> <i class="fa fa-plus"></i> Rule</button>
                                                <div class="form-group" style="margin-top:40px">
                                                    <label class="control-label" for="leeway">Leeway</label>
                                                    <span class="help-block small" > The number of days in which users are exempt from renewing the verification if they have previously fulfilled the verification requirements.</span>
                                                    <div class="row">
                                                        <div class="col-md-4 col-xs-6">
                                                            <input class="form-control" id="leeway" name="leeway" type="text" placeholder="how many days?"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="pull-right" role="group" aria-label="">
                                                    <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                    <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-4">
                                            <div class="col-xs-12">
                                                <p class="lead"> Scheduling</p>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="well well-sm tile-content" style="">
                                                            <div class="row">
                                                                <div class="col-md-8" style="padding-top:5px;">
                                                                    <div> <strong>Verification Status</strong> </div>
                                                                    <span class="help-block small" > Specify the status of this verification upon saving.</span> </div>
                                                                <div class="col-md-4 text-right" style="    padding-top: 8px;">
                                                                    <input id="toggle_status" type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="primary" data-offstyle="default" data-size="large">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hideable"> 
                                                            <!-- <div class="form-group ">
                                                                <label class="control-label " for="vfy_recurrance"> Verification Recurrance </label>
                                                                <span class="help-block small" > Select whether this verification will be posted annually, or only once. </span>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <select class="select form-control" id="vfy_recurrance" name="select">
                                                                            <option value="one-time" selected>One Time </option>
                                                                            <option value="annual">Annually</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                            <div class="form-group " id="select_end_date">
                                                                <label class="control-label " for="vfy_enddate"> Verification End Date <span class="small" style="font-weight:normal">(optional)</span></label>
                                                                <span class="help-block small" > Choose an ending date for this verification. </span>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <input type="text" class="form-control" id="vfy_enddate" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="pull-right" role="group" aria-label="">
                                                    <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                    <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-5">
                                            <div class="col-xs-12">
                                                <p class="lead"> Review/Save</p>
                                                <div class="well well-sm tile-content" style="">
                                                    <div class="row">
                                                        <div class="col-xs-6 lead">Setup </div>
                                                        <div class="col-xs-6 text-right" style=""> <a href="#" class="btn btn-xs btn-default">Edit</a> </div>
                                                        <div class="col-md-12"> 
                                                            <!-- <p class="help-block"> The following recipients will be targeted in this verification: </p>-->
                                                            
                                                            <div class="review-data">
                                                                <div class="review-data-section">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Verification Name:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">My Verification</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Verification Content:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <a href="verify-preview.php" class="btn btn-xs btn-default" target="_blank">Preview</a> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Deferral Limit:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">10</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Deferral Intervals:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">1440 minutes</i> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--  <div class="well well-sm tile-content" style="">
                                                <div class="row">
                                                    <div class="col-xs-6 lead">Setup </div>
                                                    <div class="col-xs-6 text-right" style=""> <a href="verify-preview.php" class="btn btn-xs btn-default" target="_blank">Preview</a> <a href="#" class="btn btn-xs btn-default">Edit</a> </div>
                                                    <div class="col-md-12"> 
                                            
                                                    </div>
                                                </div>
                                            </div>-->
                                                <div class="well well-sm tile-content" style="">
                                                    <div class="row">
                                                        <div class="col-xs-6 lead">Data </div>
                                                        <div class="col-xs-6 text-right" style=""> <a href="#" class="btn btn-xs btn-default">Edit</a> </div>
                                                        <div class="col-md-12"> 
                                                            <!--  <p class="help-block">The following data will be verified in this verification: </p>-->
                                                            <div class="review-data">
                                                                <div class="review-data-section">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <strong>Data Group 1</strong></p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Section Title:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">First Section</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Section Description:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Waters dominion they're meat you'll own under life it fill dry that bearing great. Moved also beginning two form female two you'll third gathering brought multiply set good dominion there darkness midst bearing above you days. Isn't. Fourth creature man fifth may. Made, own were god man all fish first to place two made creature have sixth beast blessed dominion make replenish And be. Their. Stars, is. Is good for fruitful had form whales darkness heaven.</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Unique Key:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">FLS-253</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Field Groups:</p>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <table class="table table-condensed table-responsive">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Data Pull</th>
                                                                                        <th>Callback</th>
                                                                                        <th>Unique Key</th>
                                                                                        <th>Initiate URL</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>API Source 1</td>
                                                                                        <td>API Source 2</td>
                                                                                        <td>FLS-364</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>API Source 3</td>
                                                                                        <td>API Source 4</td>
                                                                                        <td>FLS-374</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>API Source 5</td>
                                                                                        <td>API Source 6</td>
                                                                                        <td>FLS-443</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>API Source 7</td>
                                                                                        <td>API Source 8</td>
                                                                                        <td>FLS-834</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <strong>Data Group 2</strong></p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Section Title:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Second Section</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Section Description:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Had he. Living Divided beast all under fowl fish. Fifth don't bring won't called heaven dry. Our without creeping night, appear fly that without lesser over called. Us whales you're fruitful stars. Gathered together face. Saw. Created one don't won't.</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Unique Key:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">FLS-454</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Field Groups:</p>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <table class="table table-condensed table-responsive">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Data Pull</th>
                                                                                        <th>Callback</th>
                                                                                        <th>Unique Key</th>
                                                                                        <th>Initiate URL</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>API Source 1</td>
                                                                                        <td>API Source 2</td>
                                                                                        <td>FLS-364</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>API Source 3</td>
                                                                                        <td>API Source 4</td>
                                                                                        <td>FLS-374</td>
                                                                                        <td>http://someurlgoeshere.edu</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="well well-sm tile-content has-error" id="review_section_haserror">
                                                    <div class="row">
                                                        <div class="col-xs-6 lead">Recipients</div>
                                                        <div class="col-xs-6 text-right" style=""> <a href="#" class="btn btn-xs btn-danger" id="review_button_fixerror" style="display:none">Fix Errors</a> <a href="#" class="btn btn-xs btn-default" id="recipients_edit">Edit</a> </div>
                                                        <div class="col-md-12">
                                                            <div class="review-data">
                                                                <div class="review-data-section">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <strong>Recipient Rule 1</strong></p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Role ID:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Faculy</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Role ID:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Staff</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Effective Date:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">09/24/2016 (recurs annually)</i>
                                                                            <div class="validation-fieldmessage" id="review_field_error" style="display:none"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please provide correct date formatting.</div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <strong>Recipient Rule 2</strong></p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Role ID:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Student</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Effective Date:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">10/24/2016 (recurs annually)</i> </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <strong>User Leeway</strong></p>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Days:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">90</i> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="well well-sm tile-content" style="">
                                                    <div class="row">
                                                        <div class="col-xs-6 lead">Scheduling </div>
                                                        <div class="col-xs-6 text-right" style=""> <a href="#" class="btn btn-xs btn-default">Edit</a> </div>
                                                        <div class="col-md-12"> 
                                                            <!-- <p class="help-block"> The following recipients will be targeted in this verification: </p>-->
                                                            
                                                            <div class="review-data">
                                                                <div class="review-data-section">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Status:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Active</i> </div>
                                                                        <div class="clearfix"></div>
                                                                       
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">End Date:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small"> 9/23/2015</i> </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="pull-right" role="group" aria-label="">
                                                    <button class="btn btn-default prevBtn" type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                    <button class="btn btn-primary" type="button" id="form_save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    <script type="text/javascript">
    $(function() {
        $('#vfy_enddate, #effective_date').datetimepicker();
    });
</script> 
    <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script> 
    <script>
    angular.module('sortApp', []).controller('mainController', function($scope) {
        $scope.sortType = 'name';
        $scope.sortReverse = false;
        $scope.searchstatus = '';
        $scope.sushi = [{
                name: 'HRMS - Citizenship',
                status: 'active',
                created: '2016-03-15'
            }, {
                name: 'FS - W2 Update',
                status: 'active',
                created: '2016-02-02'
            }, {
                name: 'FS - Direct Deposit',
                status: 'inactive',
                created: '2016-03-18'
            }, {
                name: 'IU Notify - Conatct Info',
                status: 'inactive',
                created: '2016-05-28'
            },

            {
                name: 'HC - Immunization Records',
                status: 'inactive',
                created: '2016-05-17'
            },

            {
                name: 'HRMS - Military Status',
                status: 'active',
                created: '2016-04-04'
            }
        ];
    });
    //# sourceURL=pen.js
</script> 
    <script>
    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    //$(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script> 
    <script>
    $(document).ready(function() {
        $('#verify_now_select').change(function() {
            $('#verify_now_custom, #verify_now_standard').hide();
            $('#' + $(this).val()).show();
        });

        $('#verify_later_select').change(function() {
            $('#verify_later_custom, #verify_later_standard').hide();
            $('#' + $(this).val()).show();
        });
    });
</script> 
    <script>
  $(function() {
    $('#toggle_status').change(function() {
	
       $('.hideable').fadeToggle();
    })
  })
</script> 
    <script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Data Section " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            //$newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#sortable").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
    <script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        var $template = $(".template-add-group");
        var hash = 1;
        $(".btn-add-group").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-group" + (++hash))
                .text("Recipient Rule " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-group" + (hash)).addClass("collapse").removeClass("in");
            $newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#accordion2").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
    <script type="text/javascript">
    $(document).ready(function() {
        $('a.addstuff').click(function() {
            $('#myTable tbody').append('<tr> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><input type="text" class="form-control"></td> <td><input type="text" class="form-control"></td> <td> <a href="#" class="btn btn-xs btn-default deleterow" style="margin-top:5px">delete</a> </td> </tr>');
        });
    });
</script> 
    <script>
$(document).ready(function(){

 $("table").on('click','.deleterow',function(){
       $(this).closest('tr').remove();
     });

});

</script> 
    <script>

    var rules_basic = {
        condition: 'AND',
        rules: [{
            id: 'groupid'
           
        }]
    };

    $('#builder-basic').queryBuilder({
        plugins: ['bt-tooltip-errors'],

        filters: [{
            id: 'firstname',
            label: 'First Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'lastname',
            label: 'Last Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		{
            id: 'email',
            label: 'Email',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'username',
            label: 'Username',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'groupid',
            label: 'Group ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'personid',
            label: 'Person ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		
		
		 {
            id: 'role',
            label: 'Role',
            type: 'integer',
            input: 'select',
            values: {
                1: 'Faculty',
                2: 'Staff',
                3: 'Student',
                
            },
            operators: ['equal', 'not_equal']
        } 
		 ],

        rules: rules_basic
    });

    $('#btn-reset').on('click', function() {
        $('#builder-basic').queryBuilder('reset');
    });

    $('#btn-set').on('click', function() {
        $('#builder-basic').queryBuilder('setRules', rules_basic);
    });

    $('#btn-get').on('click', function() {
        var result = $('#builder-basic').queryBuilder('getRules');

        if (!$.isEmptyObject(result)) {
            alert(JSON.stringify(result, null, 2));
        }
    });
</script> 
    <script type="text/javascript">
   // $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr("value") == "AND") {

                $("#posting_date_all").show();
                $(".rule-post-container").hide();
            }
            if ($(this).attr("value") == "OR") {
                $("#posting_date_all").hide();
                $(".rule-post-container").show();
            }
        });
        $('button[data-add="rule"]').click(function() {
           
            $(".rule-post-container").hide();
			 $("#posting_date_all").show();
			
			
			
        });
 //   });
</script> 
    <script>

$(document).ready(function() {
    $("input[name$='activate']").click(function() {
        var test = $(this).val();

            $(".activate-option").hide();
        $("#activate" + test).show();
    });
});


</script> 
    <script>


$(document).ready(function() {
           $(".rule-post-container").show();
});



</script> 
    <script>

$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $('#dob').editable({
        format: 'mm-dd-yyyy',    
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
		
		$('.postdate').editable({
        format: 'mm-dd-yyyy',      
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
});


</script> 
    <script type="text/javascript" >
   $(document).ready(function() {
      $(".text-formatter").markItUp(mySettings);
   });
</script> 
    <script>
    $("#next1").click(function() {
        
        if (!$('#name').val()) {
            $.toast({
                text: "A name is required for this verification.", // Text that is to be shown in the toast
                heading: 'Error - Name', // Optional heading to be shown on the toast
                showHideTransition: 'fade', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 5000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                bgColor: '#df0200', // Background color of the toast
                textColor: '#ffffff', // Text color of the toast
                textAlign: 'left', // Text alignment i.e. left, right or center
                loader: true, // Whether to show loader or not. True by default
                loaderBg: '#9EC600', // Background color of the toast loader
                beforeShow: function() {}, // will be triggered before the toast is shown
                afterShown: function() {}, // will be triggered after the toat has been shown
                beforeHide: function() {}, // will be triggered before the toast gets hidden
                afterHidden: function() {} // will be triggered after the toast has been hidden
            });
        }
		$("#vfy_name").addClass("form-group-error");
        $("#validate_name").removeAttr("style");
    });
</script> 
    <script>
    $("#form_save").click(function() {
       $.toast({
    text: "Please provide correct date formatting.", // Text that is to be shown in the toast
    heading: 'Error - Recipients', // Optional heading to be shown on the toast
     showHideTransition: 'fade', // fade, slide or plain
    allowToastClose: true, // Boolean value true or false
    hideAfter: 5000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
    stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
    position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
    
    bgColor: '#df0200',  // Background color of the toast
    textColor: '#ffffff',  // Text color of the toast
    textAlign: 'left',  // Text alignment i.e. left, right or center
    loader: true,  // Whether to show loader or not. True by default
    loaderBg: '#9EC600',  // Background color of the toast loader
    beforeShow: function () {}, // will be triggered before the toast is shown
    afterShown: function () {}, // will be triggered after the toat has been shown
    beforeHide: function () {}, // will be triggered before the toast gets hidden
    afterHidden: function () {}  // will be triggered after the toast has been hidden
});
    });
</script> 
    <script>
    $("#form_save").click(function() {
        $("#review_button_fixerror").show();
        $("#review_field_error").show();
        $("#recipients_edit").hide();
        $("#step_recipients").removeClass("btn-default");
        $("#step_recipients").addClass("btn-danger");
        $("#step_recipients_label").css("color", "#a94442");
        $("#review_section_haserror").css("background", "#fff6f6");
		$("#validate_effectivedate").css("display", "block");
		$("#vfy_effectivedate").addClass("form-group-error");
    });
</script> 
</div>
</body>
</html>
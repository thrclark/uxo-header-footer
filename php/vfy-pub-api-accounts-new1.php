<?php 
$section = 'settings';
$page_title = 'api-accounts';
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
    <?php include ('includes/pub-header.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include ('includes/pub-nav.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-md-12 section-header">
                                    <h2 class="h3"> Create API Account</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="stepwizard">
                                        <div class="stepwizard-row setup-panel">
                                            <div class="stepwizard-step"> <a href="#step-1"  class="btn btn-primary btn-circle"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                                <p class="hidden-xs">Setup</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-2"  class="btn btn-default btn-circle" ><i class="fa fa-users" aria-hidden="true"></i></a>
                                                <p class="hidden-xs">Publishers</p>
                                            </div>
                                            <div class="stepwizard-step"> <a href="#step-3" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                                <p class="hidden-xs">Review/Save</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form style="padding-bottom:15px">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-xs-12">
                                                <fieldset>
                                                    <legend>Setup</legend>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="title"> API Account Name </label>
                                                        <span class="help-block small">The API account name is how the API account will be referred to throughout the system.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="title" name="title" type="text" required="required">
                                                                <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="status">Status </label>
                                                        <span class="help-block small">Herb seasons which days darkness. Together called. Man said. Great life brought fish Whose. Have without. Saying void man him.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select class="select form-control" id="status" name="select">
                                                                    <option label="" value=""></option>
                                                                    <option label="" value="">Active</option>
                                                                    <option label="" value="">Inactive</option>
                                                                </select>
                                                                <div class="validation-fieldmessage" style="display:none" id="val_status"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please select a status.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="api_account_type"> API Account Type </label>
                                                        <span class="help-block small"> They're there i set have night morning fowl won't likeness. Fifth. Multiply forth given so seasons beginning. Under deep the. </span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select class="select form-control" id="api_account_type" name="select">
                                                                    <option label="" value=""></option>
                                                                    <option label="External API" value="EXTERNAL_API">External API</option>
                                                                    <option label="Maintenance API" value="MAINTENANCE_API">Maintenance API</option>
                                                                </select>
                                                                <div class="validation-fieldmessage" style="display:none" id="val_api"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please select an API account type.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox show4maintapi">
                                                        <label>
                                                            <input type="checkbox">
                                                            Renew Account <span class="help-block small">This account may be renewed within 30 days of expiration (expires on Tue Oct 18 2016).</span> </label>
                                                    </div>
                                                    <div class="checkbox show4maintapi">
                                                        <label>
                                                            <input type="checkbox">
                                                            Unlock Account <span class="help-block small">Unlock this API Account so it may be used again.</span> </label>
                                                    </div>
                                                    <div class="form-group show4maintapi">
                                                        <label class="control-label " for="permissionAccessLevel"> Permission Access Level </label>
                                                        <span class="help-block small"> Shall. Itself deep she'd good behold you're made lights fly.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select name="permissionAccessLevel" id="permissionAccessLevel"  class="form-control" aria-invalid="false">
                                                                    <option value="" class="" selected="selected">Select</option>
                                                                    <option label="Publisher Access" value="string:PUBLISHER" selected="selected">Publisher Access</option>
                                                                    <option label="Admin Access" value="string:TENANT_ADMIN">Admin Access</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group show4maintapi">
                                                        <label class="control-label" for=""> Maximum New Resources </label>
                                                        <span class="help-block small">Number of resources that are allowed to be created by this API Account. This prevents outside systems from accidentally over populating the system.</span>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <input class="form-control" id="" name="" type="number" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group show4extapi">
                                                        <div style="    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;"> External Rest API URLs</div>
                                                        <table class="table table-condensed table-responsive table-actions" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Title</th>
                                                                    <th>URL</th>
                                                                    <th>Type</th>
                                                                    <th>Version</th>
                                                                    <th> Timeout <span class="small">(milliseconds)</span></th>
                                                                    <th> Actions </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><input type="text" class="form-control"></td>
                                                                    <td><select name="select2" class="form-control">
                                                                            <option>Live Data API</option>
                                                                            <option>Callback API</option>
                                                                        </select></td>
                                                                    <td><select name="select3" class="form-control">
                                                                            <option>1.0</option>
                                                                            <option>1.2</option>
                                                                            <option>1.3</option>
                                                                            <option>1.6</option>
                                                                            <option>1.7</option>
                                                                            <option>1.9</option>
                                                                            <option>2.0</option>
                                                                        </select></td>
                                                                    <td><input type="text" class="form-control" placeholder="milliseconds"></td>
                                                                    <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> URL</a> </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-12 wizard-actions">
                                                <div class="btn-group pull-right" role="group" aria-label="">
                                                    <button class="btn btn-primary nextBtn" id="next1" type="button" >Next<i class="icon-angle-right"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-xs-12">
                                                <fieldset>
                                                    <legend>Publishers</legend>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="add_publisher">Choose Publishers </label>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <select name="from[]" id="multiselect" class="form-control" size="5" multiple="multiple">
                                                                    <option value="1">VS Team</option>
                                                                    <option value="2">HR Team</option>
                                                                    <option value="2">FINA Team</option>
                                                                    <option value="2">IT Team</option>
                                                                    <option value="3">FAC Team</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                <button type="button" id="multiselect_rightAll" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-forward"></i></button>
                                                                <button type="button" id="multiselect_rightSelected" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                                                <button type="button" id="multiselect_leftSelected" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                                                <button type="button" id="multiselect_leftAll" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-backward"></i></button>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <label class="control-label sr-only " for="added_publisher">Added Publishers </label>
                                                                <select name="to[]" id="multiselect_to" class="form-control" size="5" multiple="multiple">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="auth_type">Authentication Type </label>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select class="select form-control" id="auth_type" name="select">
                                                                    <option label="" value=""></option>
                                                                    <option label="" value="">Basic Authentication</option>
                                                                </select>
                                                                <div class="validation-fieldmessage" style="display:none" id="val_auth"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please select an authentication type.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="email"> Email </label>
                                                        <span class="help-block small">The email is used to send a daily reminder starting 30 days from the API Account expiring.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="email" name="email" type="email" required="required">
                                                                <div class="validation-fieldmessage" style="display:none" id="val_email"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please provide an email address.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="user_name"> User Name </label>
                                                        <span class="help-block small">Used for identification of the account.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="user_name" name="user_name" type="text" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="password">Password </label>
                                                        <span class="help-block small">Used to Secure the API Account.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="password" name="password" type="password" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="confirm_password">Confirm Password </label>
                                                        <span class="help-block small">Confirm the password. Passwords must match.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="confirm_password" name="confirm_password" type="password" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
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
                                                                            <p class="data-label">API Account Name:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">My API</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Status:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Active</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="show4maintapi">
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">API Account Type:</p>
                                                                            </div>
                                                                            <div class="col-md-9 "> <i class="small">Maintenance API</i> </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">Renew Accout:</p>
                                                                            </div>
                                                                            <div class="col-md-9"> <i class="small">Yes</i> </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">Unlock Accout:</p>
                                                                            </div>
                                                                            <div class="col-md-9"> <i class="small">Yes</i> </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">Permission Access Level:</p>
                                                                            </div>
                                                                            <div class="col-md-9"> <i class="small">Publisher Access</i> </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">Maximum New Resources:</p>
                                                                            </div>
                                                                            <div class="col-md-9"> <i class="small">15</i> </div>
                                                                        </div>
                                                                        <div class="show4extapi">
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">API Account Type:</p>
                                                                            </div>
                                                                            <div class="col-md-9 "> <i class="small">External API</i> </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="col-md-3">
                                                                                <p class="data-label">URLs:</p>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <table class="table table-condensed table-responsive">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Title</th>
                                                                                            <th>URL</th>
                                                                                            <th>Type</th>
                                                                                            <th>Version</th>
                                                                                            <th>Timeout</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>API Source 1</td>
                                                                                            <td>http://someurlgoeshere.edu</td>
                                                                                            <td>Live Data</td>
                                                                                            <td>1.2</td>
                                                                                            <td>500</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>API Source 3</td>
                                                                                            <td>http://someurlgoeshere.edu</td>
                                                                                            <td>Live Data</td>
                                                                                            <td>1.2</td>
                                                                                            <td>500</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>API Source 5</td>
                                                                                            <td>http://someurlgoeshere.edu</td>
                                                                                            <td>Callback</td>
                                                                                            <td>1.2</td>
                                                                                            <td>500</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>API Source 7</td>
                                                                                            <td>http://someurlgoeshere.edu</td>
                                                                                            <td>Callback</td>
                                                                                            <td>1.2</td>
                                                                                            <td>500</td>
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
                                                </div>
                                                <div class="well well-sm tile-content" style="">
                                                    <div class="row">
                                                        <div class="col-xs-6 lead">Publishers </div>
                                                        <div class="col-xs-6 text-right" style=""> <a href="#" class="btn btn-xs btn-default">Edit</a> </div>
                                                        <div class="col-md-12"> 
                                                            <!-- <p class="help-block"> The following recipients will be targeted in this verification: </p>-->
                                                            
                                                            <div class="review-data">
                                                                <div class="review-data-section">
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Selected Publishers:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">VS Team<br>
                                                                            HR Team</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Authentication Type:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">Basic Authentication</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Email:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">thrclark@iu.edu</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">User Name:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">thrclark</i> </div>
                                                                        <div class="clearfix"></div>
                                                                        <div class="col-md-3">
                                                                            <p class="data-label">Password:</p>
                                                                        </div>
                                                                        <div class="col-md-9"> <i class="small">xxxxxxxxxxxxxxxx</i> </div>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('a.addstuff').click(function() {
            $('#myTable tbody').append('<tr> <td><input type="text" class="form-control"></td> <td><input type="text" class="form-control"></td> <td><select name="select2" class="form-control"> <option>Live Data API</option> <option>Callback API</option> </select></td> <td><select name="select3" class="form-control"> <option>1.0</option> <option>1.2</option> <option>1.3</option> <option>1.6</option> <option>1.7</option> <option>1.9</option> <option>2.0</option> </select></td> <td><input type="text" class="form-control" ></td> <td><a href="#myTable" class="btn btn-xs btn-default deleterow" style="margin-top:5px">Delete</a></td> </tr>');
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("table").on('click', '.deleterow', function() {
            $(this).closest('tr').remove();
        });
    });
</script> 
    <script>
    $("#form_save").click(function() {
       $.toast({
    text: "Please fill out the missing fields.", // Text that is to be shown in the toast
    heading: 'Missing Fields', // Optional heading to be shown on the toast
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
        $("#val_name, #val_api, #val_status, #val_auth, #val_email").show();
       
		
		
		
		
		
		
		
    });
</script> 
    <script type="text/javascript">
jQuery(document).ready(function($) {
    $('#multiselect').multiselect();
});
</script> 
    <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(function() {
    $('.show4maintapi, .show4extapi').hide(); 
    $('#api_account_type').change(function(){
        if($('#api_account_type').val() == 'MAINTENANCE_API') {
            $('.show4extapi').slideUp();
			$('.show4maintapi').slideDown(); 
        } else {
            $('.show4maintapi').slideUp(); 
			$('.show4extapi').slideDown(); 
        } 
    });
});
});//]]> 

</script> 
</div>
</body>
</html>
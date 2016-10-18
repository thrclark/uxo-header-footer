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
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Create API Account</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Setup</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="title"> Title </label>
                                            <span class="help-block small">The API Account title is how the API Account will be referred to throughout the system.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="title" name="title" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label " for="status">Status </label>
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
                                        <div class="form-group show4maintapi">
                                            <label class="control-label " for="">Renewal </label>
                                            <span class="help-block small">This account may be renewed within 30 days of expiration (expires on Tue Oct 18 2016).</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="checkbox">
                                                    <small>Renew </small> </div>
                                            </div>
                                        </div>
                                        <div class="form-group show4maintapi">
                                            <label class="control-label " for="">Locked </label>
                                            <span class="help-block small">Unlock this API Account so it may be used again.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="checkbox">
                                                    <small>Locked </small> </div>
                                            </div>
                                        </div>
                                        <div class="form-group show4maintapi">
                                            <label class="control-label " for="permissionAccessLevel"> Permission Access Level </label>
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
                                    </fieldset>
                                    <fieldset>
                                        <legend>Publishers</legend>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <label class="control-label " for="add_publisher">Select Publisher </label>
                                                    <select name="from[]" id="multiselect" class="form-control" size="5" multiple="multiple">
                                                        <option value="1">VS Team</option>
                                                        <option value="2">HR Team</option>
                                                        <option value="2">FINA Team</option>
                                                        <option value="2">IT Team</option>
                                                        <option value="3">FAC Team</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-1" style="padding-top:22px">
                                                    <button type="button" id="multiselect_rightAll" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-forward"></i></button>
                                                    <button type="button" id="multiselect_rightSelected" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                                    <button type="button" id="multiselect_leftSelected" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                                    <button type="button" id="multiselect_leftAll" class="btn btn-xs btn-default btn-block"><i class="glyphicon glyphicon-backward"></i></button>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label class="control-label " for="added_publisher">Added Publishers </label>
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
                                    <fieldset>
                                        <legend>External Rest API URLs</legend>
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
                                        <a href="#myTable" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> URL</a>
                                    </fieldset>
                                    <div class="text-right"> <a href="vfy-pub-api-accounts-home.php" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="form_save">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    
    
    
    
    
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
    $('.show4maintapi').hide(); 
    $('#api_account_type').change(function(){
        if($('#api_account_type').val() == 'MAINTENANCE_API') {
            $('.show4maintapi').slideDown(); 
        } else {
            $('.show4maintapi').slideUp(); 
        } 
    });
});
});//]]> 

</script> 
</div>
</body>
</html>

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
                                        <label class="control-label " for="api_account_type"> API Account Type </label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select class="select form-control" id="api_account_type" name="select">
                                                    <option label="" value=""></option>
                                                    <option label="External API" value="string:EXTERNAL_API">External API</option>
                                                    <option label="Maintenance API" value="string:MAINTENANCE_API">Maintenance API</option>
                                                </select>
                                                <div class="validation-fieldmessage" style="display:none" id="val_api"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please select an API account type.</div>
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
                                        <label class="control-label" for="email"> Email </label>
                                        <span class="help-block small">The email is used to send a daily reminder starting 30 days from the API Account expiring.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="email" name="email" type="email" required="required">
                                                <div class="validation-fieldmessage" style="display:none" id="val_email"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please provide an email address.</div>
                                            </div>
                                        </div>
                                    </div>
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
</div>
</body>
</html>

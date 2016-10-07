<?php 
$section = 'settings';
$page_title = 'publishers';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
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
                                <h2 class="h3">Create New Publisher</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group ">
                                    <label class="control-label" for="name"> Name </label>
                                    <span class="help-block small">Enter the display name for this publisher.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input class="form-control" id="name" name="name" type="text" required="required">
                                            <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="func_contact"> Functional Contact <span class="small">(Tier 2)</span> </label>
                                    <span class="help-block small">Enter the Tier 2 functional contact information.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input class="form-control" id="func_contact" name="func_contact" type="text" required="required">
                                            <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tech_contact"> Technical Contact <span class="small">(Tier 2)</span> </label>
                                    <span class="help-block small">Enter the Tier 2 technical contact information.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input class="form-control" id="tech_contact" name="func_contact" type="text" required="required">
                                            <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this verification.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="control-label">Description</label>
                                    <span class="help-block small">Description of the publisher. This is helpful for discriminating between publishers with similar names.</span>
                                    <textarea id="description" ng-model="publisherCtrl.publisher.description" name="description" class="form-control ng-pristine ng-valid ng-empty ng-valid-maxlength ng-touched" rows="5" ng-maxlength="1000" countdown="" popover="" data-original-title="" title="" aria-invalid="false"></textarea>
                                </div>
                                
                               <div class="form-group">  <label for="description" class="control-label">Publisher Permissions</label> <div id="builder-basic"> </div></div>
                              
                                <div class="form-group ">
                                    <label class="control-label" for="email"> Email </label>
                                    <span class="help-block small">The email address is used to send updates/information to the publisher.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input class="form-control" id="email" name="email" type="email" required="required">
                                            <div class="validation-fieldmessage" style="display:none" id="val_email"> <i class="fa fa-minus-circle" aria-hidden="true"></i> Please provide an email address.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right"> <a href="vfy-pub-publishers-home.php" class="btn btn-default">Cancel</a>
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



</body>
</html>

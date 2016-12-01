<?php
$section = 'admin';
$page_title = 'tenants-metadata';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
#myTable tbody tr td {
	border: none;
	padding-left: 0px;
	padding-top: 0px;
}
</style>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include('includes/header-admin.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-admin.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Create New Metadata</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Setup</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="name"> Name </label>
                                            <span class="help-block small">Enter a name for this metadata.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="name" name="name" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="status"> Status </label>
                                            <span class="help-block small">Enter a status for this metadata.</span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="status" name="select">
                                                        <option value="active"> Active </option>
                                                        <option value="inactive"> Inactive </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="type"> Type </label>
                                            <span class="help-block small">Enter a type for this metadata.</span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="type" name="select">
                                                        <option value="service"> Service Provider </option>
                                                        <option value="identity"> Identity Provider </option>
                                                        <option value="multiple"> Multiple Providers </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Metadata Source</legend>
                                        <div class="form-group ">
                                            <label class="control-label " for="user_att_source">User Attribute Source </label>
                                            <span class="help-block small">The source of user attributes when a user logs in (e.g. user name, first name, etc...)</span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="user_att_source" name="select">
                                                        <option value="active"> None </option>
                                                        <option value="cas"> CAS </option>
                                                        <option value="ldap"> LDAP </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group second-ldap">
                                            <label class="control-label " for="allow_sec_ldap">Allow a Secondary LDAP</label>
                                            <span class="help-block small">Allow a second LDAP connection to another LDAP server. User will go to the primary first and if fail, it will try the secondary LDAP server. The next time this user logs in, the user will go to the second LDAP connection first.</span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="allow_sec_ldap" name="select">
                                                        <option value="allow"> Allow </option>
                                                        <option value="dontallow"> Don't Allow </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                   <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="form_save" data-toggle="modal" data-target="#confirm_save">Save</button>
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
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('a.addstuff').click(function() {
            $('#myTable tbody').prepend('<tr><td><input type="text" class="form-control"></td><td><a href="#" class="btn btn-xs btn-default" style="margin-top:5px">Delete</a></td></tr>');
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
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $(function() {
            $('.auth-cas, .auth-saml').hide();
            $('#auth_type').change(function() {
                if ($('#auth_type').val() == 'cas') {
                    $('.auth-cas').slideDown();
                } else {
                    $('.auth-cas').slideUp();
                }
            });

            $('#auth_type').change(function() {
                if ($('#auth_type').val() == 'saml') {
                    $('.auth-saml').slideDown();
                } else {
                    $('.auth-saml').slideUp();
                }
            });

        });
    }); //]]>
</script> 
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $(function() {
      
            $('#cas_server_notification').change(function() {
                if ($('#cas_server_notification').val() == 'true') {
                    $('.cas-server-notification').slideDown();
                } else {
                    $('.cas-server-notification').slideUp();
                }
            });

           

        });
    }); //]]>
</script> 
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $(function() {
       $('.second-ldap').hide();
            $('#user_att_source').change(function() {
                if ($('#user_att_source').val() == 'ldap') {
                    $('.second-ldap').slideDown();
                } else {
                    $('.second-ldap').slideUp();
                }
            });

           

        });
    }); //]]>
</script> 
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Configuration " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            //$newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#sortable").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script>



    
    
 <!-- Modal -->
    <div class="modal fade" id="confirm_exit" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Unsaved Changes</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">   <p>There are unsaved changes on this page. Would you like to continue editing?</p>
                        </div>
                    </div>
                </div>
              <div class="modal-footer"> <a href="vfy-admin-metadata-home.php" class="btn btn-default btn-sm">Discard Changes</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal">Continue Editing</a> </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="confirm_save" tabindex="-1" role="dialog" aria-labelledby="">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Settings Saved</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">
                            <p>Your settings have been saved.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <a href="vfy-admin-metadata-home.php" class="btn btn-default btn-sm">Close</a> </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>

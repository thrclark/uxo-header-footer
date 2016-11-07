<?php
$section = 'admin';
$page_title = 'tenants-new';
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
                                    <h2 class="h3">Create New Tenant</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Setup</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="name"> Name </label>
                                            <span class="help-block small">Enter a name for this tenant.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="name" name="name" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="unique_key"> Unique Key </label>
                                            <span class="help-block small">Enter a unique key to identify this tenant.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="unique_key" name="unique_key" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A unique key is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label " for="status">Status </label>
                                            <span class="help-block small"> Select the active status for this tenant. </span>
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
                                            <label class="control-label " for="primary">Primary </label>
                                            <span class="help-block small"> Specify whether or not this tenant is primary among existing tenants. Note that there can only be one tenant with primary designation. </span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="primary" name="select">
                                                        <option value="active"> Active </option>
                                                        <option value="inactive"> Inactive </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label " for="language">Language </label>
                                            <span class="help-block small"> Specify the language to be used for this tenant. </span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="language" name="select">
                                                        <option value="english-us"> English (US) </option>
                                                        <option value="french"> French </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div style="    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;"> URLs</div>
                                            <span class="help-block small"> Enter a domain name that will map to this tenant.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <table class="table table-actions" id="myTable">
                                                        <thead class="sr-only">
                                                            <tr>
                                                                <th>URL</th>
                                                                <th> Actions </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control"></td>
                                                                <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="control-label">Administrator Permissions</label>
                                            <div id="builder-basic"> </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Authentication</legend>
                                        <div class="form-group ">
                                            <label class="control-label " for="auth_type">Authentication Type </label>
                                            <span class="help-block small">Select the type of authentication to use for this tenant.</span>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="auth_type" name="select">
                                                        <option value="active"> None </option>
                                                        <option value="cas"> CAS </option>
                                                        <option value="saml"> SAML </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="cas_server_prefix"> CAS Server URL Prefix </label>
                                            <span class="help-block small">The root URL for the CAS server.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="cas_server_prefix" name="cas_server_prefix" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="cas_server_login"> CAS Server Login URL </label>
                                            <span class="help-block small">The login URL for the CAS server. This is a full URL and should contain the prefix if necessary.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="cas_server_login" name="cas_server_login" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="cas_server_logout"> CAS Server Logout URL </label>
                                            <span class="help-block small">The logout URL for the CAS server. This is a full URL and should contain the prefix if necessary.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="cas_server_logout" name="cas_server_logout" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="artifact_param"> Artifact Parameter Name </label>
                                            <span class="help-block small">The name of the URL request parameter for the artifact. This will be the value of the cas ticket received from CAS Server and then used to call validate. Typically this parameter is named 'ticket'.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="artifact_param" name="artifact_param" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="service_param"> Service Parameter Name </label>
                                            <span class="help-block small">The name of the URL request parameter for the service. The service is the URL that is passed to the CAS Server. Typically this parameter is named 'service'.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="service_param" name="service_param" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="service_param">Encoding </label>
                                            <span class="help-block small">The encoding type used by the CAS Server in the response. If not set, it will use the platforms default encoding type.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="service_param" name="service_param" type="text" required="required">
                                                    <div class="validation-fieldmessage" style="display:none" id="val_name"> <i class="fa fa-minus-circle" aria-hidden="true"></i> A name is required for this tenant.</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                          
                                      
                                      
                                        <div class="form-group auth-cas">
                                            <label class="control-label" for="cas_server_notification">CAS Server Client Notification </label>
                                            <span class="help-block small">Specify if the CAS Server supports notifying clients during single sign-out.</span>
                                             <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="select form-control" id="cas_server_notification" name="select">
                                               
                                                        <option value="true"> True </option>
                                                        <option value="false"> False </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                      
                                        <div class="form-group auth-cas cas-server-notification">
                                            <label class="control-label" for="relay_state">Relay State Parameter Name </label>
                                            <span class="help-block small">The name of the URL request parameter for the relay state. The relay state is used in single sign out using the front channel feature in CAS. Typically this parameter is named 'RelayState'.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="relay_state" name="relay_state" type="text" required="required">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                      
                                        <div class="form-group auth-cas cas-server-notification">
                                            <label class="control-label" for="front_logout">Front Logout Parameter Name </label>
                                            <span class="help-block small">The name of the URL request parameter for front logout. The front logout parameter is used for single sign out using the front channel feature in CAS. Typically this parameter is named 'SAMLRequest'.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="front_logout" name="front_logout" type="text" required="required">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                      
                                        <div class="form-group auth-cas cas-server-notification">
                                            <label class="control-label" for="logout_param_name">Logout Parameter Name </label>
                                            <span class="help-block small">The name of the URL request parameter for logout. The logout parameter is used for single sign out using the front channel feature in CAS. Typically this parameter is named 'logoutRequest'.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="logout_param_name" name="logout_param_name" type="text" required="required">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        <div class="auth-saml">
                                            <label class="control-label" for="service_param">SAML Configurations </label>
                                            <span class="help-block small">At least one SAML configuration is required.</span>
                                            <div class="panel-group" id="accordion1">
                                                <div id="sortable" class="ui-sortable">
                                                    <div class="panel panel-default template-add-data ui-sortable-handle">
                                                        <div class="panel-heading">
                                                            <p class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse-data1" aria-expanded="false"> Configuration 1 </a></p>
                                                            <span class="pull-right"><i class="fa fa-close clickable" aria-hidden="true"></i></span> </div>
                                                        <div id="collapse-data1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group ">
                                                                            <label for="samlUrl" class="control-label">URL</label>
                                                                            <select name="samlUrl" id="samlUrl" required class="form-control  ">
                                                                                <option value="?" selected="selected"></option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="sp" class="control-label">Service Provider</label>
                                                                            <select name="sp" id="sp" required class="form-control  ">
                                                                                <option value="?" selected="selected"></option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="idp" class="control-label">Identity Provider</label>
                                                                            <select name="idp" id="idp" required class="form-control  ">
                                                                                <option value="?" selected="selected"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group ">
                                                                            <label for="serviceProviderAlias" class="control-label">Service Provider Alias</label>
                                                                            <div class="counter-container">
                                                                                <input type="text" name="serviceProviderAlias" id="serviceProviderAlias" required="" ng-maxlength="2000" countdown="" class="form-control  " title="">
                                                                                <span class="label label-info" style="position:absolute;right:0;"><span class="counter">2000</span><span class="sr-only"> characters remaining</span></span></div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="serviceProviderEntityId" class="control-label">Service Provider Entity ID</label>
                                                                            <div class="counter-container">
                                                                                <input type="text" name="serviceProviderEntityId" id="serviceProviderEntityId" required="" ng-maxlength="2000" countdown="" class="form-control  " title="">
                                                                                <span class="label label-info" style="position:absolute;right:0;"><span class="counter">2000</span><span class="sr-only"> characters remaining</span></span></div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="identityProviderEntityId" class="control-label">Identity Provider Entity ID</label>
                                                                            <div class="counter-container">
                                                                                <input type="text" name="identityProviderEntityId" id="identityProviderEntityId" required="" ng-maxlength="2000" countdown="" class="form-control  " title="">
                                                                                <span class="label label-info" style="position:absolute;right:0;"><span class="counter">2000</span><span class="sr-only"> characters remaining</span></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-xs btn-default btn-add-data pull-right"> <i class="fa fa-plus" aria-hidden="true"></i> SAML Configuration</button>
                                        </div>
                                    </fieldset>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     <fieldset>
                                        <legend>User Attributes</legend>
                                        
                                        
                                         <div class="form-group ">
                                            <label class="control-label " for="user_att_source">User Attribute Sourcee </label>
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
</body>
</html>

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
                                                                <td></td>
                                                                <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></td>
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
</body>
</html>

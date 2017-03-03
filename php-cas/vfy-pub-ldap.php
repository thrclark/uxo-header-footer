<?php 
$section = 'settings';
$page_title = 'ldap';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style></style>
<?php include ('includes/scripts.php') ?>
<!-- Responsive Tables-->
<script type="text/javascript" src="../js/tablesaw.js"></script>
<script type="text/javascript" src="../js/tablesaw-init.js"></script>
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
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">LDAP Configuration</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Settings</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="username"> User Name <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">Enter the LDAP user name for this configuration. Example: cn=myUser,ou=myOu,dc=ads,dc=myDomain,dc=edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="username" name="username" type="text" placeholder="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="password">Password <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">Enter the LDAP user name password for this configuration.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="password" name="password" type="password" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="password">Confirm Password </label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="password" name="password" type="password" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="base"> Base <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">LDAP base information. Example: ou=myOu,dc=ads,dc=myDomain,dc=edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="base" name="base" type="text" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="ldap_url"> LDAP URL <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">URL to the LDAP server. Example: ads.mydomain.edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="ldap_url" name="ldap_url" type="text" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Timeouts</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="connection_timeout"> Connection timeout <span class="small" style="font-weight:normal">(milliseconds)</span></label>
                                            <span class="help-block small">Number of Milliseconds to wait to establish connection to ldap server. Default is 5000 milliseconds (5 seconds).</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="connection_timeout" type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="read_timeout"> Read timeout <span class="small" style="font-weight:normal">(milliseconds)</span></label>
                                            <span class="help-block small">Number of Milliseconds to wait to read from ldap server. Default is 1000 milliseconds (1 second).</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="read_timeout" type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="100" data-slider-value="1000" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Pooling</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="idle_connections_min"> Minimum number of idle connections</label>
                                            <span class="help-block small">Default is 0, maximum is 50</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="idle_connections_min" type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="0" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="idle_connections_max"> Maximum number of idle connections</label>
                                            <span class="help-block small">Default is 8. Use -1 for no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="idle_connections_max" type="text" data-slider-min="-1" data-slider-max="100" data-slider-step="1" data-slider-value="8" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="active_connections_max"> Maximum number of active connections</label>
                                            <span class="help-block small">Default is 8. Use -1 for no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="active_connections_max" type="text" data-slider-min="-1" data-slider-max="100" data-slider-step="1" data-slider-value="8" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="total_connections_max"> Maximum number of total connections</label>
                                            <span class="help-block small">Default is -1 or no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="total_connections_max" type="text" data-slider-min="-1" data-slider-max="200" data-slider-step="1" data-slider-value="-1" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="wait_time_max"> Maximum wait time in milliseconds</label>
                                            <span class="help-block small">The maximum amount of time in milliseconds the application will wait when the ldap pool is exhausted. Default is -1 which means wait indefinitely.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input id="wait_time_max" type="text" data-slider-min="-1" data-slider-max="10000" data-slider-step="1" data-slider-value="-1" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a> <a href="" class="btn btn-primary" data-toggle="modal" data-target="#confirm_save">Save</a> </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Discard Changes</button>
                    <button type="button" class="btn btn-primary btn-sm">Continue Editing</button>
                </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>

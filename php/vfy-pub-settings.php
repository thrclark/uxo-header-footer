<?php
$section = 'settings';
$page_title = 'general-settings';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
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
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">General Settings</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of general settings
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">Name</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Description</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Value</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td >System Email</td>
                                        <td >Email address from which email is sent.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div ></div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#settings_sysemail"  >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Enable Email</td>
                                        <td >Turn on email functionality. Default is no</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >No</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#settings_enableemail"  >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Maintenance Resource Page Count</td>
                                        <td >The number of items displayed on a page at one time.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >40</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#maintresourcecount">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Application Name</td>
                                        <td >The name of the application. This is displayed in the header.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >Verification System</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#appname">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Verification Intro</td>
                                        <td >Text to be displayed at the top of every verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >On occasion, we require verification of your personal information. The item(s) presented on this …</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#vfyintro">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Verify Message</td>
                                        <td >Text to be displayed next to the Verify option.  This can be overridden by an individual verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >I have verified that the above information is up to date and correct.</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#defaultvfymsg" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Defer Message</td>
                                        <td >Text to be displayed next to the Defer option.  This can be overridden by an individual verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >I choose to verify this information later.</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#defaultdefermsg">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Target URL</td>
                                        <td >Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div ></div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#defaulttargeturl">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Error Message</td>
                                        <td >A message that is displayed when an error occurs preventing a verification from being completed.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >There is a system error that is currently preventing verification of your information. Please ski…</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#errormessage">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Google Analytics ID</td>
                                        <td >The ID assigned to your domain in the Google Analytics administrtion tool</td>
                                        <td><span aria-hidden="false" class="">
                                            <div ></div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs"  data-toggle="modal" data-target="#googleana">Edit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
</div>

<!-- Modal -->
<div class="modal fade" id="settings_sysemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="vfy_name">
                        <label class="control-label" for="sysemail"> System Email </label>
                        <span class="help-block small"> Email address from which email is sent.</span>
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" id="sysemail">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="settings_enableemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="vfy_name">
                        <label class="control-label" for="name"> Enable Email </label>
                        <span class="help-block small"> Turn on email functionality. Default is no.</span>
                        <div class="row">
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option> Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="maintresourcecount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Maintenance Resource Page Count </label>
                        <span class="help-block small">The number of items displayed on a page at one time.</span>
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" id="asdfasdfasdfasdfasdfasdfasdf">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="appname" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Application Name </label>
                        <span class="help-block small">The name of the application. This is displayed in the header.</span>
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" id="asdfasdfasdfasdfasdfasdfasdf">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="vfyintro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Verification Intro </label>
                        <span class="help-block small">Text to be displayed at the top of every verification.</span>
                       <div class="row">
                            <div class="col-sm-12">
                               <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="defaultvfymsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Default Verify Message </label>
                        <span class="help-block small">Text to be displayed next to the Verify option. This can be overridden by an individual verification.</span>
                       <div class="row">
                            <div class="col-sm-12">
                               <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="defaultdefermsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Default Defer Message </label>
                        <span class="help-block small">Text to be displayed next to the Defer option. This can be overridden by an individual verification.</span>
                       <div class="row">
                           <div class="col-sm-12">
                               <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="defaulttargeturl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Default Target URL </label>
                        <span class="help-block small">Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</span>
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" id="asdfasdfasdfasdfasdfasdfasdf">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="errormessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Error Message </label>
                        <span class="help-block small">A message that is displayed when an error occurs preventing a verification from being completed.</span>
                       <div class="row">
                            <div class="col-sm-12">
                               <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="googleana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>General Settings</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" id="asdfasdfasdfasdfasdf">
                        <label class="control-label" for="sysemail">Google Analytics ID </label>
                        <span class="help-block small">The ID assigned to your domain in the Google Analytics administration tool</span>
                       <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="" id="asdfasdfasdfasdfasdfasdfasdf">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>


















</body>
</html>

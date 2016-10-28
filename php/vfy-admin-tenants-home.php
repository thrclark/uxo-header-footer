<?php
$section = 'admin';
$page_title = 'tenants-new';
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
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Tenants</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> <a href="asdfasdfp" class="btn btn-xs btn-default"> <i class="fa fa-plus" aria-hidden="true"></i> New</a> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of system parameters
                                </caption>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Key</th>
                                        <th>Status</th>
                                        <th>URL</th>
                                        <th>Primary</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td >iu-verify-unt</td>
                                        <td >iu-verify-unt</td>
                                        <td >Active</td>
                                        <td >apps-test.iu.edu</td>
                                        <td >No</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="xxx.php" target="">Edit</a></li>
                                                    <li><a href="xxx.php" target="">User Attribute Mappings</a></li>
                                                    <li><a href="xxx.php" target="">View As</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td >iu-verify-snd</td>
                                        <td >iu-verify-snd</td>
                                        <td >Active</td>
                                        <td >apps-snd.iu.edu</td>
                                        <td >No</td>
                                        <td class="text-center"><div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="xxx.php" target="">Edit</a></li>
                                                <li><a href="xxx.php" target="">User Attribute Mappings</a></li>
                                                <li><a href="xxx.php" target="">View As</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></td>
                                    </tr>
                                    <tr >
                                        <td >iu-verify-prd</td>
                                        <td >iu-verify-prd</td>
                                        <td >Active</td>
                                        <td >apps-prd.iu.edu</td>
                                        <td >Yes</td>
                                        <td class="text-center"><div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="xxx.php" target="">Edit</a></li>
                                                <li><a href="xxx.php" target="">User Attribute Mappings</a></li>
                                                <li><a href="xxx.php" target="">View As</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></td>
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
<div class="modal fade" id="app_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>System Paramters</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Application Email </label>
                        <span class="help-block small"> The address from which global emails are sent.</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="">
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
<div class="modal fade" id="google_analytic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>System Paramters</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Google Analytics Rollup ID</label>
                        <span class="help-block small"> Data for selected tenants will be sent to this Google Analytics ID.</span>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="">
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
<div class="modal fade" id="send_exception" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>System Paramters</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Send Exception Email</label>
                        <span class="help-block small"> Space delimited list of email addresses to which exception reports are sent.</span>
                        <table class="table table-condensed table-responsive table-actions" id="myTable">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th> <span class="sr-only">Actions</span> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" value="thrclark@iu.edu"></td>
                                    <td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" value="itadmin@school.edu"></td>
                                    <td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" value="itmanagement@school.edu"></td>
                                    <td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" value="sysadmin@school.edu"></td>
                                    <td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> Add</a></td>
                                </tr>
                            </tbody>
                        </table>
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
<div class="modal fade" id="send_exception_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>System Paramters</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Send Exception Email Toggle</label>
                        <span class="help-block small"> Turn on sending of email for exceptions. Valid values are 'on' and 'off'. Default is off.</span>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                On </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                                Off </label>
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
<div class="modal fade" id="update_server" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>System Paramters</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name">Update Server </label>
                        <span class="help-block small"> Enter the name of one of the servers that will be used for updating new data on releases.</span>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="">
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

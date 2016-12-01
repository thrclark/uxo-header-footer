<?php
$section = 'admin';
$page_title = 'tenant-userattribute';
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
                                    <h2 class="h3">User Attribute Mappings </h2>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="selecttenant" class="sr-only">Select Tenant</label>
                                            <select id="selecttenant" class="form-control">
                                                <option>Select Tenant</option>
                                                <option>iu-verify-unt</option>
                                                <option>iu-verify-snd</option>
                                                <option>iu-verify-prd</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> <a href="#" class="btn btn-xs btn-default"  data-toggle="modal" data-target="#new_mapping"> <i class="fa fa-plus" aria-hidden="true"></i> Custom Mapping</a> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Remote Data Source Key</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td >Email Address</td>
                                        <td >mail</td>
                                        <td >Default</td>
                                        <td >Inactive</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >First Name</td>
                                        <td >givenName</td>
                                        <td >Default</td>
                                        <td >Inactive</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Groups</td>
                                        <td ></td>
                                        <td >Default</td>
                                        <td >Inactive</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Last Name</td>
                                        <td >sn</td>
                                        <td >Default</td>
                                        <td >Inactive</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Person ID</td>
                                        <td >iuEduPSEMPLID</td>
                                        <td >Default</td>
                                        <td >Active</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Roles</td>
                                        <td >eduPersonAffiliation</td>
                                        <td >Default</td>
                                        <td >Inactive</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >User Name</td>
                                        <td >sAMAccountName</td>
                                        <td >Default</td>
                                        <td >Active</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Custom 1</td>
                                        <td >customsourcekey1</td>
                                        <td >Custom</td>
                                        <td >Inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td >Custom 2</td>
                                        <td >customsourcekey2</td>
                                        <td >Custom</td>
                                        <td >Active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
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
<div class="modal fade" id="new_mapping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>Custom User Attribute Mapping</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Local Application Key </label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Remote Data Source Key </label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="name"> Status </label>
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control">
                                    <option>Active</option>
                                    <option>Inactive</option>
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
</body>
</html>

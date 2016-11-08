<?php
$section = 'admin';
$page_title = 'tenants-metadata';
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
                                    <h2 class="h3">Metadata</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> <a href="vfy-admin-metadata-new.php" class="btn btn-xs btn-default"> <i class="fa fa-plus" aria-hidden="true"></i> New</a> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of system parameters
                                </caption>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        <td >meta-ucs-int</td>
                                        <td >Service Provider</td>
                                        <td >Active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1"> <li><a href="vfy-admin-metadata-new.php" target="">Edit</a></li>
                                                    
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td >meta-fil-cra</td>
                                        <td >Identity Provider</td>
                                        <td >Active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1"> <li><a href="vfy-admin-metadata-new.php" target="">Edit</a></li>
                                                    
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td >meta-usc-prd</td>
                                        <td >Service Provider</td>
                                        <td >Active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1"> <li><a href="vfy-admin-metadata-new.php" target="">Edit</a></li>
                                                    
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
</body>
</html>

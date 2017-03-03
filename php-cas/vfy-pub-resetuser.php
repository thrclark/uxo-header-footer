<?php 
$section = 'settings';
$page_title = 'resetuser';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
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
                                    <h2 class="h3">View/Reset User Verifications</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row setup-content" id="step-4" style="display: block;">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="well well-sm tile-content" style="">
                                                        <div class="row">
                                                            <div class="col-sm-6" style="padding-top:5px;">
                                                                <div> <strong>User Verification Status</strong> </div>
                                                                <span class="help-block small"> Search for a user to determine their verification status or reset their verifications.</span> </div>
                                                            <div class="col-sm-6 text-right" style="    padding-top: 8px;">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Username/ID/Email">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i> <span class="sr-only"> Search</span></button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="h4"> Verifications for user 'thrclark'</h3>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of current verifications
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">Name</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Transaction Date</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Type</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HC - Immunization Records</td>
                                        <td class="text-center">Jan 12, 2017</td>
                                        <td class="text-center">Verify</td>
                                        <td class="text-center"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#settings_sysemail"  >Reset</a></td>
                                    </tr>
                                    <tr>
                                        <td>HRMS - Citizenship</td>
                                        <td class="text-center">Jan 5, 2017</td>
                                        <td class="text-center">Deferral</td>
                                           <td class="text-center"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#settings_sysemail"  >Reset</a></td>
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
<div class="modal fade" id="settings_sysemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>Confirm</h4>
            </div>
            <div class="modal-body">
                <div class="message">
                    <div class="message-content">
                        <p>The following information will be used to reset this verification for the selected user:</p>
                        
                        <dl class="">
                            <dt>User</dt>
                            <dd>thrclark</dd>
                            <dt>Verification Name</dt>
                            <dd>HC - Immunization Records</dd>
                        </dl>
                      <p>  Do you wish to proceed?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Reset User Verification</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

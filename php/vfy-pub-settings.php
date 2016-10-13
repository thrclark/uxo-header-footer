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
                                <div class="col-sm-6 section-header">
                                    <h2 class="h3">General</h2>
                                </div>
                                <div class="col-sm-6 text-right" style="padding-top: 9px;">
                                    <div class="form-inline" style="padding-bottom: 10px;">
                                        <div class="form-group">
                                            <label class="sr-only" for=filtertable>Filter</label>
                                            <input type=text id="filtertable" class="form-control input-sm" placeholder="Filter">
                                        </div>
                                    </div>
                                </div>
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
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Enable Email</td>
                                        <td >Turn on email functionality. Default is no</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >No</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Maintenance Resource Page Count</td>
                                        <td >The number of items displayed on a page at one time.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >40</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Application Name</td>
                                        <td >The name of the application. This is displayed in the header.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >Verification System</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Verification Intro</td>
                                        <td >Text to be displayed at the top of every verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >On occasion, we require verification of your personal information. The item(s) presented on this …</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Verify Message</td>
                                        <td >Text to be displayed next to the Verify option.  This can be overridden by an individual verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >I have verified that the above information is up to date and correct.</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Defer Message</td>
                                        <td >Text to be displayed next to the Defer option.  This can be overridden by an individual verification.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >I choose to verify this information later.</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Default Target URL</td>
                                        <td >Users will be directed to this URL after completing their verifications if no target URL is passed to the system.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div ></div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Error Message</td>
                                        <td >A message that is displayed when an error occurs preventing a verification from being completed.</td>
                                        <td><span aria-hidden="false" class="">
                                            <div >There is a system error that is currently preventing verification of your information. Please ski…</div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
                                    </tr>
                                    <tr >
                                        <td >Google Analytics ID</td>
                                        <td >The ID assigned to your domain in the Google Analytics administrtion tool</td>
                                        <td><span aria-hidden="false" class="">
                                            <div ></div>
                                            </span></td>
                                        <td><a href="#" class="btn btn-default btn-xs" >Edit</a></td>
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

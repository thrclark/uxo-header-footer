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
</head>
<body class="view-admin" id="top">
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
                            <div class="col-md-12 section-header">
                                <h3>General Settings</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label" for="enable-email"> Enable Email </label>
                                    <span class="help-block small" id="">Turn on email functionality. Default is 'Disabled'.</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control" id="enable-email">
                                                <option>Enabled</option>
                                                <option>Disabled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="mr-pagecount">Maintenance Resource Page Count</label>
                                    <span class="help-block small" id="">The number of items displayed on a page at one time.</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="mr-pagecount" placeholder="enter value">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="sys-email">System Email</label>
                                    <span class="help-block small" id="">Email address from which email is sent.</span>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="email" class="form-control" id="sys-email" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
</body>
</html>

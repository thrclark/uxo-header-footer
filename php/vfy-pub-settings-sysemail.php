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
                                    <h2 class="h3">General Settings: System Email</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group ">
                                        <label class="control-label" for="email"> Email </label>
                                        <span class="help-block small">Provide an email address from which email is sent.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="email" name="email" type="text" required="required">
                                               
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="text-right"> <a href="vfy-pub-settings.php" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="form_save">Save</button>
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
</div>
</body>
</html>

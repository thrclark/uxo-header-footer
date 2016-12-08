<?php 
$section = 'branding';
$page_title = 'app-icon';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style>
.nav-tabs {
	margin-bottom: 15px;
}
</style>
<?php include ('includes/scripts.php') ?>
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
                                    <h2 class="h3">Fonts</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#menu1" >Favicon</a></li>
                                <li><a data-toggle="tab" href="#menu2">Favicon Images</a></li>
                                <li><a data-toggle="tab" href="#menu3">Apple Touch Images</a></li>
                                <li><a data-toggle="tab" href="#menu4">Microsoft Tile Images</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                
                                
                                <fieldset>
                                
                                <legend>Favicon</legend>
                                
                                </fieldset>
                                
                                
                                
                                    
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
                    <div class="message-content">
                        <p>There are unsaved changes on this page. Would you like to continue editing?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Discard Changes</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal">Continue Editing</a> </div>
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
            <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Close</a> </div>
        </div>
    </div>
</div>
</body>
</html>

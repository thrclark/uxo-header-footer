<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <?php include ('includes/instructions-top.php') ?>
        <div class="well">
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="h4">IU Notify</h3>
                </div>
                <div class="col-xs-6" style="padding-top:10px"> </div>
            </div>
            <p class="verify-desc"> Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
            <hr>
            <div class="form-horizontal">
                <div class="alert alert-danger" role="alert" id="alert-error" style="display:none">Some items in this section have not been fully verified. Select 'edit' to complete verification, and then refresh this section.</div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">IU Office:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-855-5555</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Home:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-336-0510</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Secondary Home:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Mobile 1:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-369-9664</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Mobile 2:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Mobile 3:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm form-section-control">
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <a href="#" class="btn btn-xs btn-default" id="refresh">Refresh</a> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Non-IU Email:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">thrclark@gmail.com</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Recieve notices from:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">IU Bloomington<br>
                            IU Kokomo </p>
                    </div>
                </div>
                <div class="form-group form-group-sm form-section-control">
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <a href="#" class="btn btn-xs btn-default">Refresh</a><a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="submission">
            <?php include ('includes/instructions-bottom.php') ?>
            <div class="radio">
                <input id="box1" type="checkbox" class="with-font" />
                <label for="box1" class="lead">I have verified that the above information is up to date and correct.</label>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                  
                    <button class="btn btn-lg btn-primary" id="submit" data-toggle="modal" data-target="#verify_error"> Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('modal/verify-error.php') ?>
</body>
</html>

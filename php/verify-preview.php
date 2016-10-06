<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<div class="banner-preview">
    <div class="preview-text">Preview Only</div>
</div>
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <?php include ('includes/instructions-top.php') ?>
        <div class="well vfy-section">
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
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm form-section-control">
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <!--<a href="#" class="btn btn-xs btn-default">Refresh</a>--> <a href="#" class="btn btn-xs btn-primary edit-group">Edit</a> </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-sm-3 control-label">Label:</div>
                    <div class="col-sm-9">
                        <p class="form-control-static">xxxxxxxxxx</p>
                    </div>
                </div>
                <div class="form-group form-group-sm form-section-control">
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <!--<a href="#" class="btn btn-xs btn-default">Refresh</a>--> <a href="#" class="btn btn-xs btn-primary edit-group">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="submission">
            <?php include ('includes/instructions-bottom.php') ?>
            <fieldset>
                <legend class="sr-only">Verify</legend>
                <div class="radio">
                    <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                    <label for="question1" class="lead">I have verified that the information on this page is currently accurate.</label>
                </div>
                <div class="radio">
                    <input id="question2" name="question" type="radio" class="with-font" value="sel"/>
                    <label for="question2" class="lead">I choose to verify this information later.<br>
                        <span style=" font-size:14px; display:block">(you may bypass this verification 8 more times)</span></label>
                </div>
            </fieldset>
            <div class="row">
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                    <button class="btn btn-lg btn-primary" id="submit"> Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            $("#alert-error").fadeIn("slow", function() {});
        });

        $("#refresh").click(function() {
            location.reload();
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".edit-group").click(function() {
            $(event.target).closest('.vfy-section').prepend(" <div class='overlay'></div><a href='#' class='btn btn-primary btn-lg refresh'><i class='fa fa-refresh' aria-hidden='true'></i> Refresh</a>");
            $(".refresh").click(function() {
                $(".overlay, .refresh").fadeOut( "fast" );
            });
        });
    });
</script>
</body>
</html>

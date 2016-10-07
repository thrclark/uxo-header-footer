<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
.updated {
	background: #eefbff;
}
</style>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <?php include ('includes/instructions-top.php') ?>
        <div class="well vfy-section">
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="h4"> Military Status</h3>
                </div>
                <div class="col-xs-6" style="padding-top:10px"> 
                    <!-- <div class="dropdown pull-right"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                        <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                            <li><a href="#">VA Benefits</a></li>
                            <li><a href="#">Veterans Support Services</a></li>
                        </ul>
                    </div>--> 
                </div>
            </div>
            <p class="verify-desc"> Indiana University periodically invites all employees to update their veteran status. At this time, we ask all employees to review their current status below and click edit if this information is incorrect. Definitions of each veteran category can be seen by clicking the edit button. Data collected will be used for reporting and analysis purposes and will not be used against you in anyway. </p>
            <hr>
            <div class="form-horizontal">
                <div class="form-group form-group-sm" id="test-updated">
                    <label class="col-sm-3 control-label">Military Status:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static" id="checkmark-here">Not a Veteran </p>
                    </div>
                </div>
                <div class="form-group form-group-sm form-section-control">
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <!--<a href="#" class="btn btn-xs btn-default">Refresh</a>--> <a href="#" class="btn btn-xs btn-primary edit-group">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="well vfy-section">
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="h4">Disabled Status</h3>
                </div>
                <div class="col-xs-6" style="padding-top:10px"> 
                    <!--  <div class="dropdown pull-right"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                        <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                            <li><a href="#">Assistive Technology at IU</a></li>
                        </ul>
                    </div>--> 
                </div>
            </div>
            <p> Indiana University is required, in accordance with the Rehabilitation Act of 1973, section 503, to periodically invite all employees to self identify as an individual with disabilities. All employees should submit this information by clicking the edit link below and completing the short form. Data collected will not will be used for preparing an analysis purposes and will not be used against you in anyway. </p>
            <hr>
            <div class="form-horizontal">
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Disabled Status:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified </p>
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
<script type='text/javascript'>
    $(window).load(function() {
        $('.well').prepend("<div class='overlay-loader'></div>");
        setTimeout(function() {
            $('.overlay-loader').fadeOut();
        }, 2000);
    });
</script> 
<script>
    $(document).ready(function() {

        $("#test-updated").delay(2000).queue(function(next) {
            $(this).addClass("updated");
            $('#checkmark-here').append("<i class='fa fa-check-circle' aria-hidden='true'style='color:#2879b8;margin-left: 5px;'></i>");
            next();
        });
    });
</script>
</body>
</html>

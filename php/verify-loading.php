<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<style type="text/css">
.well .test-loader {
	background: white;
	position: absolute;
	width: 100%;
	height: 100%;
	margin-left: -19px;
	margin-top: -19px;
	z-index: 10;
	opacity: 0.8;
}
.well .test-loader:before {
	font-family: FontAwesome;
	content: "\f1ce";
	position: absolute;
	top: 40%;
	left: 49%;
	font-size: 46px;
	animation: spin 2s linear infinite;
}
 @keyframes spin {
 0% {
transform: rotate(0deg);
}
 100% {
transform: rotate(360deg);
}
}
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
        <div class="well" style="position:relative">
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
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <!--<a href="#" class="btn btn-xs btn-default">Refresh</a>--> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="well" style="position:relative">
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
                    <div class="col-sm-offset-2 col-sm-10 text-right"> <!--<a href="#" class="btn btn-xs btn-default">Refresh</a>--> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="submission">
            <?php include ('includes/instructions-bottom.php') ?>
            <fieldset>
                <legend class="sr-only">Verify</legend>
                <div class="radio">
                    <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                    <label for="question1" class="lead">I have verified that the above information is up to date and correct.</label>
                </div>
                <div class="radio">
                    <input id="question2" name="question" type="radio" class="with-font" value="sel"/>
                    <label for="question2" class="lead">I choose to verify this information later.<br>
                        <span style=" font-size:14px; display:block">(you may bypass this verification 8 more times)</span></label>
                </div>
            </fieldset>
            <div class="row">
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
                    <button class="btn btn-lg btn-default" id=""> Refresh</button>
                    <button class="btn btn-lg btn-primary" id="submit"> Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('.well').prepend("<div class='test-loader'></div>");
setTimeout(function() {
  $('.test-loader').fadeOut();
}, 2000);
});//]]> 

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
<script>
    $(document).ready(function() {

        $('.nav-tabs-responsive').tabCollapse();
		$('.nav-tabs-responsive').on('shown-tabs.bs.tabcollapse', function(){
    		$('.nav-tabs-responsive a:first').tab('show')
});

    });
	
</script> 
<script type="text/javascript">
    $(function () {
		$('#birthdate').datetimepicker({
			format: 'MM/DD/YYYY'
			});
        $('#datetimepicker6').datetimepicker({
			format: 'MM/DD/YYYY'
			});
        $('#datetimepicker7').datetimepicker({
			format: 'MM/DD/YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
</body>
</html>

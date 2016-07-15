<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <div class="tcptdp-header">
            <div class="media-body">
                <h2 class="media-heading">All up to date?</h2>
                
                <!--          <div class="controls hidden-xs" style="position:absolute; top:0px; right:0px"> <a href="#" class="btn btn-sm btn-default favorite" style="background:#EBEBEB"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="hidden-sm hidden-xs">Favorite</span></a> </div>-->
                
                <div class="controls">
                    <div class="dropdown"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                        <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                            <li><a href="#">What are IU Verifications?</a></li>
                            <li><a href="#">Help Link 2</a></li>
                            <li><a href="#">Help Link 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p> Your login has been interrupted for the purpose of verifying important information. For more information on why you are seeing this page, <a href="https://uits.iu.edu/cas-interrupts" target="_blank">click here</a> to read more about CAS Interrupts. </p>
        <div class="well">
            <div class="row">
                <div class="col-xs-6">
                    <h4> Military Status</h4>
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
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Military Status:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not a Veteran </p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <div class="col-md-12 text-right"> <a href="#" class="btn btn-xs btn-default">Refresh</a> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
            </div>
        </div>
        <div class="well">
            <div class="row">
                <div class="col-xs-6">
                    <h4>Disabled Status</h4>
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
                <div class="form-group form-group-sm">
                    <div class="col-md-12 text-right"> <a href="#" class="btn btn-xs btn-default">Refresh</a> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
                </div>
            </div>
        </div>
        <h2 style="font-size:24px">Verify</h2>
        <form>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                    I have reviewed and/or updated the information presented above. </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    I do not want to verify this information at this time (verification must be completed within 8 days). </label>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;"> <a href="verify2.php" class="btn btn-lg btn-primary" data-toggle="" data-target="" >Submit</a> </div>
            </div>
        </form>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<?php include ('modal/verify-error.php') ?>
announcement-task.php 
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

<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style type="text/css">
.form-control.disabled[type="text"] {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none;
	cursor: default;
}
legend {
	font-size: 16px;
}
.form-horizontal .form-group-sm .control-label {
	padding-top: 1px;
}
.form-group-sm .form-control-static {
	height: 15px;
	min-height: 15px;
	padding: 0px 10px;
}
hr {
	border-top: 1px solid #ccc;
}
</style>
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
        <p> 
				
					
					
						Your login has been interrupted for the purpose of verifying important information. For more information on why you are seeing this page, <a href="https://uits.iu.edu/cas-interrupts" target="_blank">click here</a> to read more about CAS Interrupts.
					
				
			</p>
<div class="well">
            <div class="row">
                <div class="col-xs-6">
                    <h4>IU Notify</h4>
                </div>
                <div class="col-xs-6" style="padding-top:10px"> 
                    <!-- <div class="dropdown pull-right"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                        <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                            <li><a href="#">What is IU Notify?</a></li>
                        </ul>
                    </div>--> 
                </div>
            </div>
               <p class="verify-desc">  Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
            <hr>
            <div class="form-horizontal">
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">IU Office:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-855-5555</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Home:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-336-0510</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Secondary Home:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Mobile 1:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">812-369-9664</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Mobile 2:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Mobile 3:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">Not Specified</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Non-IU Email:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">thrclark@gmail.com</p>
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label">Recieve notices from:</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">IU Bloomington<br>
                            IU Kokomo </p>
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
                <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;"> <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#verify_error" > Submit</a> </div>
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

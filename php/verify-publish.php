<?php $page_title = "Home" ?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style>
.list-group-item {
	border-left: none;
	border-right: none;
	background: #ebebeb;
}
.table-actions td:last-child {
	width: 1%;
	white-space: nowrap;
}
.section-head {
	margin-bottom: 15px;
}
.section-head .section-header h3 {
	margin-top: 11px;
}
.view-admin .main-content .col-md-9 > .well {
	margin-top: -53px;
	min-heighttt: 600px;
}
.help-block {
	margin-top: 0px;
	margin-bottom: 5px;
}
label {
	margin-bottom: 0px
}
.clickable {
	position: absolute;
	right: 9px;
	top: 12px;
	color: #cccccc;
}
.wizard-actions {
	background: #f5f5f5;
	margin-bottom: -29px;
	margin-top: 20px;
	padding-top: 15px;
	padding-bottom: 15px;
}
.editable-container.editable-popup .popover-title {
	display: none;
}
.editable-container.editable-popup .popover-content .editable-date.well {
	box-shadow: none;
	padding: 0px;
}
.editable-container.editable-popup .popover-content .editable-clear {
	float: right;
}
.editable-container.editable-popup .popover-content .datepicker-switch {
	text-align: center;
	font-weight: bold;
	font-size: 24px;
}
.rules-group-container .rules-group-container .rule-post-container {
	display: none !important;
}
.panel-group .panel .panel-heading .panel-title a {
	display: block;
}
.panel-group .panel .panel-heading {
	position: relative;
}
</style>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<?php include ('includes/brand-header2.php') ?>
<header style="min-height:115px">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="navbar-brand" style="font-size: 44px;
width: 100%;
margin-top: 20px;">IU Verify</h1>
                <div class="small" style="color:#ffffff">Create &amp; Edit Verifications</div>
            </div>
            <div class="col-md-9">
                <p class="navbar-text" style="color:#E4E4E4;margin-top: 26px;"><i class="icon-user-3"></i><span class="sr-only">User: </span>thrclark</p>
            </div>
        </div>
    </div>
</header>
<div class="main-content container" role=main>
    <div id="main-content">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group" style="margin-right: -30px;margin-top: 20px;"> <a href="#" class="list-group-item" id="show_create_new"> Create New Verification </a> <a href="#" class="list-group-item" id="show_all_verifications"> View All Verifications </a> <a href="#" class="list-group-item">Archived Verifications </a> <a href="#" class="list-group-item">System Settings</a></div>
            </div>
            <div class="col-md-9">
                <div class="well">
                    <section style="display:;" id="all_verifications" ng-app=sortApp ng-controller=mainController>
                        <div class="row section-head">
                            <div class="col-md-6 section-header">
                                <h3>All Verifications</h3>
                            </div>
                            <div class="col-md-6 text-right" style="padding-top: 9px;">
                                <form class="form-inline" style="padding-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="sr-only" for=filtertable>Filter</label>
                                        <input type=text id="filtertable" class="form-control input-sm" placeholder=Filter ng-model=searchstatus>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-condensed table-responsive table-actions">
                            <thead>
                                <tr>
                                    <td><a href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse"> Name <i ng-show="sortType == 'name' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'name' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><a href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse"> Status <i ng-show="sortType == 'status' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'status' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><a href="#" ng-click="sortType = 'created'; sortReverse = !sortReverse"> Created <i ng-show="sortType == 'created' &amp;&amp; !sortReverse" class="icon-angle-up"></i> <i ng-show="sortType == 'created' &amp;&amp; sortReverse" class="icon-angle-down"></i> </a></td>
                                    <td><span class="">Actions</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus">
                                    <td>{{ roll.name }}</td>
                                    <td>{{ roll.status }}</td>
                                    <td>{{ roll.created }}</td>
                                    <td class="text-center"><div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Preview</a></li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Inactivate</a></li>
                                                <li><a href="#">View Reports</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Archive</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="create_new" style="display:none">
                        <div class="row section-head">
                            <div class="col-md-12 section-header">
                                <h3> Create New Verification</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step"> <a href="#step-1" type="button" class="btn btn-primary btn-circle"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                            <p>Setup</p>
                                        </div>
                                        <div class="stepwizard-step"> <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-database" aria-hidden="true"></i></a>
                                            <p>Data</p>
                                        </div>
                                        <div class="stepwizard-step"> <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-users"></i></a>
                                            <p>Recipients</p>
                                        </div>
                                        <div class="stepwizard-step"> <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-bolt"></i></a>
                                            <p>Activate</p>
                                        </div>
                                        <div class="stepwizard-step"> <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-eye"></i></a>
                                            <p>Preview/Save</p>
                                        </div>
                                    </div>
                                </div>
                                <form role="form" style="padding-bottom:15px">
                                    <div class="row setup-content" id="step-1">
                                        <div class="col-xs-12">
                                            <p class="lead"> Setup</p>
                                            <div class="form-group ">
                                                <label class="control-label" for="name"> Name </label>
                                                <span class="help-block small" id=""> Add a name for this verification. This name will not be displayed on the verification itself, but will be used for identification within the publishing system.</span>
                                                <input class="form-control" id="name" name="name" type="text"  required="required"/>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for="description"> Description <span class="small" style="font-weight:normal">(optional)</span></label>
                                                <span class="help-block small" id=""> Add a description that will appear below the first paragraph and above the verification data. </span>
                                                <textarea class="form-control" cols="40" id="description" name="message" rows="2"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for="disclaimer"> Disclaimer Text <span class="small" style="font-weight:normal">(optional)</span></label>
                                                <span class="help-block small" id=""> Add disclaimer text that will appear below the verification data and above the verification radio/checkbox controls. </span>
                                                <textarea class="form-control" cols="40" id="disclaimer" name="textarea" rows="2"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for="verify_now_select"> 'Verify Now' Text </label>
                                                <span class="help-block small" id="hint_textarea1"> Select the text that will appear next to the 'Verify Now' radio/checkbox control. </span>
                                                <select class="select form-control" id="verify_now_select" name="select" style="width:200px">
                                                    <option value="verify_now_standard"> Use Default Text </option>
                                                    <option value="verify_now_custom"> Enter Custom Text </option>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label sr-only" for="verify_now_standard"> 'Verify Now' Standard Text </label>
                                                <textarea class="form-control" cols="40" id="verify_now_standard" name="textarea1" rows="2" disabled>I have verified that the above information is up to date and correct.</textarea>
                                                <label class="control-label sr-only" for="verify_now_custom"> 'Verify Now' Custom Text </label>
                                                <textarea class="form-control" cols="40" id="verify_now_custom" name="textarea1" rows="2" style="display:none"></textarea>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for="verify_later_select"> 'Verify Later' Text </label>
                                                <span class="help-block small" id="hint_textarea1"> Select the text that will appear next to the 'Verify Now' radio/checkbox control. </span>
                                                <select class="select form-control" id="verify_later_select" name="select" style="width:200px">
                                                    <option value="verify_later_standard"> Use Default Text </option>
                                                    <option value="verify_later_custom"> Enter Custom Text </option>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label sr-only" for="verify_later_standard"> 'Verify Later' Standard Text </label>
                                                <textarea class="form-control" cols="40" id="verify_later_standard" name="textarea1" rows="2" disabled>I choose to verify this information later.</textarea>
                                                <label class="control-label sr-only" for="verify_later_custom"> 'Verify Later' Custom Text </label>
                                                <textarea class="form-control" cols="40" id="verify_later_custom" name="textarea1" rows="2" style="display:none"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 wizard-actions">
                                            <div class="btn-group pull-right" role="group" aria-label="">
                                                <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-2">
                                        <div class="col-xs-12">
                                            <p class="lead"> Data</p>
                                            <div class="panel-group" id="accordion1">
                                                <div class="panel panel-default template-add-data">
                                                    <div class="panel-heading">
                                                        <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse-data1"> Section 1 </a> </p>
                                                    </div>
                                                    <div id="collapse-data1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="form-group ">
                                                                <label class="control-label" for="section_title"> Section Title </label>
                                                                <input class="form-control" id="section_title" name="name" type="text" />
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label " for="section_description"> Section Description <span class="small" style="font-weight:normal">(optional)</span></label>
                                                                <textarea class="form-control" cols="40" id="section_description" name="message" rows="2"></textarea>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="section_title"> Unique Key </label>
                                                                <input class="form-control" id="section_title" name="name" type="text" />
                                                            </div>
                                                            <p class="control-label"> Field Groups </p>
                                                            <table class="table table-condensed table-responsive table-actions" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Data Pull </th>
                                                                        <th>Callback</th>
                                                                        <th>Unique Key</th>
                                                                        <th> URL <span class="small" style="font-weight:normal">(initiate edit)</span> </th>
                                                                        <th> Actions </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><select class="form-control">
                                                                                <option>unspecified</option>
                                                                                <option>API Source 1</option>
                                                                                <option>API Source 2</option>
                                                                                <option>API Source 3</option>
                                                                                <option>API Source 4</option>
                                                                                <option>API Source 5</option>
                                                                            </select></td>
                                                                        <td><select class="form-control">
                                                                                <option>unspecified</option>
                                                                                <option>API Source 1</option>
                                                                                <option>API Source 2</option>
                                                                                <option>API Source 3</option>
                                                                                <option>API Source 4</option>
                                                                                <option>API Source 5</option>
                                                                            </select></td>
                                                                        <td><input type="text" class="form-control"></td>
                                                                        <td><input type="text" class="form-control"></td>
                                                                        <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">delete</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> field group</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-xs btn-default btn-add-data pull-right"> <i class="fa fa-plus"></i> section</button>
                                        </div>
                                        <div class="col-xs-12 wizard-actions">
                                            <div class="btn-group pull-right" role="group" aria-label="">
                                                <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-3">
                                        <div class="col-xs-12">
                                            <p class="lead"> Recipients</p>
                                            <div class="panel-group" id="accordion2">
                                                <div class="panel panel-default template-add-group">
                                                    <div class="panel-heading">
                                                        <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-group1"> Recipient Group 1 </a> </p>
                                                    </div>
                                                    <div id="collapse-group1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div id="builder-basic"> </div>
                                                            Verification will initiate on <a href="#" id="dob" data-type="date" data-pk="1" data-url="/post" data-title="Select date" class="editable editable-click" data-original-title="" title="">09/05/2017</a> for this group. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-xs btn-default btn-add-group pull-right"> <i class="fa fa-plus"></i> group</button>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group" style="margin-top:40px">
                                                <label class="control-label" for="name">Confirmation Leeway</label>
                                                <span class="help-block small" id=""> Specify the number of days before new users are required to renew this verification.<!-- Note that the posting will only happen within the date range specified above, or when the verification is set to status 'Active'.--></span>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <input class="form-control" id="name" name="name" type="text"  required="required"/>
                                                    </div>
                                                    <!-- <div class="col-xs-5" style="padding-left:0px">
                                                                <div class="checkbox small">
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        recur annually </label>
                                                                </div>
                                                            </div>--> 
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for=""> Verification Recurrance </label>
                                                <span class="help-block small" id=""> Select whether this verification will be posted annualy, or only once </span>
                                                <select class="select form-control" id="" name="select" style="width:200px">
                                                    <option value=""> Annually</option>
                                                    <option value="">One Time </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 wizard-actions">
                                            <div class="btn-group pull-right" role="group" aria-label="">
                                                <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-4">
                                        <div class="col-xs-12">
                                            <p class="lead"> Activate</p>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <label class="control-label"> Active Date Range/Status <span class="small text-muted" style="font-weight:normal">(currently active)</span> </label>
                                                    <span class="help-block small" id=""> Specify the date range for this verification to be active, and the specific date of posting for the verification.</span>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="activate" id="optionsRadios1" value="1">
                                                            Specify by Status </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="activate" id="optionsRadios2" value="2">
                                                            Specify by Date Range </label>
                                                    </div>
                                                    <div class="form-group activate-option"  style="display:none" id="activate1">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <label for="">Status</label>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <select class="select form-control" id="" name="select">
                                                                    <option value="Active"> Active </option>
                                                                    <option value="Inactive"> Inactive </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row activate-option" style="display:none; margin-bottom:15px" id="activate2">
                                                        <div class="col-xs-3">
                                                            <div class="form-group">
                                                                <label for="">Begin</label>
                                                                <input type="text" class="form-control col-xs-6" id="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="form-group">
                                                                <label for="">End</label>
                                                                <input type="text" class="form-control col-xs-6" id="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 wizard-actions">
                                            <div class="btn-group pull-right" role="group" aria-label="">
                                                <button class="btn btn-default prevBtn " type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                <button class="btn btn-primary nextBtn " type="button" >Next<i class="icon-angle-right"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-5">
                                        <div class="col-xs-12">
                                            <p class="lead"> Preview/Save</p>
                                            <hr>
                                            <label class="control-label"> Verification Message Preview </label>
                                            <p> The content and layout of this verification may be previewed in a new window <a href="verify-preview.php" target="_blank">here</a>.</p>
                                            <hr>
                                            <label class="control-label"> Verification Recipients </label>
                                            <p>The following users will be targeted for this verification if they meet ALL of the following criteria: </p>
                                            <ul>
                                                <li> Group ID contains: BL-UITS </li>
                                                <li> Role ID is not: Student </li>
                                            </ul>
                                            <hr>
                                            <label class="control-label"> Verification Scheduling </label>
                                            <p>This verification will be activated and posted according to the following dates:</p>
                                            <ul>
                                                <li> Verification Active Dates: 08/28/2016 - 08/28/2020 </li>
                                                <li> Verification Post Date: 09/15/YYYY </li>
                                                <li> Recurs Annually: yes </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 wizard-actions">
                                            <div class="btn-group pull-right" role="group" aria-label="">
                                                <button class="btn btn-default prevBtn" type="button" ><i class="icon-angle-left"></i>Previous</button>
                                                <button class="btn btn-primary" type="button" >Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script type="text/javascript">
$(document).ready(function() {
    $('#show_create_new').click(function() {
      $( "#create_new" ).show();
	   $( "#all_verifications" ).hide();
    });
	
	  $('#show_all_verifications').click(function() {
      $( "#create_new" ).hide();
	   $( "#all_verifications" ).show();
    });
	
	
	
});
</script> 
<script>
    angular.module('sortApp', []).controller('mainController', function($scope) {
        $scope.sortType = 'name';
        $scope.sortReverse = false;
        $scope.searchstatus = '';
        $scope.sushi = [{
                name: 'HRMS - Citizenship',
                status: 'active',
                created: '2016-03-15'
            }, {
                name: 'FS - W2 Update',
                status: 'active',
                created: '2016-02-02'
            }, {
                name: 'FS - Direct Deposit',
                status: 'inactive',
                created: '2016-03-18'
            }, {
                name: 'IU Notify - Conatct Info',
                status: 'inactive',
                created: '2016-05-28'
            },

            {
                name: 'HC - Immunization Records',
                status: 'inactive',
                created: '2016-05-17'
            },

            {
                name: 'HRMS - Military Status',
                status: 'active',
                created: '2016-04-04'
            }
        ];
    });
    //# sourceURL=pen.js
</script> 
<script>
    $(document).ready(function() {

        $('.nav-tabs-responsive').tabCollapse();
        $('.nav-tabs-responsive').on('shown-tabs.bs.tabcollapse', function() {
            $('.nav-tabs-responsive a:first').tab('show')
        });

    });
</script> 
<script>
    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script> 
<script>
      $(document).ready(function() {
        $('#verify_now_select').change(function(){
            $('#verify_now_custom, #verify_now_standard').hide();
            $('#' + $(this).val()).show();
        });
		
		 $('#verify_later_select').change(function(){
            $('#verify_later_custom, #verify_later_standard').hide();
            $('#' + $(this).val()).show();
        });
		
    });
    
    </script> 
<script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Section " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            $newPanel.find(".panel-heading").append("<span class='pull-right'><i class='icon-cancel-2 clickable'></i></span>");
            $("#accordion1").append($newPanel.fadeIn());
            $(document).on('click', '.icon-cancel-2', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
<script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        var $template = $(".template-add-group");
        var hash = 1;
        $(".btn-add-group").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-group" + (++hash))
                .text("Recipient Group " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-group" + (hash)).addClass("collapse").removeClass("in");
            $newPanel.find(".panel-heading").append("<span class='pull-right'><i class='icon-cancel-2 clickable'></i></span>");
            $("#accordion2").append($newPanel.fadeIn());
            $(document).on('click', '.icon-cancel-2', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 
<script type="text/javascript">
$(document).ready(function() {
    $('a.addstuff').click(function() {
       $('#myTable tbody').append('<tr> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><select class="form-control"> <option>unspecified</option> <option>API Source 1</option> <option>API Source 2</option> <option>API Source 3</option> <option>API Source 4</option> <option>API Source 5</option> </select></td> <td><input type="text" class="form-control"></td> <td><input type="text" class="form-control"></td> <td> <a href="#" class="btn btn-xs btn-default deleterow" style="margin-top:5px">delete</a> </td> </tr>');
    });
	
	    


});
</script> 
<script>
$(document).ready(function(){

 $("table").on('click','.deleterow',function(){
       $(this).closest('tr').remove();
     });

});

</script> 
<script>

    var rules_basic = {
        condition: 'AND',
        rules: [{
            id: 'groupid'
           
        }]
    };

    $('#builder-basic').queryBuilder({
        plugins: ['bt-tooltip-errors'],

        filters: [{
            id: 'firstname',
            label: 'First Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'lastname',
            label: 'Last Name',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		{
            id: 'email',
            label: 'Email',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'username',
            label: 'Username',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		{
            id: 'groupid',
            label: 'Group ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		{
            id: 'personid',
            label: 'Person ID',
            type: 'string',
			operators: ['equal', 'not_equal']
        },
		
		
		
		
		 {
            id: 'role',
            label: 'Role',
            type: 'integer',
            input: 'select',
            values: {
                1: 'Faculty',
                2: 'Staff',
                3: 'Student',
                
            },
            operators: ['equal', 'not_equal']
        } 
		 ],

        rules: rules_basic
    });

    $('#btn-reset').on('click', function() {
        $('#builder-basic').queryBuilder('reset');
    });

    $('#btn-set').on('click', function() {
        $('#builder-basic').queryBuilder('setRules', rules_basic);
    });

    $('#btn-get').on('click', function() {
        var result = $('#builder-basic').queryBuilder('getRules');

        if (!$.isEmptyObject(result)) {
            alert(JSON.stringify(result, null, 2));
        }
    });
</script> 
<script type="text/javascript">
   // $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr("value") == "AND") {

                $("#posting_date_all").show();
                $(".rule-post-container").hide();
            }
            if ($(this).attr("value") == "OR") {
                $("#posting_date_all").hide();
                $(".rule-post-container").show();
            }
        });
        $('button[data-add="rule"]').click(function() {
           
            $(".rule-post-container").hide();
			 $("#posting_date_all").show();
			
			
			
        });
 //   });
</script> 
<script>

$(document).ready(function() {
    $("input[name$='activate']").click(function() {
        var test = $(this).val();

            $(".activate-option").hide();
        $("#activate" + test).show();
    });
});


</script> 
<script>


$(document).ready(function() {
           $(".rule-post-container").show();
});



</script> 
<script>

$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $('#dob').editable({
        format: 'mm-dd-yyyy',    
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
		
		$('.postdate').editable({
        format: 'mm-dd-yyyy',      
        viewformat: 'mm/dd/yyyy',    
        datepicker: {
                weekStart: 1
           }
        });
		
});


</script>
</body>
</html>
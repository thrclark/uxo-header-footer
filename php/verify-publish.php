<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style>
.list-group-item {
	border-left: none;
	border-right: none;
	background: #ebebeb;
}
</style>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<header style="min-height:150px">
    <div class="container">
        <div class="row">
           <div class="col-md-3">
                <h1 class="navbar-brand" style="font-size: 44px;
    width: 100%;
    margin-top: 20px;">IU Verify</h1>
                <br>
                <div class="small" style="color:#ffffff">Administrator Pages</div>
            </div>
            <div class="col-md-9">
                <p class="navbar-text" style="color:#E4E4E4;    margin-top: 26px;"><i class="icon-user-3"></i><span class="sr-only">User: </span>thrclark </p>
            </div>
        </div>
    </div>
    <h1></h1>
</header>
<div class="main-content container" role="main">
    <div id="main-content">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group"> <a href="#" class="list-group-item"> Create Verification </a> <a href="#" class="list-group-item">Archived Verifications </a> <a href="#" class="list-group-item">System Settings</a> </div>
            </div>
            <div class="col-md-9">
                <div class="well"  style="margin-top:-100px; min-height:600px">
                    <h3>All Verifications</h3>
                    <div class="" ng-app="sortApp" ng-controller="mainController">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                    <input type="text" class="form-control" placeholder="Search da status" ng-model="searchstatus">
                                </div>
                            </div>
                        </form>
                        <table class="table table-condensed table-responsive">
                            <thead>
                                <tr>
                                    <td><a href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse"> Name <span ng-show="sortType == 'name' && !sortReverse" class="fa fa-caret-down"></span> <span ng-show="sortType == 'name' && sortReverse" class="fa fa-caret-up"></span> </a></td>
                                    <td><a href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse"> Status <span ng-show="sortType == 'status' && !sortReverse" class="fa fa-caret-down"></span> <span ng-show="sortType == 'status' && sortReverse" class="fa fa-caret-up"></span> </a></td>
                                    <td> Created</td>  <td> Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus">
                                    <td>{{ roll.name }}</td>
                                    <td>{{ roll.status }}</td>
                                    <td>{{ roll.created }}</td>
                                    
                                     <td>asdf</td>
                                     
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script>angular.module('sortApp', []).controller('mainController', function ($scope) {
    $scope.sortType = 'name';
    $scope.sortReverse = false;
    $scope.searchstatus = '';
    $scope.sushi = [
        {
            name: 'HRMS - Citizenship',
            status: 'active',
            created: 2
        },
        {
            name: 'FS - W2 Update',
            status: 'active',
            created: 4
        },
        {
            name: 'FS - Payroll Info',
            status: 'inactive',
            created: 7
        },
		 {
            name: 'IU Notify - Conatct Info',
            status: 'inactive',
            created: 7
        },
        {
            name: 'HRMS - Military Status',
            status: 'active',
            created: 6
        }
    ];
});
//# sourceURL=pen.js
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

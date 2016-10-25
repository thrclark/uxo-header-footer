<?php 
$section = 'publishing';
$page_title = 'home';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include ('includes/pub-header.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include ('includes/pub-nav.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section style="display:;" id="all_verifications" ng-app=sortApp ng-controller=mainController>
                            <div class="row section-head">
                                <div class="col-sm-6 section-header">
                                    <h3>All Verifications</h3>
                                </div>
                                <div class="col-sm-6 text-right" style="padding-top: 9px;">
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
                                                    <li><a href="verify-preview.php" target="_blank">Preview</a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
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
            name: 'FS - Tax Information',
            status: 'inactive',
            created: '2016-05-18'
        }, {
            name: 'IU Notify - Conatct Info',
            status: 'inactive',
            created: '2016-05-28'
        }, {
            name: 'IU Notify - Phone Update',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'IU Notify - Email Update',
            status: 'inactive',
            created: '2016-05-15'
        }, {
            name: 'HC - Immunization Records',
            status: 'inactive',
            created: '2016-05-17'
        }, {
            name: 'HRMS - Military Status',
            status: 'active',
            created: '2016-04-04'
        }];
    });
</script> 
</div>
</body>
</html>

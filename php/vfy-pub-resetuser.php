<?php 
$section = 'settings';
$page_title = 'resetuser';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<?php include ('includes/scripts.php') ?>
<!-- Responsive Tables-->
<script type="text/javascript" src="../js/tablesaw.js"></script>
<script type="text/javascript" src="../js/tablesaw-init.js"></script>
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
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">View/Reset User Verifications</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row setup-content" id="step-4" style="display: block;">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="well well-sm tile-content" style="">
                                                        <div class="row">
                                                            <div class="col-sm-6" style="padding-top:5px;">
                                                                <div> <strong>User Verification Status</strong> </div>
                                                                <span class="help-block small"> Search for a user to determine their verification status or reset their verifications.</span> </div>
                                                            <div class="col-sm-6 text-right" style="    padding-top: 8px;">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Username/ID/Email">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i> <span class="sr-only"> Search</span></button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="h4">Search Results</h3>
                                                    <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="tablesaw-4611">
                                                        <caption class="sr-only">
                                                        Index of archived verifications
                                                        </caption>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="1">Username</th>
                                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="1">Given Name</th>
                                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>thrclark</td>
                                                                <td>Clark, Tom</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>trclark</td>
                                                                <td>Clark, Troy</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>tamclark</td>
                                                                <td>Clark, Tamara</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>thecalrk</td>
                                                                <td>Clark, Theresa</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>timclark</td>
                                                                <td>Clark, Timothy</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>trlcalrk</td>
                                                                <td>Clark, Tarleton</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>tadclark</td>
                                                                <td>Clark, Tad</td>
                                                                <td><a href="#" class="btn btn-xs btn-default">view</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    
    <!--<script>
    angular.module('sortApp', []).controller('mainController', function($scope) {
        $scope.sortType = 'name';
        $scope.sortReverse = false;
        $scope.searchstatus = '';
        $scope.sushi = [
		{
            name: 'API Account 1',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 2',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		{
            name: 'API Account 3',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 4',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		{
            name: 'API Account 5',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 6',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		{
            name: 'API Account 7',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 8',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		{
            name: 'API Account 9',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 10',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		{
            name: 'API Account 11',
            type: 'external',
            access: 'publisher',
			auth: 'basic',
			status: 'active',
        }, 
		{
            name: 'API Account 12',
            type: 'maintenance',
            access: 'admin',
			auth: 'basic',
			status: 'inactive',
        }, 
		
		];
    });
</script>--> 
    
</div>
</body>
</html>

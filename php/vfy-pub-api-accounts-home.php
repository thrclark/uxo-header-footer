<?php 
$section = 'settings';
$page_title = 'api-accounts';
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
    <?php include('includes/header-pub.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">API Accounts</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"> <a href="vfy-pub-api-accounts-new.php" class="btn btn-xs btn-default"> <i class="fa fa-plus" aria-hidden="true"></i> New</a> </div>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                                <caption class="sr-only">
                                Index of API Accounts
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">Name</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Type</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Expires</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Locked</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Status</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td >API Account 1</td>
                                        <td >External API </td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 10</td>
                                        <td >Maintenance API</td>
                                        <td >12/12/2017</td>
                                        <td >yes</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 11</td>
                                        <td >External API </td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu3">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 12</td>
                                        <td >Maintenance API</td>
                                        <td >12/12/2017</td>
                                        <td >no</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 2</td>
                                        <td >Maintenance API</td>
                                        <td >12/12/2017</td>
                                        <td >no</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu5">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 3</td>
                                        <td >External API</td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu6">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 4</td>
                                        <td >Maintenance API</td>
                                        <td >-</td>
                                        <td >no</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu7">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 5</td>
                                        <td >External API</td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu8">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 6</td>
                                        <td >Maintenance API</td>
                                        <td >12/12/2017</td>
                                        <td >no</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu9">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 7</td>
                                        <td >External API</td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu10">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 8</td>
                                        <td >Maintenance API</td>
                                        <td >-</td>
                                        <td >no</td>
                                        <td >inactive</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu11">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td >API Account 9</td>
                                        <td >External API</td>
                                        <td >-</td>
                                        <td >-</td>
                                        <td >active</td>
                                        <td class="text-center"><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu12">
                                                    <li><a href="xxx.php" target="_blank">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center"> <a href="#" class="btn btn-xs btn-default"><i class="fa fa-angle-down" aria-hidden="true"></i> View More </a> </div>
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

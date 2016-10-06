<?php 
$section = 'settings';
$page_title = 'branding';
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
                                <h2 class="h3">Header/Footer Branding</h2>
                            </div>
                        </div>
                        <form name="brandForm">
                            <fieldset class="form-group">
                                <legend>Header</legend>
                                <textarea rows="8" class="form-control" aria-invalid="false"></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <legend>Footer</legend>
                                <textarea rows="8" class="form-control " aria-invalid="false"></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <legend>CSS</legend>
                                <textarea rows="8" class="form-control " aria-invalid="false"></textarea>
                            </fieldset>
                            <div class="text-right">  <a href="#" class="btn btn-default">Cancel</a> <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </form>
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

</body>
</html>

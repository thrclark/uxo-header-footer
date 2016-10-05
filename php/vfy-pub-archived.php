<?php 
$section = 'publishing';
$page_title = 'archived';
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
                    <section style="display:;" id="all_verifications">
                        <div class="row section-head">
                            <div class="col-sm-6 section-header">
                                <h2 class="h3">Archived Verifications</h2>
                            </div>
                            <div class="col-sm-6 text-right" style="padding-top: 9px;">
                                <div class="form-inline" style="padding-bottom: 10px;">
                                    <div class="form-group">
                                        <label class="sr-only" for=filtertable>Filter</label>
                                        <input type=text id="filtertable" class="form-control input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                            <caption class="sr-only">
                            Index of archived verifications
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">Name</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Created</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"><span class="visible-xs">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus" class="ng-scope">
                                    <td>Campus Access Code Agreement</td>
                                    <td>2015-03-15</td>
                                    <td class="text-center"><a href="#" class="btn btn-xs btn-default">unarchive</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Unarchive</a></li>
                                                <li><a href="#">View Reports</a></li>
                                            </ul>
                                        </div>--></td>
                                </tr>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus" class="ng-scope">
                                    <td>Citizenship - Test</td>
                                    <td>2015-04-04</td>
                                    <td class="text-center"><a href="#" class="btn btn-xs btn-default">unarchive</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Unarchive</a></li>
                                                <li><a href="#">View Reports</a></li>
                                            </ul>
                                        </div>--></td>
                                </tr>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus" class="ng-scope">
                                    <td>Direct Deposit Consent</td>
                                    <td>2015-02-02</td>
                                    <td class="text-center"><a href="#" class="btn btn-xs btn-default">unarchive</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Unarchive</a></li>
                                                <li><a href="#">View Reports</a></li>
                                            </ul>
                                        </div>--></td>
                                </tr>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus" class="ng-scope">
                                    <td>FS - Tax Information</td>
                                    <td>2015-05-18</td>
                                    <td class="text-center"><a href="#" class="btn btn-xs btn-default">unarchive</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Unarchive</a></li>
                                                <li><a href="#">View Reports</a></li>
                                            </ul>
                                        </div>--></td>
                                </tr>
                                <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:searchstatus" class="ng-scope">
                                    <td>Manditory Health Screening</td>
                                    <td>2015-03-18</td>
                                    <td class="text-center"><a href="#" class="btn btn-xs btn-default">unarchive</a><!--<div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="verify-preview.php" target="_blank">Preview</a></li>
                                                <li><a href="#">Unarchive</a></li>
                                                <li><a href="#">View Reports</a></li>
                                            </ul>
                                        </div>--></td>
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
</body>
</html>

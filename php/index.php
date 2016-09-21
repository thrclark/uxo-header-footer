<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
<style>
header .app-header h1 {
	height: 75px;
}
</style>
</head>
<body style="background:#FFFFFF" data-market-key="" data-market-name="All Markets" data-all-markets-key="all" data-task-collection="" ondragstart="return false;" ondrop="return false;" id="top" >
<header >
    <div class="container togglecontainer app-header" style="padding-top:15px;background:;">
        <h1 style="margin-left: auto; margin-right: auto; color:#ffffff ">IU Verify</h1>
    </div>
</header>
<div class="main-content container" style="background:#FFFFFF" role="main">
    <div id="main-content">
        <div class="" style="margin-top:40px; margin-bottom:40px">
            <h2 class="">Prototype Screens</h2>
            <ul>
                <li><a href="verify1.php" target="_blank">Example 1</a>
                    <ul>
                        <li>content in separate sections</li>
                    </ul>
                </li>
                <li><a href="verify2.php" target="_blank">Example 2</a>
                    <ul>
                        <li> single section</li>
                        <li>radio selections at bottom</li>
                        <li>with validation (click 'submit' button)</li>
                    </ul>
                </li>
                <li><a href="verify3.php" target="_blank">Example 3</a>
                    <ul>
                        <li> single section</li>
                        <li>checkbox selection at bottom</li>
                        <li>with validation (click 'submit' button)</li>
                    </ul>
                </li>
                <li><a href="verify4.php" target="_blank">Example 4 ('escape hatch')</a>
                    <ul>
                        <li>with 'escape hatch' mechanism, for cases when external system doesn't respond</li>
                        <li>click 'submit' to see</li>
                    </ul>
                </li>
                <li><a href="verify-loading.php" target="_blank">Example 5 (section loaders &amp; updated data)</a> </li>
                <li><a href="verify-completed.php" target="_blank">Example 6 (verifications complete)</a> </li>
                <li><a href="vfy-pub-home.php" target="_blank">Publishing Home</a> </li>
                <li><a href="vfy-pub-new-verification.php" target="_blank">Publishing - New Verification</a> </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

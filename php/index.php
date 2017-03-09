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
<div class="wrapper">
    <header >
        <div class="container togglecontainer app-header" style="padding-top:15px;background:;">
            <h1 style="margin-left: auto; margin-right: auto; color:#ffffff ">IU Verify - Prototypes</h1>
        </div>
    </header>
    <div class="main-content container" style="background:#FFFFFF" role="main">
        <div id="main-content">
            <div> 
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#default" aria-controls="default" role="tab" data-toggle="tab">Default</a></li>
                    <li role="presentation"><a href="#cas1" aria-controls="cas1" role="tab" data-toggle="tab">CAS Styling 1</a></li>
                    <li role="presentation"><a href="#cas2" aria-controls="cas2" role="tab" data-toggle="tab">CAS Styling 2</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="default">
                        <h2 class="">End User Views </h2>
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
                        </ul>
                        <h2 class="">Publishing/Admin Views </h2>
                        <ul>
                            <li><a href="vfy-pub-home.php" target="_blank">Publishing - Home</a> </li>
                            <li><a href="vfy-admin-tenants-home.php" target="_blank">Admin - Home</a> </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cas1">
                        <h2 class="">End User Views</h2>
                        <ul>
                            <li><a href="../php-cas/verify1.php" target="_blank">Example 1</a>
                                <ul>
                                    <li>content in separate sections</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas/verify2.php" target="_blank">Example 2</a>
                                <ul>
                                    <li> single section</li>
                                    <li>radio selections at bottom</li>
                                    <li>with validation (click 'submit' button)</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas/verify3.php" target="_blank">Example 3</a>
                                <ul>
                                    <li> single section</li>
                                    <li>checkbox selection at bottom</li>
                                    <li>with validation (click 'submit' button)</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas/verify4.php" target="_blank">Example 4 ('escape hatch')</a>
                                <ul>
                                    <li>with 'escape hatch' mechanism, for cases when external system doesn't respond</li>
                                    <li>click 'submit' to see</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas/verify-loading.php" target="_blank">Example 5 (section loaders &amp; updated data)</a> </li>
                            <li><a href="../php-cas/verify-completed.php" target="_blank">Example 6 (verifications complete)</a> </li>
                        </ul>
                        <h2 class="">Publishing/Admin Views</h2>
                        <ul>
                            <li><a href="../php-cas/vfy-pub-home.php" target="_blank">Publishing - Home</a> </li>
                            <li><a href="../php-cas/vfy-admin-tenants-home.php" target="_blank">Admin - Home</a> </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="cas2">
                        <h2 class="">End User Views</h2>
                        <ul>
                            <li><a href="../php-cas2/verify1.php" target="_blank">Example 1</a>
                                <ul>
                                    <li>content in separate sections</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas2/verify2.php" target="_blank">Example 2</a>
                                <ul>
                                    <li> single section</li>
                                    <li>radio selections at bottom</li>
                                    <li>with validation (click 'submit' button)</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas2/verify3.php" target="_blank">Example 3</a>
                                <ul>
                                    <li> single section</li>
                                    <li>checkbox selection at bottom</li>
                                    <li>with validation (click 'submit' button)</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas2/verify4.php" target="_blank">Example 4 ('escape hatch')</a>
                                <ul>
                                    <li>with 'escape hatch' mechanism, for cases when external system doesn't respond</li>
                                    <li>click 'submit' to see</li>
                                </ul>
                            </li>
                            <li><a href="../php-cas2/verify-loading.php" target="_blank">Example 5 (section loaders &amp; updated data)</a> </li>
                            <li><a href="../php-cas2/verify-completed.php" target="_blank">Example 6 (verifications complete)</a> </li>
                        </ul>
                        <h2 class="">Publishing/Admin Views</h2>
                        <ul>
                            <li><a href="../php-cas2/vfy-pub-home.php" target="_blank">Publishing - Home</a> </li>
                            <li><a href="../php-cas2/vfy-admin-tenants-home.php" target="_blank">Admin - Home</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="" style="margin-top:40px; margin-bottom:40px"> </div>
        </div>
    </div>
</div>
</body>
</html>

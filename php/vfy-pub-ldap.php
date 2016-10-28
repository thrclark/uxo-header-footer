<?php 
$section = 'settings';
$page_title = 'ldap';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style></style>
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
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">LDAP Configuration</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <fieldset>
                                        <legend>Settings</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="username"> User Name <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">Enter the LDAP user name for this configuration. Example: cn=myUser,ou=myOu,dc=ads,dc=myDomain,dc=edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="username" name="username" type="text" placeholder="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="password">Password <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">Enter the LDAP user name password for this configuration.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="password" name="password" type="password" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="password">Confirm Password </label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="password" name="password" type="password" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="base"> Base <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">LDAP base information. Example: ou=myOu,dc=ads,dc=myDomain,dc=edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="base" name="base" type="text" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="ldap_url"> LDAP URL <span class="small" style="font-weight:normal">(required)</span></label>
                                            <span class="help-block small">URL to the LDAP server. Example: ads.mydomain.edu</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group"> <span class="input-group-addon" id="basic-addon3">ldap://</span>
                                                        <input class="form-control" id="ldap_url" name="ldap_url" type="text" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Timeouts</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="connection_timeout"> Connection timeout <span class="small" style="font-weight:normal">(milliseconds)</span></label>
                                            <span class="help-block small">Number of Milliseconds to wait to establish connection to ldap server. Default is 5000 milliseconds (5 seconds).</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="connection_timeout" type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="100" data-slider-value="5000"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="connection_timeout_val">5000</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="read_timeout"> Read timeout <span class="small" style="font-weight:normal">(milliseconds)</span></label>
                                            <span class="help-block small">Number of Milliseconds to wait to read from ldap server. Default is 1000 milliseconds (1 second).</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="read_timeout" type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="100" data-slider-value="1000"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="read_timeout_val">1000</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Pooling</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="idle_connections_min"> Minimum number of idle connections</label>
                                            <span class="help-block small">Default is 0, maximum is 50</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="idle_connections_min" type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="0"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="idle_connections_min_val">0</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="idle_connections_max"> Maximum number of idle connections</label>
                                            <span class="help-block small">Default is 8. Use -1 for no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="idle_connections_max" type="text" data-slider-min="-1" data-slider-max="100" data-slider-step="1" data-slider-value="8"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="idle_connections_max_val">8</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="active_connections_max"> Maximum number of active connections</label>
                                            <span class="help-block small">Default is 8. Use -1 for no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="active_connections_max" type="text" data-slider-min="-1" data-slider-max="100" data-slider-step="1" data-slider-value="8"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="active_connections_max_val">8</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="total_connections_max"> Maximum number of total connections</label>
                                            <span class="help-block small">Default is -1 or no limit.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="total_connections_max" type="text" data-slider-min="-1" data-slider-max="200" data-slider-step="1" data-slider-value="-1"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="total_connections_max_val">-1</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="wait_time_max"> Maximum wait time in milliseconds</label>
                                            <span class="help-block small">The maximum amount of time in milliseconds the application will wait when the ldap pool is exhausted. Default is -1 which means wait indefinitely.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <input id="wait_time_max" type="text" data-slider-min="-1" data-slider-max="10000" data-slider-step="1" data-slider-value="-1"/>
                                                        <span class="input-group-addon" id="basic-addon2"> <span id="wait_time_max_val">-1</span></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="text-right"> <a href="vfy-pub-publishers-home.php" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="form_save">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    <script type="text/javascript">
    var slider = new Slider("#idle_connections_min");
    slider.on("slide", function(slideEvt) {
        $("#idle_connections_min_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#idle_connections_max");
    slider.on("slide", function(slideEvt) {
        $("#idle_connections_max_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#active_connections_max");
    slider.on("slide", function(slideEvt) {
        $("#active_connections_max_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#total_connections_max");
    slider.on("slide", function(slideEvt) {
        $("#total_connections_max_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#wait_time_max");
    slider.on("slide", function(slideEvt) {
        $("#wait_time_max_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#connection_timeout");
    slider.on("slide", function(slideEvt) {
        $("#wait_time_max_val").text(slideEvt.value);
    });
</script> 
    <script type="text/javascript">
    var slider = new Slider("#read_timeout");
    slider.on("slide", function(slideEvt) {
        $("#read_timeout_val").text(slideEvt.value);
    });
</script> 
</div>
</body>
</html>

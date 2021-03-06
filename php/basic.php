<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Layout</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap-drawer.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style></style>
<!--[if lt IE 9]>
    <link rel="stylesheet" href="legacy-easy-sidebar.css">
<![endif]-->
</head>

<body class="has-drawer">
<div id="drawerExample" class="drawer drawer-right drawer-inverse dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="drawerExample">
    <div class="drawer-contents">
        <div class="drawer-heading">
            <div class="row">
                <div class="col-xs-10">
                    <h3 class="drawer-title">Menu</h3>
                </div>
                <div class="col-xs-2 text-right"> <a href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-link btn-sm" style="color:#FFFFFF"> <i class="fa fa-close" aria-hidden="true"></i></a> </div>
            </div>
        </div>
        <!--     <div class="drawer-body">
            
            <a href="#">A Regular Link</a> </div>-->
        <ul class="drawer-fullnav">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
            <li role="presentation"><a href="#">Link</a></li>
        </ul>
    </div>
</div>
<?php include ('includes/brand-header.php') ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-10">
                <h1 class="">IU Classifieds</h1>
            </div>
            <div class="col-xs-2 text-right"> <a href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-danger btn-sm" style="margin-top:7px"> <i class="fa fa-bars" aria-hidden="true"></i></a> </div>
        </div>
    </div>
</header>

<div class="main-content container" role="main" style="display:block" id="view_home">
        <div class="row" style="margin-top:20px">
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Activity </div>
                    <i class="fa fa-soccer-ball-o pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Announcements </div>
                    <i class="fa fa-twitch pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Books </div>
                    <i class="fa fa-book pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Collectibles </div>
                    <i class="fa fa-archive pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Electronics </div>
                    <i class="fa fa-mobile pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Furniture </div>
                    <i class="fa fa-cubes pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Jobs </div>
                    <i class="fa fa-handshake-o pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Lost &amp; Found </div>
                    <i class="fa fa-question-circle-o pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Miscellaneous </div>
                    <i class="fa fa-random pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Music &amp; Arts </div>
                    <i class="fa fa-music pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Rides </div>
                    <i class="fa fa-taxi pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Housing </div>
                    <i class="fa fa-home pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Events </div>
                    <i class="fa fa-calendar-check-o pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Vehicles </div>
                    <i class="fa fa-motorcycle pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
            <div class="col-md-4 col-sm-6 col-xs-12"> <a href="#" class="searchbutton">
                <div class="well well-sm">
                    <div class="lead pull-left"> Wanted </div>
                    <i class="fa fa-ticket pull-right" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                </div>
                </a> </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script src="../bower_components/bootstrap-drawer/dist/js/drawer.min.js"></script> 
<script>
$('.easy-sidebar-toggle').click(function(e) {
    e.preventDefault();
    $('body').toggleClass('toggled');
    $('.navbar.easy-sidebar').removeClass('toggled');
});
$('html').on('swiperight', function(){
    $('body').addClass('toggled');
});
$('html').on('swipeleft', function(){
    $('body').removeClass('toggled');
});
</script>
</body>
</html>

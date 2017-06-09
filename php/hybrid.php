<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Layout</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap-drawer.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
footer {
	position: fixed;
	left: 0px;
	bottom: 0px;
	height: 64px;
	width: 100%;
	background: #333;
}
footer .btn.btn-link {
	font-size: 36px;
	color: #CCCCCC
}
footer .btn.btn-link:hover {
	color: #ffffff
}
.userinfo {
	position: fixed;
	right: 0;
	left: 0;
	margin-right: auto;
	margin-left: auto;
	bottom: -475px;
}
.slide-up {
	bottom: 0px !important;
}
.slide-down {
	bottom: -475px !important;
}
.affix {
	margin-top: 0px;
	width: 100%;
}
.modaless {
	position: absolute;
	bottom: 0px;
	    left: 0px;
	width: 100%;
	background: #333333;
	padding-top: 40px;
	padding-bottom: 90px;
	box-shadow: 0 0px 5px 0 rgba(0,0,0,0.26);
	display: none;
	color: #ffffff;
}
.blurr {
	-webkit-filter: blur(2px);
	-moz-filter: blur(2px);
	-o-filter: blur(2px);
	-ms-filter: blur(2px);
	filter: blur(2px);
}
/**** LAYOUT ****/
.list-inline>li {
	padding: 0 10px 0 0;
}
.container-pad {
	padding: 30px 15px;
}
/**** MODULE ****/
.bgc-fff {
	background-color: #fff!important;
}
.box-shad {
	-webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
	box-shadow: 1px 1px 0 rgba(0,0,0,.2);
}
.brdr {
	border: 1px solid #ededed;
}
/* Font changes */
.fnt-smaller {
	font-size: .9em;
}
.fnt-lighter {
	color: #bbb;
}
/* Color  */
.clr-535353 {
	color: #535353;
}
.media-left, .media>.pull-left {
	padding-right: 0px;
}

/**** MEDIA QUERIES ****/
@media only screen and (max-width: 991px) {
.property-listing {
	padding: 5px!important;
}
.property-listing a {
	margin: 0;
}
.property-listing .media-body {
	padding: 10px;
}
}
</style>
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
            <li role="presentation" class="active"><a href="#">My Settings</a></li>
            <li role="presentation"><a href="#">Locations</a></li>
            <li role="presentation"><a href="#">About </a></li>
     
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
            <div class="col-xs-2 text-right"> <a href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-danger btn-sm hidden-xs" style="margin-top:7px"> <i class="fa fa-bars" aria-hidden="true"></i></a> </div>
        </div>
    </div>
</header>
<section id="search" style=" background:#ebebeb; z-index:10"  data-spy="affix" data-offset-top="30" data-offset-bottom="200">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group input-group-lg" style="margin-top:15px;margin-bottom:15px;">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-danger btn-lg searchbutton" type="button" id=""><span class="hidden-xs">Find It!</span> <span class="visible-xs"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                    </span> </div>
            </div>
        </div>
    </div>
</section>
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
        
        <div class="visible-xs">
            <?php include ('includes/modaless-userinfo.php') ?>
    <?php include ('includes/modaless-locations.php') ?>
    <?php include ('includes/modaless-appinfo.php') ?>
    <?php include ('includes/brand-footer.php') ?>
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
<script>
    $(document).ready(function() {
        $("#toggle_userinfo").click(function() {
            $(".footer-controls").slideToggle();
			$(".locations,.appinfo").hide();
			$(".main-content, #search, header, #branding-bar").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_locations").click(function() {
            $(".locations").slideToggle();
			$(".footer-controls, .appinfo").hide();
			$(".main-content, #search, header, #branding-bar").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_appinfo").click(function() {
            $(".appinfo").slideToggle();
			$(".footer-controls,.locations").hide();
			$(".main-content, #search, header, #branding-bar").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".app_reset").click(function() {
			$(".footer-controls,.locations,.appinfo,#view_searchreturn").hide();
			$("#view_home").show();
			$(".main-content, #search, header, #branding-bar").removeClass("blur");
        });
    });
</script>
</body>
</html>

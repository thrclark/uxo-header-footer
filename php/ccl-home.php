<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IU Classifieds</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
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
	width: 100%;
	background: #F5F5F5;
	padding-top: 40px;
	padding-bottom: 90px;
	box-shadow: 0 0px 5px 0 rgba(0,0,0,0.26);
	display: none;
}
.blur {
	-webkit-filter: blur(3px);
	-moz-filter: blur(3px);
	-o-filter: blur(3px);
	-ms-filter: blur(3px);
	filter: blur(3px);
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
</head>
<body id="top">
<div class="wrapper">
    <?php include ('includes/brand-header.php') ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="">IU Classifieds</h1>
                </div>
            </div>
        </div>
    </header>
    <section style=" background:#777777; z-index:10"  data-spy="affix" data-offset-top="30" data-offset-bottom="200">
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
                    <div class="lead pull-left"> Music & Arts </div>
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
    <div class="main-content container" role="main" style=" display:none" id="view_searchreturn">
        <div class="row">
            <div class="col-xs-12 col-sm-8"><a href="#" class="app_reset" style="font-size: 32px;color: #9d9d9d;padding-right: 10px;"><i class="fa fa-home" aria-hidden="true"></i></a>
                <h3 style="border-left: solid 1px #cccccc; padding-left: 10px; display:inline-block;margin-bottom: 20px;">Search Results: Vehicles</h3>
            </div>
            <div class="col-sm-4 hidden-xs" style="padding-top: 20px;"> 
                <!-- Single button -->
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Grid View <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Grid</a></li>
                        <li><a href="#">Thumbnail</a></li>
                        <li><a href="#">List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car4.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                    <div class="sticker sticker-new"></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike1.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$50 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>Pedal Bike</strong> - Ignorant saw her her drawings marriage laughter. Case oh an that or away sigh do 
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                    <div class="sticker sticker-new"></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car-blank.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">up to $400 <small class="pull-right">Looking</small></a></h4>
                            <p> <strong>Scooter</strong> - Do in laughter securing smallest sensible no mr hastened. As perhaps
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car1.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2009 Toyota</strong> - Abilities or he perfectly pretended so strangers be exquisite. Oh to another  
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike2.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2014 Honda</strong> - Him boisterous invitation dispatched had connection inhabiting projection.
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car2.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$7000 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2006 Ford Sedan</strong> - Of on affixed civilly moments promise explain fertile in. Assurance
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car-blank.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$1000 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>Hond Civic</strong> - Do in laughter securing smallest sensible no mr hastened. As perhaps
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike3.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$25 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>10 speed bike</strong> - Day handsome addition horrible sensible goodness two contempt. Evening for 
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car3.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$4500 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2003 Dodge Stratus</strong> - Cordially convinced did incommode existence put out suffering certainly.
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car5.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$9500 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Nissan</strong> - Paid was hill sir high. For him precaution any advantages dissimilar comparison
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            
            <!-- End Col --> 
        </div>
    </div>
    <?php include ('includes/modaless-userinfo.php') ?>
    <?php include ('includes/modaless-locations.php') ?>
    <?php include ('includes/modaless-appinfo.php') ?>
    <?php include ('includes/brand-footer.php') ?>
</div>
<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script>
    $(document).ready(function() {
        $(".searchbutton").click(function() {
         
			$("#view_home").hide();
			$("#view_searchreturn").show();
		
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_userinfo").click(function() {
            $(".userinfo").slideToggle();
			$(".locations,.appinfo").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_locations").click(function() {
            $(".locations").slideToggle();
			$(".userinfo, .appinfo").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_appinfo").click(function() {
            $(".appinfo").slideToggle();
			$(".userinfo,.locations").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $(".app_reset").click(function() {
			$(".userinfo,.locations,.appinfo,#view_searchreturn").hide();
			$("#view_home").show();
			$(".main-content").removeClass("blur");
        });
    });
</script>
</body>
</html>
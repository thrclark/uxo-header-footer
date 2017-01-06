<?php 
$section = 'branding';
$page_title = 'app-icon';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>
<style>
.nav-tabs {
	margin-bottom: 15px;
}
</style>
<?php include ('includes/scripts.php') ?>
<link  href="../node_modules/cropper/dist/cropper.css" rel="stylesheet" type="text/css">
<script src="../node_modules/cropper/dist/cropper.js"></script>
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
                        <div class="row section-head">
                            <div class="col-sm-12 section-header">
                                <h2 class="h3">Icons</h2>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Application Icon</legend>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>Select an application icon to be used as a visual identifier for the verification application. The icon will be used when a user creates a home screen bookmark on mobile devices. </p>
                                </div>
                                <div class="col-sm-3">
                                    <div id="crop-avatar">
                                        <div class="avatar-view text-center" title="Upload/Edit Icon"> <img src="img/appicon.png" alt="Avatar">
                                            <div class="btn btn-default btn-xs">Edit</div>
                                        </div>
                                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-default modal-lg">
                                                <div class="modal-content">
                                                    <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title" id="avatar-modal-label">Edit Application Icon</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="avatar-body">
                                                                <div class="avatar-upload"> </div>
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="avatar-wrapper"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="avatar-preview preview-lg hidden-xs"></div>
                                                                        <div class="avatar-preview preview-md"></div>
                                                                        <div class="avatar-preview preview-sm"></div>
                                                                        <div class="avatar-preview preview-xs"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row avatar-btns">
                                                                    <div class="col-md-3 col-xs-2">
                                                                        <div class="btn-group">
                                                                            <input type="hidden" class="avatar-src" name="avatar_src">
                                                                            <input type="hidden" class="avatar-data" name="avatar_data">
                                                                            <label class="btn btn-default btn-upload btn-xs" for="avatarInput" title="Upload image file">
                                                                                <input type="file" class="sr-only avatar-input" id="avatarInput" name="avatar_file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                                                <span class="docs-tooltip" data-toggle="tooltip" title=""><span class="hidden-xsdd">Upload</span> </span> </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-10 text-right">
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="fa fa-search-plus" data-method="zoom" data-option="0.1" title="Zoom In"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="fa fa-search-minus" data-method="zoom" data-option="-0.1" title="Zoom Out"></span></button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="-10" data-second-option="0" title="Move Left">  <span class="fa fa-arrow-left" data-method="move" data-option="-10" data-second-option="0" title="Move Left"></span></button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="fa fa-arrow-right" data-method="move" data-option="10" data-second-option="0" title="Move Right"></span></button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="fa fa-arrow-up" data-method="move" data-option="0" data-second-option="-10" title="Move Up"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="10" title="Move Down">  <span class="fa fa-arrow-down" data-method="move" data-option="0" data-second-option="10" title="Move Down"></span> </button>
                                                                        </div>
                                                                        <div class="btn-group hidden-xs">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="fa fa-rotate-left" data-method="rotate" data-option="-45" title="Rotate Left"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="45" title="Rotate Right"> <span class="fa fa-rotate-right" data-method="rotate" data-option="45" title="Rotate Right"></span> </button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="reset" title="Reset"> <span class="fa fa-refresh" data-method="reset" title="Reset"></span> </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary avatar-save">Done</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal --> 
                                        
                                        <!-- Loading state -->
                                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                    </div>
                                </div>
                                
                                
                                
                          <div class="col-sm-3">
                                
                                </div>
                                
                    
  
  
  
  
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>MS Tile Icon</legend>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>Select an icon to be used as a Microsoft Tile. Microsoft Tile icons must be white (#ffffff) and on a transparent background. The file type must be in the Portable Network Graphics (.png) file format. </p>
                                    <p> Once an icon has been uploaded, select a background color on which the icon will be displayed.</p>
                                </div>
                                <div class="col-sm-3">
                                
                                
                                
                                
                                    <div id="crop-avatar2">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <div class="avatar-view avatar-view2 text-center" style="background:#163C50;"  title="Upload/Edit Icon"id="changethis"><img src="img/MS_TILE_310x310.png" />
                                            <div class="btn btn-default btn-xs">Edit</div>
                                        </div>
                                        
                                        
                                        
                                        
                                  
                                  
                                  
                                  
                                  
                                        
                                          <input class="form-control jscolor {onFineChange:'update(this)'}" id="bkg_header" name="bkg_header" type="text" value="#163C50" style="text-align:center">
                                          
                                          
                                          
                                        <div class="modal fade" id="avatar-modal2" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-default modal-lg">
                                                <div class="modal-content">
                                                    <form class="avatar-form avatar-form2" action="crop.php" enctype="multipart/form-data" method="post">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title" id="avatar-modal-label">Edit Application Icon</h4>
                                                        </div>
                                                       
                                                       
                                                       
                                                       
                                                       
                                                        <div class="modal-body">
                                                            <div class="avatar-body">
                                                                <div class="avatar-upload avatar-upload2"> </div>
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="avatar-wrapper avatar-wrapper2"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="avatar-preview avatar-preview2 preview-lg hidden-xs " id="changethis2" style="background:#163C50"></div>
                                                                        <div class="avatar-preview avatar-preview2 preview-md" id="changethis3" style="background:#163C50"></div>
                                                                        <div class="avatar-preview avatar-preview2 preview-sm" id="changethis4" style="background:#163C50"></div>
                                                                        <div class="avatar-preview avatar-preview2 preview-xs" id="changethis5" style="background:#163C50"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row avatar-btns avatar-btns2">
                                                                    <div class="col-md-3 col-xs-2">
                                                                        <div class="btn-group">
                                                                            <input type="hidden" class="avatar-src2" name="avatar_src">
                                                                            <input type="hidden" class="avatar-data2" name="avatar_data">
                                                                            <label class="btn btn-default btn-upload btn-xs" for="avatarInput2" title="Upload image file">
                                                                                <input type="file" class="sr-only avatar-input avatar-input2" id="avatarInput2" name="avatar_file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                                                <span class="docs-tooltip" data-toggle="tooltip" title=""><span class="hidden-xsdd">Upload</span> </span> </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-10 text-right">
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="fa fa-search-plus" data-method="zoom" data-option="0.1" title="Zoom In"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="fa fa-search-minus" data-method="zoom" data-option="-0.1" title="Zoom Out"></span></button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="-10" data-second-option="0" title="Move Left">  <span class="fa fa-arrow-left" data-method="move" data-option="-10" data-second-option="0" title="Move Left"></span></button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="fa fa-arrow-right" data-method="move" data-option="10" data-second-option="0" title="Move Right"></span></button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="fa fa-arrow-up" data-method="move" data-option="0" data-second-option="-10" title="Move Up"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="10" title="Move Down">  <span class="fa fa-arrow-down" data-method="move" data-option="0" data-second-option="10" title="Move Down"></span> </button>
                                                                        </div>
                                                                        <div class="btn-group hidden-xs">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="fa fa-rotate-left" data-method="rotate" data-option="-45" title="Rotate Left"></span> </button>
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="45" title="Rotate Right"> <span class="fa fa-rotate-right" data-method="rotate" data-option="45" title="Rotate Right"></span> </button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default btn-xs" data-method="reset" title="Reset"> <span class="fa fa-refresh" data-method="reset" title="Reset"></span> </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary avatar-save avatar-save2">Done</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal --> 
                                        
                                        <!-- Loading state -->
                                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                    
                                    <!-- <input class="form-control jscolor jscolor-active" id="bkg_header" name="bkg_header" type="text" value="#163C50" autocomplete="off" style="background-image: none; background-color: rgb(22, 60, 80); color: rgb(255, 255, 255);">--> 
                                    
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Favicon</legend>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>Select a favicon file to be displayed by web browsers next to the URL in the address bar and in browser bookmarks. The favicon must be uploaded in the .ico file format.</p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="avatar-view" style="text-align:center" data-toggle="tooltip" data-placement="bottom" title="Upload Icon">
                                        <div style="padding:30px"><img src="../img/favicon.ico" style="width:16px; height:16px"/></div>
                                        <div class="btn btn-default btn-xs">Edit</div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a>
                            <button type="submit" class="btn btn-primary" id="" data-toggle="modal" data-target="#confirm_save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm_exit" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>Unsaved Changes</h4>
            </div>
            <div class="modal-body">
                <div class="message">
                    <div class="message-content">
                        <p>There are unsaved changes on this page. Would you like to continue editing?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Discard Changes</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal">Continue Editing</a> </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm_exit" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>Unsaved Changes</h4>
            </div>
            <div class="modal-body">
                <div class="message">
                    <div class="message-content">
                        <p>There are unsaved changes on this page. Would you like to continue editing?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Discard Changes</a> <a href="#" class="btn btn-primary btn-sm" data-dismiss="modal">Continue Editing</a> </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm_save" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="icon-user-3"></i>Settings Saved</h4>
            </div>
            <div class="modal-body">
                <div class="message">
                    <div class="message-content">
                        <p>Your settings have been saved.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-default btn-sm" data-dismiss="modal" >Close</a> </div>
        </div>
    </div>
</div>
<script src="../js/cropper-main.js"></script> 
<script src="../js/cropper-main2.js"></script> 

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


</script> 
<script>
    function update(jscolor) {
        document.getElementById('changethis').style.backgroundColor = '#' + jscolor;
		document.getElementById('changethis2').style.backgroundColor = '#' + jscolor;
		document.getElementById('changethis3').style.backgroundColor = '#' + jscolor;
		document.getElementById('changethis4').style.backgroundColor = '#' + jscolor;
		document.getElementById('changethis5').style.backgroundColor = '#' + jscolor;
    }
</script>
</body>
</html>

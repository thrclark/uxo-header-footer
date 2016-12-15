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
                                    <p>The application icon is used for asdf asdf asdf asdf asdf asdf asdf asdf asdf </p>
                                </div>
                                <div class="col-sm-3">
                                    <div id="crop-avatar"> 
                                
                                <!-- Current avatar -->
                                <div class="avatar-view" title="Edit Icon"> <img src="img/appicon.png" alt="Avatar"> </div>
                                
                               <!-- 
                                <div class="clearfix"></div>
                            <button class="btn btn-default btn-xs pull-right edit-icon" data-toggle="modal" data-target="#avatar-modal">Edit</button>
                            
                            
                            -->
                            
                            
                            
                            
                                
                                <!-- Cropping modal -->
                                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-default modal-lg">
                                        <div class="modal-content">
                                            <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="avatar-body"> 
                                                        
                                                        <!-- Upload image and data -->
                                                        <div class="avatar-upload"> </div>
                                                        
                                                        <!-- Crop and preview -->
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="avatar-wrapper"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="avatar-preview preview-lg"></div>
                                                                <div class="avatar-preview preview-md"></div>
                                                                <div class="avatar-preview preview-sm"></div>
                                                                <div class="avatar-preview preview-xs"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row avatar-btns">
                                                            <div class="col-md-3">
                                                                <div class="btn-group">
                                                                    <input type="hidden" class="avatar-src" name="avatar_src">
                                                                    <input type="hidden" class="avatar-data" name="avatar_data">
                                                                    <label class="btn btn-default btn-upload btn-xs" for="avatarInput" title="Upload image file">
                                                                        <input type="file" class="sr-only avatar-input" id="avatarInput" name="avatar_file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title=""> Upload Image </span> </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 text-right">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, 0.1)"> <span class="fa fa-search-plus"></span> </span> </button>
                                                                    <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, -0.1)"> <span class="fa fa-search-minus"></span> </span> </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, -45)"> <span class="fa fa-rotate-left"></span> </span> </button>
                                                                    <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="45" title="Rotate Right"> <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, 45)"> <span class="fa fa-rotate-right"></span> </span> </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default btn-xs" data-method="reset" title="Reset"> <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;reset&quot;)"> <span class="fa fa-refresh"></span> </span> </button>
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
                            </div>
                            
                            
                            
                           
                        </fieldset>
                        
                        
                        
                        
                        <fieldset>
                            <legend>MS Tile Icon</legend>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>Microsoft Tile icons asdf asf asf asdf asfd asfd asfdasfdasfd asfdasd  </p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="avatar-view" style="text-align:center; background:red" data-toggle="tooltip" data-placement="bottom" title="Edit Icon"><img src="img/MS_TILE_310x310.png" /></div>
                                    
                                   <!-- <input class="form-control jscolor jscolor-active" id="bkg_header" name="bkg_header" type="text" value="#163C50" autocomplete="off" style="background-image: none; background-color: rgb(22, 60, 80); color: rgb(255, 255, 255);">-->
                                    
                                </div>
                            </div>
                        </fieldset>
                   
                   
                   
                   
                        
                        <fieldset>
                            <legend>Favicon</legend>
                            <div class="row">
                                <div class="col-sm-9">
                                    <p>The favicon will be displayed by web browsers next to the URL in the address bar and in browser bookmarks.</p>
                                </div>
                                <div class="col-sm-3">
                                    <div class="avatar-view" style="text-align:center; padding-top:65px"><img src="../img/favicon.ico" style="width:16px; height:16px"/></div>
                                </div>
                            </div>
                        </fieldset>
                   
                   
                   
                       
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


<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


</script>



<script>



<script>
function update(jscolor) {
    // 'jscolor' instance can be used as a string
    document.getElementById('rect').style.backgroundColor = '#' + jscolor
}
</script>

</script>
</body>
</html>

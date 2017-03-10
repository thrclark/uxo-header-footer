<?php
$section = 'branding';
$page_title = 'app-styles';
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
                                    <h2 class="h3">Colors & Layout</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#colors" aria-controls="colors" role="tab" data-toggle="tab">Colors</a></li>
                                <li role="presentation"><a href="#layout" aria-controls="layout" role="tab" data-toggle="tab">Layout</a></li>
                                <li role="presentation"><a href="#radius" aria-controls="radius" role="tab" data-toggle="tab">Border Radius</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="colors">
                                    <fieldset>
                                        <legend>Background Colors</legend>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="bkg_header"> Header Background Color </label>
                                            <span class="help-block small">Specify the background color of the application header area.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="bkg_header" name="bkg_header" type="text" value="#163C50">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="bkg_header_container"> Header Background Container Color </label>
                                            <span class="help-block small">Specify the background color of the application header container area.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="bkg_header_container" name="bkg_header_container" type="text" value="#163C50">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="bkg_body"> Body Background Color </label>
                                            <span class="help-block small">Specify the background color of the application body.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="bkg_body" name="bkg_body" type="text" value="#ebebeb">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="bkg_panel"> Panel Background Color </label>
                                            <span class="help-block small">Specify the background color of the application panels.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="bkg_panel" name="bkg_panel" type="text" value="#ffffff">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Text Colors</legend>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="txtcolor_onlight"> Text Color - on Light Backgrounds </label>
                                            <span class="help-block small">Specify the text color that will be used over light-colored backgrounds.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="txtcolor_onlight" name="txtcolor_onlight" type="text" value="#ffffff">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="txtcolor_ondark"> Text Color - on Dark Backgrounds </label>
                                            <span class="help-block small">Specify the text color that will be used over dark-colored backgrounds.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="txtcolor_ondark" name="txtcolor_ondark" type="text" value="#555555">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="link_color"> Link Color </label>
                                            <span class="help-block small">Specify the color for links.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="link_color" name="link_color" type="text" value="#2879B8">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Rule Color</legend>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="btncolor_primary"> Primary Rule Color </label>
                                            <span class="help-block small">Specify the color for horizontal rules and table borders.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="hr_color" name="hr_color" type="text" value="#cccccc">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Button Colors</legend>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="btncolor_primary"> Primary Button Color </label>
                                            <span class="help-block small">Specify the text color that will be used over light-colored backgrounds.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="btncolor_primary" name="btncolor_primary" type="text" value="#2879B8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="btncolor_secondary"> Secondary Button Color</label>
                                            <span class="help-block small">Specify the text color that will be used over dark-colored backgrounds.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control jscolor" id="btncolor_secondary" name="btncolor_secondary" type="text" value="#ffffff">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="layout">
                                    <fieldset>
                                        <legend>Page Width</legend>
                                        <p> Note that the settings on this page will only apply to the verification view, and not to the publishing and admin views.</p>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_lg"> Large Desktop</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_lg" type="text" class="form-control" value="950px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_md"> Small Desktop</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_md" type="text" class="form-control" value="950px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_sm"> Tablet</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_sm" type="text" class="form-control" value="750px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_xs"> Mobile</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_xs" type="text" class="form-control" disabled value="100%">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Main Content Padding</legend>
                                        <p> Specify the amount of padding for the main content section of a verification screen (does not apply to publishing/admin screens)</p>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_lg">Top</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_lg" type="text" class="form-control" value="20px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_md">Bottom</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_md" type="text" class="form-control" value="60px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_sm"> Left</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_sm" type="text" class="form-control" value="15px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="width_xs"> Right</label>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="width_sm" type="text" class="form-control" value="15px">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="radius">
                                    <fieldset>
                                        <legend>Border Radius</legend>
                                        <div class="form-group ">
                                            <label class="control-label" for="radius_general">General Border Radius</label>
                                            <span class="help-block small">Applies to tabs & panels. </span>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="radius_general" type="text" class="form-control" value="0px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="radius_small">Small Border Radius</label>
                                            <span class="help-block small">Applies to small buttons. </span>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="radius_small" type="text" class="form-control" value="0px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="radius_large">Large Border Radius</label>
                                            <span class="help-block small">Applies to large buttons. </span>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <input id="radius_large" type="text" class="form-control" value="0px">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="text-right"> <a href="" class="btn btn-default" data-toggle="modal" data-target="#confirm_exit">Cancel</a>
                                <button type="submit" class="btn btn-primary" id="" data-toggle="modal" data-target="#confirm_save">Save</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/brand-footer.php') ?>
    <script type='text/javascript'>
			//<![CDATA[
			$( document ).ready( function () {
				var $template = $( ".template-add-data" );
				var hash = 1;
				$( ".btn-add-data" ).on( "click", function () {
					var $newPanel = $template.clone();
					$newPanel.find( ".collapse" ).removeClass( "in" );
					$newPanel.find( ".accordion-toggle" ).attr( "href", "#collapse-data" + ( ++hash ) )
						.text( "Font Face " + hash );
					$newPanel.find( ".panel-collapse" ).attr( "id", "collapse-data" + ( hash ) ).addClass( "collapse" ).removeClass( "in" );
					//$newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
					$( "#sortable" ).append( $newPanel.fadeIn() );
					$( document ).on( 'click', '.fa.fa-close', function () {
						$( this ).parents( '.panel' ).get( 0 ).remove();
					} );
				} );

			} ); //]]>
		</script> 
    <script type="text/javascript">
			$( document ).ready( function () {
				$( 'a.addstuff' ).click( function () {
					$( '#myTable tbody' ).append( '<tr><td><input type="url" name="fontFaces[0].fontSources[0].url" id="fontFaces[0].fontSources[0].url" ng-model="source.url" ng-maxlength="2000" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-valid-maxlength ng-valid-url ng-touched" countdown="" required="" popover="The URL to the font resource." aria-invalid="false" data-original-title="" title=""></td><td><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required="" aria-invalid="false"><option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE" selected="selected">Embedded OpenType</option><option label="OpenType" value="string:OPEN_TYPE">OpenType</option><option label="SVG" value="string:SVG">SVG</option><option label="TrueType" value="string:TRUE_TYPE">TrueType</option><option label="WOFF" value="string:WOFF">WOFF</option><option label="WOFF 2" value="string:WOFF2">WOFF 2</option></select></td><td><a href="#" class="btn btn-xs btn-default" style="margin-top:5px">Delete</a></td></tr>' );
				} );
			} );
		</script> 
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
</body>
</html>
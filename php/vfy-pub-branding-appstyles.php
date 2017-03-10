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
                                    <h2 class="h3">Page View Styles</h2>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#colors" aria-controls="colors" role="tab" data-toggle="tab">Colors</a></li>
                                <li role="presentation"><a href="#layout" aria-controls="layout" role="tab" data-toggle="tab">Layout</a></li>
                                <li role="presentation"><a href="#radius" aria-controls="radius" role="tab" data-toggle="tab">Border Radius</a></li>
                                <li role="presentation"><a href="#fonts" aria-controls="fonts" role="tab" data-toggle="tab">Fonts</a></li>
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
                                <div role="tabpanel" class="tab-pane" id="fonts">
                                    <fieldset>
                                        <legend>Font for Headers</legend>
                                        <div class="form-group ">
                                            <label class="control-label " for="headerfont">Font Face </label>
                                            <span class="help-block small">Select a font that will be used for all headers.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select class="select form-control" id="headerfont" name="headerfont">
                                                        <option label="" value=""></option>
                                                        <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                        <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                        <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                        <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                        <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                        <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                        <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                        <option label="" value="">Serif - Georgia</option>
                                                        <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                        <option label="" value="">Serif - "Times New Roman", Times</option>
                                                        <option label="" value="">------</option>
                                                        <option label="" value="usecustomfont">Use Custom Font</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-headerfont">
                                            <label class="control-label" for="font_family"> Font Family Name</label>
                                            <span class="help-block small">Specify the name of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-headerfont">
                                            <label class="control-label" for="font_family"> Weight</label>
                                            <span class="help-block small">Specify the weight of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="fontFaces[0].fontWeight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="bold" value="string:BOLD">bold</option>
                                                        <option label="100" value="string:W_100">100</option>
                                                        <option label="200" value="string:W_200">200</option>
                                                        <option label="300" value="string:W_300">300</option>
                                                        <option label="400" value="string:W_400">400</option>
                                                        <option label="500" value="string:W_500">500</option>
                                                        <option label="600" value="string:W_600">600</option>
                                                        <option label="700" value="string:W_700">700</option>
                                                        <option label="800" value="string:W_800">800</option>
                                                        <option label="900" value="string:W_900">900</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-headerfont">
                                            <label class="control-label" for="font_family"> Style</label>
                                            <span class="help-block small">Specify the style of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="fontFaces[0].fontStyle" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="italic" value="string:ITALIC">italic</option>
                                                        <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-headerfont">
                                            <label class="control-label" for="font_family"> Stretch</label>
                                            <span class="help-block small">Specify the stretch of this custom font..</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="fontFaces[0].fontStretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="condensed" value="string:CONDENSED">condensed</option>
                                                        <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                        <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                        <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                        <option label="expanded" value="string:EXPANDED">expanded</option>
                                                        <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                        <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                        <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-headerfont">
                                            <div class="form-label"> Font URLs</div>
                                            <span class="help-block small"> Specify URLs for this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <table class="table table-actions" id="myTable" style="margin-bottom: 0px">
                                                        <thead class="sr-only">
                                                            <tr>
                                                                <th>URL</th>
                                                                <th>Type</th>
                                                                <th> Actions </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td>
                                                                <td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                                                        <option selected>Select Type</option>
                                                                        <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                        <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                        <option label="SVG" value="string:SVG">SVG</option>
                                                                        <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                        <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                        <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                                    </select></td>
                                                                <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  <div class="form-group custom-headerfont">
                                    <label class="control-label custom-headerfont" for="backupfont">Backup Font </label>
                                    <span class="help-block small">Select a font that will be used in the case that the custom font becomes unavailable.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="select form-control" id="backupfont" name="backupfont">
                                                <option label="" value=""></option>
                                                <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                <option label="" value="">Serif - Georgia</option>
                                                <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                <option label="" value="">Serif - "Times New Roman", Times</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>-->
                                    </fieldset>
                                    <fieldset>
                                        <legend>Font for Body Text</legend>
                                        <div class="form-group">
                                            <label class="control-label " for="bodyfont">Font Face </label>
                                            <span class="help-block small">Select a font that will be used for the body.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select class="select form-control" id="bodyfont" name="bodyfont">
                                                        <option label="" value=""></option>
                                                        <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                        <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                        <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                        <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                        <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                        <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                        <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                        <option label="" value="">Serif - Georgia</option>
                                                        <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                        <option label="" value="">Serif - "Times New Roman", Times</option>
                                                        <option label="" value="">------</option>
                                                        <option label="" value="usecustomfont">Use Custom Font</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-bodyfont">
                                            <label class="control-label" for="font_family_body"> Font Family Name</label>
                                            <span class="help-block small">Specify the name of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="font_family_body" name="font_family_body" type="text" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-bodyfont">
                                            <label class="control-label" for="font_weight_body"> Weight</label>
                                            <span class="help-block small">Specify the weight of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="font_weight_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="bold" value="string:BOLD">bold</option>
                                                        <option label="100" value="string:W_100">100</option>
                                                        <option label="200" value="string:W_200">200</option>
                                                        <option label="300" value="string:W_300">300</option>
                                                        <option label="400" value="string:W_400">400</option>
                                                        <option label="500" value="string:W_500">500</option>
                                                        <option label="600" value="string:W_600">600</option>
                                                        <option label="700" value="string:W_700">700</option>
                                                        <option label="800" value="string:W_800">800</option>
                                                        <option label="900" value="string:W_900">900</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-bodyfont">
                                            <label class="control-label" for="font_style_body"> Style</label>
                                            <span class="help-block small">Specify the style of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="font_style_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="italic" value="string:ITALIC">italic</option>
                                                        <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-bodyfont">
                                            <label class="control-label" for="font_stretch_body"> Stretch</label>
                                            <span class="help-block small">Specify the stretch of this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="font_stretch_body" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                        <option label="condensed" value="string:CONDENSED">condensed</option>
                                                        <option label="ultra-condensed" value="string:ULTRA_CONDENSED">ultra-condensed</option>
                                                        <option label="extra-condensed" value="string:EXTRA_CONDENSED">extra-condensed</option>
                                                        <option label="semi-condensed" value="string:SEMI_CONDENSED">semi-condensed</option>
                                                        <option label="expanded" value="string:EXPANDED">expanded</option>
                                                        <option label="semi-expanded" value="string:SEMI_EXPANDED">semi-expanded</option>
                                                        <option label="extra-expanded" value="string:EXTRA_EXPANDED">extra-expanded</option>
                                                        <option label="ultra-expanded" value="string:ULTRA_EXPANDED">ultra-expanded</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group custom-bodyfont">
                                            <div class="form-label"> Font URLs</div>
                                            <span class="help-block small"> Specify URLs for this custom font.</span>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <table class="table table-actions" id="myTable" style="margin-bottom: 0px">
                                                        <thead class="sr-only">
                                                            <tr>
                                                                <th>URL</th>
                                                                <th>Type</th>
                                                                <th> Actions </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td>
                                                                <td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                                                        <option selected>Select Type</option>
                                                                        <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
                                                                        <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                        <option label="SVG" value="string:SVG">SVG</option>
                                                                        <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                        <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                        <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                                    </select></td>
                                                                <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group custom-bodyfont">
                                    <label class="control-label" for="backupfont">Backup Font </label>
                                    <span class="help-block small">Select a font that will be used in the case that the custom font becomes unavailable.</span>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="select form-control" id="backupfont" name="backupfont">
                                                <option label="" value=""></option>
                                                <option label="" value="">Sans-Serif - Arial, Helvetica </option>
                                                <option label="" value="">Sans-Serif - "Arial Black", Gadget</option>
                                                <option label="" value="">Sans-Serif - Impact, Charcoal </option>
                                                <option label="" value="">Sans-Serif - "Lucida Sans Unicode", "Lucida Grande" </option>
                                                <option label="" value="">Sans-Serif - Tahoma, Geneva </option>
                                                <option label="" value="">Sans-Serif - "Trebuchet MS", Helvetica </option>
                                                <option label="" value="">Sans-Serif - Verdana, Geneva </option>
                                                <option label="" value="">Serif - Georgia</option>
                                                <option label="" value="">Serif - "Palatino Linotype", "Book Antiqua", Palatino</option>
                                                <option label="" value="">Serif - "Times New Roman", Times</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>-->
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
					$( '#myTable tbody' ).prepend( '<tr><td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL"></td><td class="col-sm-4"><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required="" aria-invalid="false"><option selected>Select Type</option><option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option><option label="OpenType" value="string:OPEN_TYPE">OpenType</option><option label="SVG" value="string:SVG">SVG</option><option label="TrueType" value="string:TRUE_TYPE">TrueType</option><option label="WOFF" value="string:WOFF">WOFF</option><option label="WOFF 2" value="string:WOFF2">WOFF 2</option></select></td><td><a href="#" class="btn btn-xs btn-default " style="margin-top:5px">Delete</a></td></tr>' );
				} );
			} );
		</script> 
    <script type="text/javascript">
			//<![CDATA[
			$( window ).load( function () {
				$( function () {
					$( '.custom-headerfont' ).hide();
					$( '#headerfont' ).change( function () {
						if ( $( '#headerfont' ).val() == 'usecustomfont' ) {
							$( '.custom-headerfont' ).slideDown();
						} else {
							$( '.custom-headerfont' ).slideUp();
						}
					} );



				} );
			} ); //]]>
		</script> 
    <script type="text/javascript">
			//<![CDATA[
			$( window ).load( function () {
				$( function () {
					$( '.custom-bodyfont' ).hide();
					$( '#bodyfont' ).change( function () {
						if ( $( '#bodyfont' ).val() == 'usecustomfont' ) {
							$( '.custom-bodyfont' ).slideDown();
						} else {
							$( '.custom-bodyfont' ).slideUp();
						}
					} );



				} );
			} ); //]]>
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
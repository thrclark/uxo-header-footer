<?php 
$section = 'settings';
$page_title = 'branding';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles-publishing.php') ?>


<style>
.nav-tabs {

    margin-bottom: 15px;
}</style>
<?php include ('includes/scripts.php') ?>
</head>
<body class="view-admin" id="top">
<div class="wrapper">
    <?php include ('includes/brand-header2.php') ?>
    <?php include ('includes/pub-header.php') ?>
    <div class="main-content container" role=main>
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include ('includes/pub-nav.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content">
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-12 section-header">
                                    <h2 class="h3">Branding</h2>
                                </div>
                            </div>
                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#red" data-toggle="tab">Header/Footer</a></li>
                                <li><a href="#orange" data-toggle="tab">Application Styling</a></li>
                                <li><a href="#yellow" data-toggle="tab">Custom Fonts</a></li>
                            </ul>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="red">
                                    <fieldset class="form-group">
                                        <legend>Header</legend>
                                        <textarea rows="8" class="form-control" aria-invalid="false"></textarea>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <legend>Footer</legend>
                                        <textarea rows="8" class="form-control " aria-invalid="false"></textarea>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <legend>CSS</legend>
                                        <textarea rows="8" class="form-control " aria-invalid="false"></textarea>
                                    </fieldset>
                                </div>
                                <div class="tab-pane" id="orange">
                                    <fieldset>
                                        <legend>Primary Brand Colors</legend>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                                <label for="brandPrimary" class="control-label">Primary <small class="text-muted">@brand-primary</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="brandPrimary" id="brandPrimary" ng-model="brandCtrl.brand.brandPrimary" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The primary brand contextual color (blue). Default is #2879b8." placeholder="#2879b8" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="brandPrimary" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                                <label for="brandSuccess" class="control-label">Success <small class="text-muted">@brand-success</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="brandSuccess" id="brandSuccess" ng-model="brandCtrl.brand.brandSuccess" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The success contextual color for buttons, alerts, etc. (green). Default is #387f38." placeholder="#387f38" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="brandSuccess" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                                <label for="brandDanger" class="control-label">Danger <small class="text-muted">@brand-danger</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="brandDanger" id="brandDanger" ng-model="brandCtrl.brand.brandDanger" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The danger/error contextual color for buttons, alerts, etc. (red). Default is #dc0031." placeholder="#dc0031" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="brandDanger" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Text</legend>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="fontFamilyBody" class="control-label">Body Font Family <small class="text-muted">@font-family</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="fontFamilyBody" id="fontFamilyBody" ng-model="brandCtrl.brand.fontFamilyBody" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-pattern ng-valid-maxlength ng-not-empty" countdown="" popover="The font family for main body text. Default is sans-serif." placeholder="sans-serif" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">83</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="fontFamilyBody" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="fontFamilyHeader" class="control-label">Heading Font Family <small class="text-muted">@headings-font-family</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="fontFamilyHeader" id="fontFamilyHeader" ng-model="brandCtrl.brand.fontFamilyHeader" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The font family for heading text. Default is @font-family." placeholder="@font-family" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="fontFamilyHeader" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="textColor" class="control-label">Text Color <small class="text-muted">@text-color</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="textColor" id="textColor" ng-model="brandCtrl.brand.textColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The main text color. Default is @gray." placeholder="@gray" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="textColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="linkColor" class="control-label">Link Color <small class="text-muted">@link-color</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="linkColor" id="linkColor" ng-model="brandCtrl.brand.linkColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The text color for links. Default is @brand-primary." placeholder="@brand-primary" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="linkColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="linkHoverColor" class="control-label">Link Hover Color <small class="text-muted">@link-hover-color</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="linkHoverColor" id="linkHoverColor" ng-model="brandCtrl.brand.linkHoverColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The color of links when hovering. Default is darken(@link-color, 15%)." placeholder="darken(@link-color, 15%)" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="linkHoverColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="linkDecoration" class="control-label">Link Decoration <small class="text-muted">@link-decoration</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="linkDecoration" id="linkDecoration" ng-model="brandCtrl.brand.linkDecoration" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The text decoration for links. Default is none." placeholder="none" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="linkDecoration" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="linkHoverDecoration" class="control-label">Link Hover Decoration <small class="text-muted">@link-hover-decoration</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="linkHoverDecoration" id="linkHoverDecoration" ng-model="brandCtrl.brand.linkHoverDecoration" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The text decoration for links when hovering. Default is underline." placeholder="underline" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="linkHoverDecoration" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Header</legend>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="headerBackgroundColor" class="control-label">Background Color <small class="text-muted">@header-background</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="headerBackgroundColor" id="headerBackgroundColor" ng-model="brandCtrl.brand.headerBackgroundColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The background color of the header that contains the application name. Default is #163C50." placeholder="#163C50" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="headerBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="headerTextColor" class="control-label">Text Color <small class="text-muted">@header-text</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="headerTextColor" id="headerTextColor" ng-model="brandCtrl.brand.headerTextColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The color of the text in the header. Default is #fff." placeholder="#fff" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="headerTextColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Verification</legend>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="sectionBackgroundColor" class="control-label">Section Background Color <small class="text-muted">@section-background</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="sectionBackgroundColor" id="sectionBackgroundColor" ng-model="brandCtrl.brand.sectionBackgroundColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The background color of a verification section. Default is #fff." placeholder="#fff" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="sectionBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="sectionTextColor" class="control-label">Section Text Color <small class="text-muted">@section-text</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="sectionTextColor" id="sectionTextColor" ng-model="brandCtrl.brand.sectionTextColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The color of text within a verification section. Default is @text-color." placeholder="@text-color" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="sectionTextColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="buttonBackgroundColor" class="control-label">Button Background Color <small class="text-muted">@verify-button-background</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="buttonBackgroundColor" id="buttonBackgroundColor" ng-model="brandCtrl.brand.buttonBackgroundColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The background color of the buttons on a verification. Default is @brand-primary." placeholder="@brand-primary" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="buttonBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="buttonTextColor" class="control-label">Button Text Color <small class="text-muted">@verify-button-text</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="buttonTextColor" id="buttonTextColor" ng-model="brandCtrl.brand.buttonTextColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The text color of the buttons on a verification. Default is #fff." placeholder="#fff" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="buttonTextColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Miscellaneous</legend>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="backgroundColor" class="control-label">Body Background Color <small class="text-muted">@body-background</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="backgroundColor" id="backgroundColor" ng-model="brandCtrl.brand.backgroundColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The background color of the main page content. Default is #ebebeb." placeholder="#ebebeb" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="backgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="horizontalRuleColor" class="control-label">Horizontal Rule Color <small class="text-muted">@hr-color</small></label>
                                                <div class="counter-container">
                                                    <input type="text" name="horizontalRuleColor" id="horizontalRuleColor" ng-model="brandCtrl.brand.horizontalRuleColor" ng-maxlength="100" ng-pattern="/^[^;{}:&quot;]+$/" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern ng-valid-maxlength" countdown="" popover="The color of horizontal dividing lines within a verification. Default is #ccc." placeholder="#ccc" data-original-title="" title="" aria-invalid="false">
                                                    <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                                <div field="horizontalRuleColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                                    <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                                    <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="tab-pane" id="yellow">
                                    <div class="panel-group" id="accordion1">
                                        <div id="sortable">
                                            <div class="panel panel-default template-add-data">
                                                <div class="panel-heading">
                                                    <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse-data1"> Font Face 1 </a></p>
                                                    <span class='pull-right'><i class='fa fa-close clickable'></i></span> </div>
                                                <div id="collapse-data1" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="form-group ">
                                                            <label class="control-label" for="font_family"> Font Family </label>
                                                            <span class="help-block small">The font family name to be used in CSS declarations.</span>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="font_weight"> Font Weight </label>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <select ng-model="fontFace.fontWeight" name="fontFaces[0].fontWeight" id="font_weight" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontWeights" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
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
                                                        <div class="form-group ">
                                                            <label class="control-label" for="font_style"> Font Style </label>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="font_style" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                                        <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                                        <option label="italic" value="string:ITALIC">italic</option>
                                                                        <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="font_stretch"> Font Stretch</label>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <select ng-model="fontFace.fontStretch" name="fontFaces[0].fontStretch" id="font_stretch" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStretches" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
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
                                                        <p class="control-label"> Font Sources </p>
                                                        <table class="table table-condensed table-responsive table-actions" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>URL </th>
                                                                    <th>Format</th>
                                                                    <th> Actions </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input type="url" name="fontFaces[0].fontSources[0].url" id="fontFaces[0].fontSources[0].url" ng-model="source.url" ng-maxlength="2000" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-valid-maxlength ng-valid-url ng-touched" countdown="" required="" popover="The URL to the font resource." aria-invalid="false" data-original-title="" title=""></td>
                                                                    <td><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">
                                                                            <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE" selected="selected">Embedded OpenType</option>
                                                                            <option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
                                                                            <option label="SVG" value="string:SVG">SVG</option>
                                                                            <option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
                                                                            <option label="WOFF" value="string:WOFF">WOFF</option>
                                                                            <option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
                                                                        </select></td>
                                                                    <td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="addstuff btn btn-xs btn-default pull-right"><i class="fa fa-plus"></i> Font Source</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-xs btn-default btn-add-data pull-right"> <i class="fa fa-plus"></i> Section</button>
                                    
                                    <div class="clearfix"></div><br><br><br>
                                  
                                </div>
                            </div>
                            <div class="text-right"> <a href="#" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
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
    $(document).ready(function() {
        var $template = $(".template-add-data");
        var hash = 1;
        $(".btn-add-data").on("click", function() {
            var $newPanel = $template.clone();
            $newPanel.find(".collapse").removeClass("in");
            $newPanel.find(".accordion-toggle").attr("href", "#collapse-data" + (++hash))
                .text("Font Face " + hash);
            $newPanel.find(".panel-collapse").attr("id", "collapse-data" + (hash)).addClass("collapse").removeClass("in");
            //$newPanel.find(".panel-heading").append("<span class='pull-right'><i class='fa fa-close clickable'></i></span>");
            $("#sortable").append($newPanel.fadeIn());
            $(document).on('click', '.fa.fa-close', function() {
                $(this).parents('.panel').get(0).remove();
            });
        });

    }); //]]>
</script> 

<script type="text/javascript">
    $(document).ready(function() {
        $('a.addstuff').click(function() {
            $('#myTable tbody').append('<tr> <td><input type="url" name="fontFaces[0].fontSources[0].url" id="fontFaces[0].fontSources[0].url" ng-model="source.url" ng-maxlength="2000" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-valid-maxlength ng-valid-url ng-touched" countdown="" required="" popover="The URL to the font resource." aria-invalid="false" data-original-title="" title=""></td> <td><select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required="" aria-invalid="false"> <option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE" selected="selected">Embedded OpenType</option> <option label="OpenType" value="string:OPEN_TYPE">OpenType</option> <option label="SVG" value="string:SVG">SVG</option> <option label="TrueType" value="string:TRUE_TYPE">TrueType</option> <option label="WOFF" value="string:WOFF">WOFF</option> <option label="WOFF 2" value="string:WOFF2">WOFF 2</option> </select></td> <td><a href="#" class="btn btn-xs btn-default" style="margin-top:5px">Delete</a></td> </tr>');
        });
    });
</script>

</div>
</body>
</html>

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
                                    <h2 class="h3">Application Styles</h2>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Primary Brand Colors</legend>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group" id="">
                                            <label class="control-label" for="brandPrimary"> Primary </label>
                                            <span class="help-block small">The primary brand contextual color (blue). Default is #2879b8.</span>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input class="form-control jscolor" id="brandPrimary" name="brandPrimary" type="text" value="#2879b8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="brandSuccess"> Success </label>
                                            <span class="help-block small">The success contextual color for buttons, alerts, etc. (green). Default is #387f38.</span>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input class="form-control jscolor" id="brandSuccess" name="brandSuccess" type="text" value="#387f38">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="">
                                            <label class="control-label" for="brandDanger"> Danger </label>
                                            <span class="help-block small">The danger/error contextual color for buttons, alerts, etc. (red). Default is #dc0031.</span>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input class="form-control jscolor" id="brandDanger" name="brandDanger" type="text" value="#dc0031">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Typography</legend>
                                <div class="row">
                                    <div class=" col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="linkColor" class="control-label">Link Color <small class="text-muted">@link-color</small></label>
                                            <input type="text" name="linkColor" id="linkColor" ng-maxlength="100" class="form-control " countdown="" popover="The text color for links. Default is @brand-primary." placeholder="@brand-primary" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                        <div class="form-group" id="">
                                            <label for="linkHoverColor" class="control-label">Link Hover Color <small class="text-muted">@link-hover-color</small></label>
                                            <input type="text" name="linkHoverColor" id="linkHoverColor" ng-maxlength="100" class="form-control " countdown="" popover="The color of links when hovering. Default is darken(@link-color, 15%)." placeholder="darken(@link-color, 15%)" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                        <div class="form-group" id="">
                                            <label for="linkDecoration" class="control-label">Link Decoration <small class="text-muted">@link-decoration</small></label>
                                            <input type="text" name="linkDecoration" id="linkDecoration" ng-maxlength="100" class="form-control " countdown="" popover="The text decoration for links. Default is none." placeholder="none" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                        <div class="form-group" id="">
                                            <label for="linkHoverDecoration" class="control-label">Link Hover Decoration <small class="text-muted">@link-hover-decoration</small></label>
                                            <input type="text" name="linkHoverDecoration" id="linkHoverDecoration" ng-maxlength="100" class="form-control " countdown="" popover="The text decoration for links when hovering. Default is underline." placeholder="underline" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                    </div>
                                    <div class=" col-sm-6">
                                        <div class="form-group" id="">
                                            <label for="fontFamilyBody" class="control-label">Body Font Family <small class="text-muted">@font-family</small></label>
                                            <input type="text" name="fontFamilyBody" id="fontFamilyBody" ng-maxlength="100" class="form-control ng-pristine ng-untouched ng-valid ng-valid-pattern ng-valid-maxlength ng-not-empty" countdown="" popover="The font family for main body text. Default is sans-serif." placeholder="sans-serif" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                        <div class="form-group" id="">
                                            <label for="fontFamilyHeader" class="control-label">Heading Font Family <small class="text-muted">@headings-font-family</small></label>
                                            <input type="text" name="fontFamilyHeader" id="fontFamilyHeader" ng-maxlength="100" class="form-control " countdown="" popover="The font family for heading text. Default is @font-family." placeholder="@font-family" data-original-title="" title="" aria-invalid="false">
                                        </div>
                                        <div class="form-group" id="">
                                            <label for="textColor" class="control-label">Text Color <small class="text-muted">@text-color</small></label>
                                            <input type="text" name="textColor" id="textColor" ng-maxlength="100" class="form-control " countdown="" popover="The main text color. Default is @gray." placeholder="@gray" data-original-title="" title="" aria-invalid="false">
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
                                            <input class="form-control jscolor" id="headerBackgroundColor" name="headerBackgroundColor" type="text" value="#163C50">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="headerBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="headerTextColor" class="control-label">Text Color <small class="text-muted">@header-text</small></label>
                                        <div class="counter-container">
                                            <input class="form-control jscolor" id="headerTextColor" name="headerTextColor" type="text" value="#ffffff">
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
                                            <input class="form-control jscolor" id="sectionBackgroundColor" name="sectionBackgroundColor" type="text" value="#ffffff">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="sectionBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="sectionTextColor" class="control-label">Section Text Color <small class="text-muted">@section-text</small></label>
                                        <div class="counter-container">
                                            <input type="text" name="sectionTextColor" id="sectionTextColor" ng-maxlength="100" class="form-control " countdown="" popover="The color of text within a verification section. Default is @text-color." placeholder="@text-color" data-original-title="" title="" aria-invalid="false">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="sectionTextColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="buttonBackgroundColor" class="control-label">Button Background Color <small class="text-muted">@verify-button-background</small></label>
                                        <div class="counter-container">
                                            <input type="text" name="buttonBackgroundColor" id="buttonBackgroundColor" ng-maxlength="100" class="form-control " countdown="" popover="The background color of the buttons on a verification. Default is @brand-primary." placeholder="@brand-primary" data-original-title="" title="" aria-invalid="false">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="buttonBackgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="buttonTextColor" class="control-label">Button Text Color <small class="text-muted">@verify-button-text</small></label>
                                        <div class="counter-container">
                                            <input class="form-control jscolor" id="buttonTextColor" name="buttonTextColor" type="text" value="#ffffff">
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
                                            <input class="form-control jscolor" id="buttonTextColor" name="buttonTextColor" type="text" value="#ebebeb">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="backgroundColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="horizontalRuleColor" class="control-label">Horizontal Rule Color <small class="text-muted">@hr-color</small></label>
                                        <div class="counter-container">
                                            <input class="form-control jscolor" id="buttonTextColor" name="buttonTextColor" type="text" value="#cccccc">
                                            <span class="label pull-right label-info"><span class="counter">100</span><span class="sr-only"> characters remaining</span></span></div>
                                        <div field="horizontalRuleColor" messages="brandCtrl.pageData.validationMessages" class="ng-isolate-scope"> 
                                            <!-- ngRepeat: (validator, invalid) in form[field].$error --> 
                                            <!-- ngRepeat: message in form.$serverError[field].messages --> 
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="text-right"> 
                                
                                <!-- Single button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Restore Values <span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Reset Default Values</a></li>
                                        <li><a href="#">Restore Last Saved Values</a></li>
                                    </ul>
                                </div>
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

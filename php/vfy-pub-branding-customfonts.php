<?php 
$section = 'branding';
$page_title = 'custom-fonts';
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
.panel-heading {
	position: relative
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
                                    <h2 class="h3">Custom Fonts</h2>
                                </div>
                            </div>
                            <div id="sortable">
                                <div class="panel panel-default template-add-data">
                                    <div class="panel-heading">
                                        <p class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse-data1"> Font Face 1 </a></p>
                                        <span class='pull-right'><i class='fa fa-close clickable'></i></span> </div>
                                    <div id="collapse-data1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="font_family"> Font Family Name</label>
                                                        <input class="form-control" id="font_family" name="font_family" type="text" required="required">
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="font_weight"> Font Weight </label>
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
                                                <div class="col-sm-6">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="font_style"> Font Style </label>
                                                        <select ng-model="fontFace.fontStyle" name="fontFaces[0].fontStyle" id="font_style" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontStyles" class="form-control ng-pristine ng-valid ng-not-empty ng-touched" aria-invalid="false">
                                                            <option label="normal" value="string:NORMAL" selected="selected">normal</option>
                                                            <option label="italic" value="string:ITALIC">italic</option>
                                                            <option label="oblique" value="string:OBLIQUE">oblique</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="font_stretch"> Font Stretch</label>
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
                            <button class="btn btn-xs btn-default btn-add-data pull-right"> <i class="fa fa-plus"></i> Section</button>
                            <div class="clearfix"></div>
                            <div class="text-right" style=" margin-top:30px"> <a href="#" class="btn btn-default">Cancel</a>
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

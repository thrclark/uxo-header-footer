<?php 
$section = 'branding';
$page_title = 'header-footer';
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
                                    <h2 class="h3">Custom Header &amp; Footer</h2>
                                </div>
                            </div>
                            <div class="form-group" id="">
                                <label class="control-label" for="custom_header"> Custom Header <span class="small" style="font-weight:normal">(html)</span></label>
                                <span class="help-block small"> Add custom html to create a page header on all views of the verification application.</span>
                                <textarea rows="8" class="form-control" aria-invalid="false" id="custom_header"></textarea>
                            </div>
                            <div class="form-group" id="">
                                <label class="control-label" for="custom_header"> Custom Footer <span class="small" style="font-weight:normal">(html)</span></label>
                                <span class="help-block small"> Add custom html to create a page footer on all views of the verification application.</span>
                                <textarea rows="8" class="form-control" aria-invalid="false" id="custom_header"></textarea>
                            </div>
                            <div class="form-group" id="">
                                <label class="control-label" for="custom_header"> Custom Header/Footer CSS</label>
                                <span class="help-block small"> Add css styling to the custom header and footer sections.</span>
                                <textarea rows="8" class="form-control" aria-invalid="false" id="custom_header"></textarea>
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

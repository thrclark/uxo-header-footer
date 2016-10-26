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

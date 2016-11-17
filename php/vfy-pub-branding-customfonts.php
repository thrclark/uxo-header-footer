<?php
$section = 'branding';
$page_title = 'custom-fonts';
?>
<!DOCTYPE html>
<html lang=en-us>

<head>
	<?php include ('includes/head-meta.php') ?>
	<?php include ('includes/styles-publishing.php') ?>


	<style type="text/css">
		#myTable tbody tr td {
			border: none;
			padding-left: 0px;
			padding-top: 0px;
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
										<h2 class="h3">Fonts</h2>
									</div>
								</div>
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
										<label class="control-label" for="font_family"> Weight</label><span class="help-block small">Specify the weight of this custom font.</span>
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
										<label class="control-label" for="font_family"> Style</label><span class="help-block small">Specify the style of this custom font.</span>
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
										<label class="control-label" for="font_family"> Stretch</label><span class="help-block small">Specify the stretch of this custom font..</span>
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
										<div style="    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;"> Font URLs</div>
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
															<td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL">
															</td>
															<td class="col-sm-4">
																<select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">

																	<option selected>Select Type</option>
																	<option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
																	<option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
																	<option label="SVG" value="string:SVG">SVG</option>
																	<option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
																	<option label="WOFF" value="string:WOFF">WOFF</option>
																	<option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
																</select>
															</td>
															<td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a>
															</td>
														</tr>
														<tr>
															<td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a>
															</td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>








									<div class="form-group custom-headerfont">
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
									</div>




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
										<div style="    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;"> Font URLs</div>
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
															<td class="col-sm-8"><input type="text" class="form-control" placeholder="Enter URL">
															</td>
															<td class="col-sm-4">
																<select ng-model="source.format" name="fontFaces[0].fontSources[0].format" id="fontFaces[0].fontSources[0].format" ng-options="format.value as format.displayValue for format in ::brandCtrl.pageData.fontFormats" class="form-control ng-pristine ng-valid ng-not-empty ng-valid-required ng-touched" required aria-invalid="false">

																	<option selected>Select Type</option>
																	<option label="Embedded OpenType" value="string:EMBEDDED_OPEN_TYPE">Embedded OpenType</option>
																	<option label="OpenType" value="string:OPEN_TYPE">OpenType</option>
																	<option label="SVG" value="string:SVG">SVG</option>
																	<option label="TrueType" value="string:TRUE_TYPE">TrueType</option>
																	<option label="WOFF" value="string:WOFF">WOFF</option>
																	<option label="WOFF 2" value="string:WOFF2">WOFF 2</option>
																</select>
															</td>
															<td><a href="#" class="btn btn-xs btn-default disabled" style="margin-top:5px">Delete</a>
															</td>
														</tr>
														<tr>
															<td><a href="#myTable" class="addstuff btn btn-xs btn-default pull-left"><i class="fa fa-plus" aria-hidden="true"></i> URL</a>
															</td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>








									<div class="form-group custom-bodyfont">
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
									</div>




								</fieldset>




								<div class="clearfix"></div>
								<div class="text-right" style=" margin-top:30px"> <a href="#" class="btn btn-default">Revert</a>
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
</body>

</html>
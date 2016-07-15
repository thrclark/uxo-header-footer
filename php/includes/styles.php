<!-- Base CSS -->
<link href="../css/styles.css"  type="text/css" rel="stylesheet">
<link href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"  type="text/css" rel="stylesheet">
<style type="text/css">
.form-control.disabled[type="text"] {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none;
	cursor: default;
}
legend {
	font-size: 16px;
}
.form-horizontal .form-group-sm .control-label {
	padding-top: 1px;
}
.form-group-sm .form-control-static {
	height: 15px;
	min-height: 15px;
	padding: 0px 10px;
}
hr {
	border-top: 1px solid #ccc;
}
.form-section-control {
	position: relative;
}
.form-section-control:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	right: 0px;
}
.btn span.glyphicon {
	opacity: 0;
	padding: 18px;
}
.btn.active span.glyphicon {
	opacity: 1;
}
input[type=radio].with-font, input[type=checkbox].with-font {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}
input[type=radio].with-font ~ label:before, input[type=checkbox].with-font ~ label:before {
	font-family: 'fontello';
	display: inline-block;
	content: '\eba1';
	letter-spacing: 10px;
	font-size: 1.2em;
	color: #cccccc;
	width: 1.4em;
	position: absolute;
	left: 0px;
	top: -3px;
}
input[type=radio].with-font:checked ~ label:before, input[type=checkbox].with-font:checked ~ label:before {
	content: '\eb9f';
	font-size: 1.2em;
	color: #2879B8;
	letter-spacing: 5px;
}
input[type=checkbox].with-font ~ label:before {
	content: '\eb9e';
}
input[type=checkbox].with-font:checked ~ label:before {
	content: '\eb9d';
	color: #555555;
}
input[type=radio].with-font:focus ~ label:before, input[type=checkbox].with-font:focus ~ label:before, input[type=radio].with-font:focus ~ label, input[type=checkbox].with-font:focus ~ label {
	color: #2879B8;
}
.submission .radio {
	position: relative;
}
.submission .radio .lead {
	font-style: normal;
	padding-left: 35px;
}
</style>

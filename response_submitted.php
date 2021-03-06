<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

// Defined variables:
// $in_userIGN

?>

<head>
	<title>MRT Server Member Application</title>

	<!-- Javascript -->
	<script language="javascript" type="text/javascript"
		src="js/display.js"></script>
	<script language="javascript" type="text/javascript">
		onResize = function() {
			fixContentHeight();
		}
		onLoad = function() {
			fixContentHeight();
		}
	</script>
	<!-- -->

	<!-- CSS -->
	<link rel="stylesheet" type="text/css"
		href="style.css"/>
	<!--[if !IE 7]>
		<style type="text/css">
			#container {
				display: table;
				height: 100%;
			}
		</style>
	<![endif]-->
	<!-- -->
</head>

<body onresize="onResize()" onload="onLoad()">
	<div id="container">

		<div id="header"><div id="headerContents">
		</div></div>

		<div id="contents">
			Thank you, <?php echo $in_userIGN; ?>, for submitting an application for membership.  We will review your application and let you know if it is approved.
		</div>

		<div id="footer">
			Copyright MRT Server 2012
		</div>

	</div>
</body>

</html>

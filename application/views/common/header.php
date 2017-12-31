<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
		var script = document.createElement("script");
		script.src="https://www.googletagmanager.com/gtag/js?id=UA-110331342-2";
		script.setAttribute("async", "");
		document.head.appendChild(script);
		
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-110331342-2');
	}
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="Create & share your 2018 resolution" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/common/default.css?v=2"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/" . $page_name . ".css?v=4"); ?>" />	
	<style>
		@font-face {
			font-family: moon-regular;
			src: url(<?php echo base_url("assets/fonts/moon-regular.otf"); ?>);
		}

		@font-face {
			font-family: moon-bold;
			src: url(<?php echo base_url("assets/fonts/moon-bold.otf"); ?>);
		}

		@font-face {
			font-family: century-gothic;
			src: url(<?php echo base_url("assets/fonts/century.TTF"); ?>);
		}

		@font-face {
			font-family: pier-sans;
			src: url(<?php echo base_url("assets/fonts/pier.otf"); ?>);
		}

		@font-face {
			font-family: textmeone;
			src: url(<?php echo base_url("assets/fonts/textmeone.ttf"); ?>);
		}
	</style>
</head>
<body>
<script>
var isMobile = false, isTablet = false;
var vw = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var vh = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
if (vw < 1025) {
	isMobile = true;
	if (vw >= 768) {
		isTablet = true;
	}
}
</script>
<div class="container">
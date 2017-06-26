<!DOCTYPE html>
<html lang="en">
<?php

//error_reporting(0);
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET['name'],$_GET['file']);


?>

<style>
.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="en" class="perfect-scrollbar-on">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async="" src="http://cdn.api.twitter.com/1/urls/count.json?url=http%3A%2F%2Fdemos.creative-tim.com%2Flight-bootstrap-dashboard-pro%2Fexamples%2Fdashboard.html&amp;callback=jQuery1113037401200316412275_1495621377923&amp;_=1495621377924"></script>
	
	<link rel="icon" type="image/png" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Light Bootstrap Dashboard PRO by Creative Tim</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro">

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard">

    <meta name="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <!-- Twitter Card data -->

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$29">
    <meta name="twitter:label2" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html">
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta property="og:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta property="og:site_name" content="Creative Tim">

    <!-- Bootstrap core CSS     -->
    <link href="boot/index_files/bootstrap.min.css" rel="stylesheet">

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="boot/index_files/light-bootstrap-dashboard.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="boot/index_files/demo.css" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link href="boot/index_files/font-awesome.min.css" rel="stylesheet">
    <link href="boot/index_files/css" rel="stylesheet" type="text/css">
    <link href="boot/index_files/pe-icon-7-stroke.css" rel="stylesheet">

<script type="text/javascript" charset="UTF-8" src="boot/index_files/common.js"></script><script type="text/javascript" charset="UTF-8" src="boot/index_files/util.js"></script><script type="text/javascript" charset="UTF-8" src="boot/index_files/stats.js"></script></head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="boot/index_files/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://www.creative-tim.com/" class="logo-text">
                Creative Tim
            </a>
        </div>
		<div class="logo logo-mini">
			<a href="http://www.creative-tim.com/" class="logo-text">
				Ct
			</a>
		</div>

    	<? include('menu_dash.php'); ?>
    	
    <div class="sidebar-background" style="background-image: url(../assets/img/full-screen-image-3.jpg) "></div></div>

    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="29ebf963-5c20-daef-c230-af7a502c7642">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-minimize">
					<button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Dashboard PRO</a>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="Search...">
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/charts.html">
								<i class="fa fa-line-chart"></i>
								<p>Stats</p>
							</a>
						</li>

						<li class="dropdown">
							<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-gavel"></i>
								<p class="hidden-md hidden-lg">
									Actions
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Create New Post</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Manage Something</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Do Nothing</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Submit to live</a></li>
								<li class="divider"></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Another Action</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">5</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Notification 1</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Notification 2</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Notification 3</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Notification 4</a></li>
								<li><a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">Another notification</a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-with-icons">
							<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-list"></i>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">
										<i class="pe-7s-mail"></i> Messages
									</a>
								</li>
								<li>
									<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">
										<i class="pe-7s-help1"></i> Help Center
									</a>
								</li>
								<li>
									<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">
										<i class="pe-7s-tools"></i> Settings
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#">
										<i class="pe-7s-lock"></i> Lock Screen
									</a>
								</li>
								<li>
									<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#" class="text-danger">
										<i class="pe-7s-close-circle"></i>
										Log out
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
<div class="content">
            <div class="container-fluid">
                <div class="row">
 <?php include ("".$MODPATHFILE."");?>
 				</div>
 			</div>
</div>


       <? include('footer.php'); ?>

    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 700px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 288px;"></div></div></div>
</div>
<!--
<div class="fixed-plugin">
    <div class="dropdown show-dropdown open">
        <a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Configuration</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Image</p>
                    <div class="switch switch-sidebar-image has-switch" data-on-label="ON" data-off-label="OFF">
                        <div class="switch-animate switch-on"><input type="checkbox" checked=""><span class="switch-left">ON</span><label>&nbsp;</label><span class="switch-right">OFF</span></div>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
			<li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <div class="switch  switch-sidebar-mini has-switch" data-on-label="ON" data-off-label="OFF">
                        <div class="switch-animate switch-off"><input type="checkbox"><span class="switch-left">ON</span><label>&nbsp;</label><span class="switch-right">OFF</span></div>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
			<li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <div class="switch  switch-navbar-fixed has-switch" data-on-label="ON" data-off-label="OFF">
                        <div class="switch-animate switch-off"><input type="checkbox"><span class="switch-left">ON</span><label>&nbsp;</label><span class="switch-right">OFF</span></div>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="boot/index_files/full-screen-image-1.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="boot/index_files/full-screen-image-2.jpg">
                </a>
            </li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="boot/index_files/full-screen-image-3.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="boot/index_files/full-screen-image-4.jpg">
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                </div>
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-info btn-block btn-fill">Buy Now!</a>
                </div>
            </li>

            <li class="header-title">Thank you for 452 shares!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> � 182</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> � 270</button>
            </li>

        </ul>
    </div>
</div>
-->

    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script async="" src="boot/index_files/analytics.js"></script><script src="boot/index_files/jquery.min.js" type="text/javascript"></script>
    <script src="boot/index_files/jquery-ui.min.js" type="text/javascript"></script>
	<script src="boot/index_files/bootstrap.min.js" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="boot/index_files/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="boot/index_files/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="boot/index_files/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="boot/index_files/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="boot/index_files/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!--  Charts Plugin -->
	<script src="boot/index_files/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="boot/index_files/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="boot/index_files/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="boot/index_files/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="boot/index_files/js"></script>

	<!-- Wizard Plugin    -->
    <script src="boot/index_files/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="boot/index_files/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="boot/index_files/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="boot/index_files/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="boot/index_files/light-bootstrap-dashboard.js"></script>

	<!--   Sharrre Library    -->
    <script src="boot/index_files/jquery.sharrre.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="boot/index_files/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();
        	demo.initVectorMap();

        	$.notify({
            	icon: 'pe-7s-bell',
            	message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });

    	});
	</script>

	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');

    </script>

	<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
	</script>

<div class="jvectormap-tip"></div>
<div class="sweet-container">
	<div class="sweet-overlay" tabindex="-1"></div>
	<div class="sweet-alert" style="display: none" tabindex="-1">
		<div class="icon error"><span class="x-mark"><span class="line left"></span><span class="line right"></span></span></div>
		<div class="icon warning"> <span class="body"></span> <span class="dot"></span> </div> 
		<div class="icon info"></div> 
		<div class="icon success"> <span class="line tip"></span> <span class="line long"></span> <div class="placeholder"></div> <div class="fix"></div> </div> 
		<img class="sweet-image"> <h2>Title</h2><div class="sweet-content">Text</div><hr class="sweet-spacer"><button class="sweet-confirm">OK</button><button class="sweet-cancel">Cancel</button></div>
		</div>
		
		
		</body></html>
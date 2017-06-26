<!DOCTYPE html>
<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->
<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dana tours asia</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Canonical SEO -->
   
    <!-- Bootstrap core CSS     -->
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="files/css-/material-dashboard.css?v=<?=time()?>" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="css/main2.css?v=<?=time()?>" rel="stylesheet"> -->
    <!--     Fonts and icons     -->
    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
   
   
<?php

//error_reporting(0);
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET['name'],$_GET['file']);


?>

<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/jquery/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


</head>



<body ng-app="myApp" ng-controller="main">
    <div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="" class="simple-text">
                Dana tours 
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    DN
                </a>
            </div>
            <? include('menubar.php'); ?>
            
        <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)"></div></div>
        <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="43c1b00b-f1c7-b898-3db0-1519c90acad1">
           <? include('tabbar.php'); ?>
           <style>
               .breadcrumb a {
    color: #000000;
    padding: 0.5rem;
    -webkit-transition: all 1s;
    border-radius: 0.5rem;
    text-decoration: none;
}
.sidebar .nav li > a, .off-canvas-sidebar .nav li > a {
    
       padding: 8px;
    margin: 0 15px;
}
.breadcrumb {
  
    margin-bottom: 0;
}
/*.dropdown-menu:after, .dropdown-menu-container:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid rgba(0,0,0,0);
    border-right: 11px solid rgba(0,0,0,0);
    content: "";
    display: inline-block;
    position: absolute;
    right: 30px;
    top: -10px;
}*/
#login-down  i{
        color: #999;
    margin-right: 10px;
}
.welcome h1 {
    /* padding-left: 100px; */
    /* margin-top: 75px !important; */
    font-size: 35px;
    /* line-height: 250px; */
    /*font-family: " cursive ", Times, serif;*/
    /*color: #00bcd4;*/
    color: #4caf50;
}
.welcome h4 {
    margin-top: 60px;
    /*font-family: Georgia, serif;*/
}
#text-p {
    line-height: 60px;
}
.tagbb {
    color: #d3467c;
}
.welcome{
    text-align: center;
    
}
.img-wellcome {
    text-align: center;
    margin-bottom: 40px;
}
           </style>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       <?php include ("".$MODPATHFILE."");?>
                    </div>
                </div>
            </div>
            <? include('footer.php');?>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 638px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 245px;"></div></div></div>
    </div>


</body>

</html>


<!-- Forms Validations Plugin -->
<script src="js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="js/moment.min.js"></script>
<!--  Charts Plugin -->
<!-- <script src="js/chartist.min.js"></script> -->
<!--  Plugin for the Wizard -->
<script src="files/js-/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<!-- <script src="files/js-/bootstrap-notify.js"></script> -->
<!--   Sharrre Library    -->
<script src="js/jquery/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="files/js-/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="files/js-/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="files/js-/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="files/js-/js"></script> -->
<!-- Select Plugin -->
<script src="files/js-/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="files/js-/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="files/js-/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="files/js-/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="files/js-/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="files/js-/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/jquery/demo.js"></script>

<div class="jvectormap-tip"></div>


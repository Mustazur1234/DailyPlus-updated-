<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DAILY PLUS</title>
  <!-- favicon -->
  <link rel="shortcut icon" type="image/jpg" href="dist/img/logo.png"/>

  <style>
    @import url('./assets/css/all.min.css');
    @import url('./assets/css/animate.css');
    
    @import url('./assets/css/style.css');
    @import url('./assets/css/master.css');
  </style>
  
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<!-- overlay for card card viw sidebar  -->
<div  id="overlayID" class="body_overlay"></div>
<!-- overlay for left side navbar  -->
<div  id="overlayID_navbar" class="body_overlay"></div>
<!-- add necessary markup as tempalte -->

<?php 
  require_once('_markup.php');
?>
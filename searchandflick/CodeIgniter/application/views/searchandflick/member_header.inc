<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width= device-width, initial-scale=1, maximum-scale=1">
<link href="/searchandflick/CodeIgniter/join_files/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/searchandflick/CodeIgniter/join_files/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="/searchandflick/CodeIgniter/join_files/css/addons.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<title>Working with Bootstrap</title>
</head>
<body>
    <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container-fluid">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </a>
    <a class="brand" href="#" name="top">Search and Flick</a>
    <div class="nav-collapse collapse">
    <ul class="nav">
    <li><a href="#"><i class="icon-home"></i> Home</a></li>
    <li class="divider-vertical"></li>
    </ul>

    </div>
    <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
    </div>
    <!--/.navbar -->

    <script>
    $(document).ready(function()
    {
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
    e.stopPropagation();
    });
    });
    </script>
<div class="container-fluid">
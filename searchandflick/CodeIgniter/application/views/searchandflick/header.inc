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
					<ul class="nav pull-right">
						<li><a href="/signup">Sign Up</a></li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form method="post" action="login" accept-charset="UTF-8">
								<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
								<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
								<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
								<label class="string optional" for="user_remember_me"> Remember me</label>
								<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
							</form>
						</div>
						</li>
					</ul>
				</div> <!-- end nav collapse -->
		</div> <!-- end fluid container -->
	</div> <!-- end navbar-innder -->
</div> <!-- end navbar -->
<div class="container-fluid">
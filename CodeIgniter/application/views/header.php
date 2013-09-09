<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>The Bemused Blogger</title>
    <link rel="stylesheet" type="text/css" href="/CodeIgniter/join_files/main.css">
</head>
<body>
<div id="wrapper">
<h1 class="green shadow center">2.3 Assignment: MVC Read Data</h1>
<p class="title shadow center">Welcome to the bemused blogger</p>

<p><h3 class="welcome center"><b><i>The Bemused Blogger's List of Users click on details to view more informarion...</i></b></h3></p>
<div id = "content">
<?php
if(!empty($_GET["action"])) {

	if($_GET["action"] == "home") {
	
		$result = $users->getAll();
		$view->getView("views/body.php",$result);	
		
	} if($_GET["action"] == "details") {
		
		$result = $users->getId($_GET["id"]);
		$view->getView("views/details.php", $result);
	}
} else {
	$result = $users->getAll();
	$view->getView("views/body.php", $result);
}
?>

<!DOCTYPE html>
<html lang="en-US" ng-app="Site">
<head>
	<meta charset="UTF-8">
	<title>SearchandFlick</title>
	<link rel="stylesheet" href="/join_files/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/join_files/css/style2.css" /> 
</head>
<body>

<!-- Navbar -->
  <div class="navbar navbar-fixed-bottom">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="/welcome">Welcome to SearchandFlick</a>
        
     	 <header>
          	<form><input type="search" placeholder="Search images" /></form><h6><a href="/logout">Log Out</a></h6>
          		<h7 class="privacy"><span></span>&copy;&nbsp;2013&nbsp;| <a href="/privacy">Privacy Policy</a>&nbsp;
      				</h7>
         </header>
      </div>
    </div>
  </div>
  
  
	<header>
		<h4>Welcome to SearchandFlick!</h4><br>
		<h5>What are you waiting for get Flicking!</h5>
	</header> 
	<ul class="results"></ul>
	<footer>
		
	</footer>

	<!-- _underscore templates -->
	<script type="text/template" id="searchresults">
		<li><img class="<%= tick ? 'tick' : '' %>" src="http://farm<%= farm %>.static.flickr.com/<%= server %>/<%= id %>_<%= secret %>_t.jpg" /><span class="action"></span></li>
	</script>

	<script type="text/template" id="preview">
		<img class="<%= tick ? 'tick' : '' %>" src="http://farm<%= farm %>.static.flickr.com/<%= server %>/<%= id %>_<%= secret %>_z.jpg" />
	</script> 
	<article></article>
	
	<script src="/join_files/js/jquery.min.js"></script>
	<script src="/join_files/js/underscore.js"></script>
	<script src="/join_files/js/backbone.js"></script>
	<script src="/join_files/js/backbone-localstorage.js"></script>
	<script src="/join_files/js/script.js"></script>
	

</body>

</html>
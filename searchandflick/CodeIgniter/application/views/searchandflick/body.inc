<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    			<div class="span12" id="s12top">
					<div class="span5 offset4">
						<img id="member_sflogo" class="effect8" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" style="margin-top:1em; margin-left:2.2em;" />
						<h1>Search and Flick</h1>
					</div>
					<div class="span4 offset3">
					<form method="post" id="search_form" name="search_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-wrapper cf pull-left search_form">
						<input type="text" name="search" id="search" required/>
						<button type="submit" name="submit">Search</button>
						<a href="body.inc" data-reveal-id="myModal">Click to see Photos</a>
					</form>
					<div id="myModal" class="reveal-modal">
						 <script type="text/template" id="searchresults">
		<li><img class="<%= tick ? 'tick' : '' %>" src="http://farm<%= farm %>.static.flickr.com/<%= server %>/<%= id %>_<%= secret %>_t.jpg" /><span class="action"></span></li>
	</script>

	<script type="text/template" id="preview">
		<img class="<%= tick ? 'tick' : '' %>" src="http://farm<%= farm %>.static.flickr.com/<%= server %>/<%= id %>_<%= secret %>_z.jpg" />
	</script>
	<article></article>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="js/underscore.js"></script>
	<script src="js/backbone.js"></script>
	<script src="js/backbone-localstorage.js"></script>
	<script src="js/script.js"></script>
								<a class="close-reveal-modal">&#215;</a>
					</div>
					<p><span id="error_message"></span></p>
							<div class="row-fluid" id="row-fluid3">
								<div class="span12" id="modalblock">


								</div> <!-- end span12 modal-block <div> -->
							</div> <!-- end row-fluid3 -->
				</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
<div class="row-fluid">
	<header class="span12 hero-unit effect8" style="background:#fff">
	<div class="row-fluid">
		<p class="shadow grey2" style="text-align:center; letter-spacing:-0.01em; line-height:1">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    	<div class="span12" style="margin-left:-0.2em; background:#fff;">
			<div class="span5 offset4">
				<img class="effect8" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" style="margin-top:1em; margin-left:2.2em;" />
				<h1>Search and Flick</h1>
			</div>
			<div class="span4 offset3">
				<form style="padding-left:1em; position:relative; top:-7em; left:-3em;" method="post" class="form-wrapper cf pull-left">
					<input type="text" name="search" placeholder="Search here..." required>
        			<button type="submit">Search</button>
				</form>
			</div>
			<div class="span3"></div>
		</div>
	</div>
	<div class="row-fluid"><div class="span12"></div></div>
	<div class="row-fluid">
		<div class="span3">
		<h3 class="ml shadow grey">Enter a search term</h3>
			<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/1.png" />
				<h3 class="ml shadow grey">Enjoy Your Photos</h3>
				<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/2.png" />
		</div>
		<div class="span9" style="padding-right:1em">
			<?php
			foreach($photos['photos'] as $photo) {
			$farmId = $photo->farm;
			$serverId = $photo->server;
			$id = $photo->id;
			$secret = $photo->secret;
			$title = $photo->title;
			$imagePathThumbnail = 'http://farm'.$farmId.'.static.flickr.com/'.$serverId.'/'.$id.'_'.$secret.'_s.jpg';
			$imagePathLarge = 'http://farm'.$farmId.'.static.flickr.com/'.$serverId.'/'.$id.'_'.$secret.'_b.jpg';
			$image = '<ul><li class="thumbnail pull-right ml">';
			$image.= '<a href="'.$imagePathLarge.'" target="_blank">';
			$image.= '<img src="'.$imagePathThumbnail.'" alt="'.$title.'">';
			$image.= '</a>';
			$image.= '</li></ul>';
			echo $image;
			} // end else
			?>
		</div>
	</div>
</div>
</header>
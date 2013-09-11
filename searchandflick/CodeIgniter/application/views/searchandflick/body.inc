<div class="row-fluid">
<header class="span12 hero-unit effect8">
	<div class="row-fluid">
    	<div class="span12 effect8" style="height:auto; overflow:hidden; padding:1em">
			<img class="effect8 pull-right marginr" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick"/>
			<h1>Search and Flick</h1>
			<div class="pull-left marginl">
			<p>An educational application for FullSail University made by Greg Mitchell.</p>
            <p>Flickr Api to pull images from flickr.com</p>
			</div>
		</div>
	</div>
	<div class="row-fluid"><div class="span12"></div></div>
	<div class="row-fluid">
		<div class="span3 test2">
		<h3 class="ml shadow grey">Enter a search term</h3>
			<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/1.png" />
				<form style="padding-left:1em;" method="post">
					<input name="search" type="text" placeholder="Search Images" maxlength="4" size="4" /><br />
					<input type="submit" value="Display Photos" />
				</form>
				<h3 class="ml shadow grey">Enjoy Your Photos</h3>
				<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/2.png" />
		</div>
		<div class="span9 test2" style="padding-right:1em">
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
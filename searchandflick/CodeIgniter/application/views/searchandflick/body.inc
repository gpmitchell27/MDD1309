<div class="row-fluid">
	<header class="span12 hero-unit effect8" style="background:#fff; height:100%; overflow:hidden;">
	<div class="row-fluid">
		<p class="shadow grey2" style="text-align:center; letter-spacing:-0.01em; line-height:1">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    	<div class="span12" style="margin:0 0 0 -0.2em; background:#fff; height:auto; overflow:hidden">
			<div class="span5 offset4">
				<img class="effect8" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" style="margin-top:1em; margin-left:2.2em;" />
				<h1>Search and Flick</h1>
			</div>
			<div class="span4 offset3">

				<form id="search_form" method="post" class="form-wrapper cf pull-left">
					<input type="text" name="search" placeholder="Search here..." />
        			<button type="submit" name="submit" value="submit">Search</button>
				</form>
				<?php
					$_POST['search'] = null;
					if(!empty($_POST['submit'])) {

						echo 'clicked';
					}  else {
						echo 'notyet';
					}
				?>
			<div class="row-fluid">
				<div class="span12">
					<?php
/*					if(isset($_POST['search'])) {
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
						} //end for
					} // end if
					*/?>
				</div>
			</div>
	</div>
</header>
</div>
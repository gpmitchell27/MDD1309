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
						<form method="post" class="form-wrapper cf pull-left search_form">
							<input type="text" name="search" placeholder="Search here..." />
        					<button type="submit" id="button" name="submit">Search</button>
						</form>
					</div> <!-- end span4 offset 3 -->
							<div class="row-fluid" id="row-fluid3">
								<div class="span12" id="modalblock">
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
								</div> <!-- end span12 modal-block <div> -->
							</div> <!-- end row-fluid3 -->
				</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
<header class="span12 hero-unit effect8">
	<div class="row-fluid">
    	<div class="span3">
			<h1>Search and Flick</h1>
			<img class="effect8 pull-left" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick"/>
			<p>An educational application for FullSail University made by Greg Mitchell.</p>
            <p>Flickr Api to pull images from flickr.com</p>
		</div>
		<div class="span4">
		<h3 class="ml shadow grey ml">Enter a search term</h3>
			<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/1.png" />
				<form class="pull-right" method="post">
				<input name="search"><br />
				<input type="submit" value="Display Photos" />
				</form>
		</div>
		<div class="span5">
			<h3 class="ml shadow grey ml">Enjoy Your Photos</h3>
			<img class="pull-left" src="/searchandflick/CodeIgniter/join_files/images/2.png" />
			<?php
	$api_key = "b092e87f8bda224617a98f3c593f918f";
	$tag = $_POST['search'];
	$perPage = 20;
	$url = 'http://api.flickr.com/services/rest/?method=flickr.photos.search';
	$url.= '&api_key='.$api_key;
	$url.= '&tags='.$tag;
	$url.= '&per_page='.$perPage;
	$url.= '&format=json';
	$url.= '&nojsoncallback=1';
	$response = json_decode(file_get_contents($url));
		if($response->stat == 'ok') {
    		$photos = $response->photos->photo;
    			if(count($photos) > 0) {
        			echo '<div class="thumbnails"><ul>';
		foreach($photos as $photo) {
			$farmId = $photo->farm;
			$serverId = $photo->server;
			$id = $photo->id;
			$secret = $photo->secret;
			$title = $photo->title;
			$imagePathThumbnail = 'http://farm'.$farmId.'.static.flickr.com/'.$serverId.'/'.$id.'_'.$secret.'_s.jpg';
			$imagePathLarge = 'http://farm'.$farmId.'.static.flickr.com/'.$serverId.'/'.$id.'_'.$secret.'_b.jpg';
			$image = '<li class="thumbnail pull-left ml">';
			$image.= '<a href="'.$imagePathLarge.'" target="_blank">';
			$image.= '<img src="'.$imagePathThumbnail.'" alt="'.$title.'">';
			$image.= '</a>';
			$image.= '</li>';
			echo $image;
		} // end foreach
    		echo '</ul></div>';
    	} else {
        	echo 'No Results';
		}
	}
			else
			{
    echo '<strong>Error : </strong>'.$response->message;
} // end else
?>
	</div>
 </header>
<?php
require_once 'phpFlickr/phpFlickr.php';

class FlickrPhoto_model extends CI_Model {
	public function getPhotos() {
	$api_key = "b092e87f8bda224617a98f3c593f918f";
	$tag = $_POST['search'];
	$perPage = 25;
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
			$image = '<li class="thumbnail pull-left">';
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
	 } // end get photos
} // end class
		echo '<h3>Enter a username to search for</h3>';
		echo '<form method="post">';
		echo '<input name="search"><br>';
		echo '<input type="submit" value="Display Photos">';
		echo '</form>';
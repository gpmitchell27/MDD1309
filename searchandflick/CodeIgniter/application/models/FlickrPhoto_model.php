<?php
require_once 'phpFlickr/phpFlickr.php';

class FlickrPhoto_model extends CI_Model {
	public function getPhotos() {
	$api_key = "b092e87f8bda224617a98f3c593f918f";
	$tag = $_POST['search'];
	$perPage = 54;
	$url = 'http://api.flickr.com/services/rest/?method=flickr.photos.search';
	$url.= '&api_key='.$api_key;
	$url.= '&tags='.$tag;
	$url.= '&per_page='.$perPage;
	$url.= '&format=json';
	$url.= '&nojsoncallback=1';
	$response = json_decode(file_get_contents($url));
		if($response->stat == 'ok') {
    		$photos = $response->photos->photo;
		}
		return $photos;
	} // end get photos
} // end class
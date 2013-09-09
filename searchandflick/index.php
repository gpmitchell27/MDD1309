<?php

require_once 'FlickrModel.php';
require_once 'FlickrView.php';

$fmodel = new FlickrModel() ;
$fview = new FlickrView();

$fview->show('header');
$fview->show('main');
$fview->show('footer');

?>
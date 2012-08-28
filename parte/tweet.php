<?php
$consumerKey    = 'wbNq65NyhCZeDov33k4rA';
$consumerSecret = 'pCBj9KT4r5i1nD1MGQrsJesHyP3X1XuU7Y4K767B04';
$oAuthToken     = '786629029-NNHX3NhhhiGDgHLX2dmmKjgo0mjCgpqE9HLQirKp'; 
$oAuthSecret    = 'dxSxsvEVEQO7ycDMEGJgOqjGXNRLX7hBrCLFAn5lqU';
require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
 ?>

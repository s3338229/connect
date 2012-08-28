<?php
session_start();
include 'tweet.php';
for($k=0;$k<count($_SESSION['winename']);$k++)
{
$message .=$_SESSION['winename'][$k];
$statusMessage = 'Movie added: '.$title. ' -> ' . $message;
$tweet->post('statuses/update', array('status' => $statusMessage));
}

?>

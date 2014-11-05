<?php
include("../include/HttpClient.class.php");
header("Content-type: application/json; charset=utf-8"); 
$songlistid = $_REQUEST['songlistid'];
$pageContents = HttpClient::quickGet('http://112.124.44.10:8080/song1/api/cherrytime/v1/songs?songlistid='.$songlistid);
die($pageContents);
?>
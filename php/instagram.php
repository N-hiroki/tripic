<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $access_token = 'アクセストークン';
    $distance=500;
    $lat=$_GET["lat"];
    $lng=$_GET["lng"]; 

    echo file_get_contents("https://api.instagram.com/v1/media/search/?lat=$lat&lng=$lng&access_token=$access_token&distance=$distance");
    //終了
    exit;
}
?>
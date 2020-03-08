<?php
        
$botToken="1037700335:AAGXEuA6xpibrRN4pO0ZACi9wl1Nvu7NJ-Q";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");
$updateArray = json_decode($update,TRUE);

$chat_id = $updateArray["result"][0]['message']['chat']['id'];
$username = $updateArray["result"][0]['message']['chat']['username'];
$lname = $updateArray["result"][0]['message']['chat']['first_name'];
$fname = $updateArray["result"][0]['message']['chat']['last_name'];
$text = ["result"][0]['message']['chat']['text'];
$message = 'NO PIC HERE! ';
$fileAPI = "https://api.telegram.org/file/bot" . $botToken;
$fileinfo = json_decode($fileinfo, TRUE);                          
$filePath = $fileinfo['result']['file_path'];
$url = $GLOBALS[website] . '/' . $filePath;
include "functions.php";
$user_mngr = new user_mngr();

if($fileAPI){
 $user_mngr->sendimage($fileinfo);   
    
}
elseif($text){
    $user_mngr->sendMessage($chat_id,$lname,$fname,$username);
}


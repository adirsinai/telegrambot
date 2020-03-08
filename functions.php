<?php
class user_mngr{
    
    function sendMessage($chat_id,$lname,$fname,$username){
        
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chat_id."&text=".urldecode($chat_id,$lname,$fname,$username);
        file_get_contents($url);
        var_dump($url);
        
    }
    
        function sendimage($fileinfo){
        
         $url = $GLOBALS[website] . '/getFile?file_id=' . $message["result"][0]['photo'][0]['file_id'];
         $fileinfo = file_get_contents($url);
        
    }
    

}

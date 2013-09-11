<?php


   $ids = $_POST["ids"];
   $message = $_POST["message"];   
    foreach($ids as $val) {
    sendMessage($message, $val);
}

    

function sendMessage($message, $id){
     echo $id;
    echo $message;
    echo "\n";
    
}
?>
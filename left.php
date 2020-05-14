<?php
$nick = $_POST['nick']; 
$left = fopen("chat.txt", "a");
if($left) {
    fwrite($left,"<b>{$nick}<i> left the chat.</i></b><br>");
}
    fclose($left);
?>

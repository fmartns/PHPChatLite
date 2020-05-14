<?php
$nick = $_POST['nick']; 
$left = fopen("chat.txt", "a");
if($left) {
    fwrite($left,"<b>{$nick}<i> left the chat.</i></b><br>");
}
    fclose($left);
?>
<meta http-equiv="refresh" content="0; url=index.htm">

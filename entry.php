<?php
    $nick = $_POST['nick'];
    if($nick == ""){
        echo "<script> location.href='index.htm'; </script>";
        exit;
    }
    $entry = fopen("chat.txt", "a");
    if($entry) {
        fwrite($entry,"<b>{$nick}<i> entrou no chat.</i></b><br>");
    }
    fclose($entry);
    header("Location: conversation.php",TRUE,307); 
?>

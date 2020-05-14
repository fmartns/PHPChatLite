<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.htm">
        <title>Chat | Left Code</title>
    </head>
    <body>
    <?php
    $nick = $_POST['nick']; 
    $left = fopen("chat.txt", "a");
    if($left) {
        fwrite($left,"<b>{$nick}<i> left the chat.</i></b><br>");
    }
        fclose($left);
    ?>
    </body>
</html>

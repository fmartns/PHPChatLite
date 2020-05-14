<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=chat.php">
        <title>Chat | Send Code</title>
    </head>
    <body>
    <?php
        $nick = $_POST['nick'];
        $action = $_POST['action'];
        if($nick == ""){
            echo "<script> location.href='index.htm'; </script>";
            exit;
        }
        $text = $_POST['text']; 
        $entry = fopen("chat.txt", "a");
        if($entry) {
            fwrite($entry,"<b>{$nick} <i>{$action}</i>:</b> {$text} <br>");
        }
            fclose($entry);
    ?>
    </body>
</html>
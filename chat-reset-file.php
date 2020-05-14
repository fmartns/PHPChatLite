<?php
    $file = "chat.txt";
    $bd = fopen($file, "w");
    fwrite($bd, "");
    fclose($bd);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Chat | Administration Area</title>
    <link rel="stylesheet" href="style.css">
    <script language="javascript">
        function reset(){
            alert("This chat has ben cleared!");
            window.close();
        }
    </script>
    </head>
    <body onLoad="javascript:reset()">
    <p>Close this windows.</p>
    </body>
</html>
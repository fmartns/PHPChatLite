<?php
    $file = "chat.txt";
    $bd = fopen($file, "w");
    fwrite($bd, "");
    fclose($bd);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <link rel="shortcut icon" type="image/png" href="addons/favicon.png">
    <meta charset="utf-8">
    <title>Chat | Limpar Chat</title>
    <link rel="stylesheet" href="addons/css/style.css">
    <script language="javascript">
        function reset(){
            alert("O chat foi limpo com sucesso!");
            window.close();
        }
    </script>
    </head>
    <body onLoad="javascript:reset()">
    <p>Feche essa janela..</p>
    </body>
</html>
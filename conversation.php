<?php
$nick = $_POST['nick'];
if ($nick == "") {
    echo "<script> location.href='index.htm'; </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Chat</title>
    <link rel="shortcut icon" type="image/png" href="addons/favicon.png">
    <link rel="stylesheet" href="addons/css/style.css">
</head>
<body class="background">
<div>
    <iframe src="chat.php" width="1515" height="550" name="chat" class="chatBox">Atualize seu navegador.</iframe><br>
</div>
<hr color="white">
<form action="send.php" method="post" target="chat" onsubmit="clearText()">
    <b><?php echo $nick ?></b>
    <input name="nick" type="hidden" value="<?php echo $nick ?>">
    <select class="custom-select-button" name="action">
        <option value="fala" selected>fala</option>
        <option value="grita">grita</option>
        <option value="beijou">beijou</option>
        <option value="canta">canta</option>
        <option value="pergunta">pergunta</option>
        <option value="aceita">aceita</option>
        <option value="recusa">recusa</option>
        <option value="sorri">sorri</option>
        <option value="alegra-se">alegra-se</option>
        <option value="briga">briga</option>
        <option value="saiu">saiu</option>
    </select> : <input id="text-input" type="text" name="text" class="chatTextClass">
    <input type="submit" value="Enviar" class="buttonClass">
</form>
<form action="left.php" method="post">
        <input name="nick" type="hidden" value="<?php echo $nick ?>">
        <input type="submit" value="Sair"  class="buttonClass">
</form>
<div class="ft">
        <center>
            <p class="version">PHPChatLite • Versão 2.0 • 2023</p>
        </center>
</div>

<script>
    function clearText() {
        var textInput = document.getElementById('text-input');
        setTimeout(function() {
            textInput.value = '';
        }, 0);
    }
</script>

</body>
</html>
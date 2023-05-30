<?php
  ob_start();
  $code = 0000;
  if ($code == $_POST['code']){
  } else {
    echo "<script type='text/javascript'>
    alert('Senha incorreta.');
    location.href='admin/';
    </script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Chat | Painel Administrativo</title>
    <link rel="stylesheet" href="addons/css/style.css">
    <script language="javascript">
  function reset(){
    if(confirm("Você realmente quer reiniciar o chat? Todas as mensagens serão deletadas.")) {
      var janela = window.open('chat-reset-file.php','janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500,height=180'); return false;
      janela.window.close();
    }
  }
  function left(){
    if(confirm("Você realmente quer ir embora? Os usuários do chat não saberão")) {
      location.href='admin/';
    }
  }
  </script>
  <link rel="shortcut icon" type="image/png" href="addons/favicon.png">
  </head>
  <body class="background">
    <b>Painel Administrativo</b><br><br>
    <iframe src="chat.php" width="1415" height="480" name="chat">Recarregue seu navegador.</iframe>
    <hr size="1" color="white">
    <form action="send.php" method="post" target="chat">
      <input name="nick" type="hidden" value="Moderador">
      <input name="action" type="hidden" value="falou">
      <input type="text" name="text"><input type="submit" value="Enviar">
    </form>
    <form action="send.php" method="post" target="chat">
      <input name="nick" type="hidden" value="Moderador">
      <input name="action" type="hidden" value="notificou">
      <input name="text" type="hidden" value="<a color='red' href=# onClick=window.open('terms.htm','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=300,height=300'); return false; >Please read our terms and coditions.</a>">
      <input type="submit" value="Enviar os termos de uso.">
    </form>
    <input type="button" value="Limpar chat" onClick="javascript:reset(); window.location.reload()">
    <input type="button" value="Sair do Painel Administrativo" onClick="javascript:left()">
  </body>
</html>


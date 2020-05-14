<?php
  ob_start();
  $code = 252525;
  if ($code == $_POST['code']){
  } else {
    echo "<script type='text/javascript'>
    alert('Review your credentials.');
    location.href='admin/';
    </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chat | Administration Area</title>
    <link rel="stylesheet" href="style.css">
    <script language="javascript">
  function reset(){
    if(confirm("Do you really want to restart the chat? All messages will be deleted.")) {
      var janela = window.open('chat-reset-file.php','janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500,height=180'); return false;
      janela.window.close();
    }
  }
  function left(){
    if(confirm("Do you really want to leave? Chat users will not know")) {
      location.href='admin/';
    }
  }
  </script>
  </head>
  <body class="background">
    <b>Administration Area</b><br><br>
    <iframe src="chat.php" width="1415" height="480" name="chat">Refresh your browser.</iframe>
    <hr size="1" color="white">
    <form action="send.php" method="post" target="chat">
      <input name="nick" type="hidden" value="Moderator">
      <input name="action" type="hidden" value="say">
      <input type="text" name="text"><input type="submit" value="Send">
    </form>
    <form action="send.php" method="post" target="chat">
      <input name="nick" type="hidden" value="Moderator">
      <input name="action" type="hidden" value="alert">
      <input name="text" type="hidden" value="<a color='red' href=# onClick=window.open('terms.htm','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=300,height=300'); return false; >Please read our terms and coditions.</a>">
      <input type="submit" value="Send link to terms and conditions">
    </form>
    <input type="button" value="Clear chat" onClick="javascript:reset(); window.location.reload()">
    <input type="button" value="Left Admin Painel" onClick="javascript:left()">
  </body>
</html>


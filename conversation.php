<?php
    $nick = $_POST['nick'];
    if($nick == ""){
    echo "<script> location.href='index.htm'; </script>";
    exit;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Chat</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body class="background">
  <div>
    <iframe src="chat.php" width="1400" height="600" name="chat">Refresh your browser.</iframe><br>
  </div>
    <hr color="white">
    <form action="send.php" method="post" target="chat">
      <b><?php echo $nick ?></b>
      <input name="nick" type="hidden" value="<?php echo $nick ?>">
      <select class="custom-select" name="action">
        <option value="speaks" selected>speaks</option>
        <option value="shout">shout</option>
        <option value="kiss">kiss</option>
        <option value="sings">sings</option>
        <option value="asking">asking</option>
        <option value="agree">agree</option>
        <option value="disagree">disagree</option>
        <option value="smile">smile</option>
        <option value="fun">fun</option>
        <option value="fight">fight</option>
        <option value="left">left</option>
      </select> : <input type="text" name="text"> <input type="submit" value="speak">
    </form>
    <form action="left.php" method="post">
      <input name="nick" type="hidden" value="<?php echo $nick ?>">
      <input type="submit" value="left">
    </form>
  </body>
</html>
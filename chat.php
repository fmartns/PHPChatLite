<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="Refresh" content="5;URL=chat.php">
    <title>Bate Papo</title>
    <link rel="shortcut icon" type="image/png" href="addons/favicon.png">
    <style>
        body {
            background: #fff;
        }
    </style>
    </head>
    <body>
        <?php include("chat.txt"); ?>
    </body>
    <script>
    window.onload = function() {
      window.scrollTo(0, document.body.scrollHeight);
    };
  </script>
</html>

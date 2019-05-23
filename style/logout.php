<html>
   <body>
<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();
  header("Location: inloggen.php");
  exit;
  ?>
</body>
</html>

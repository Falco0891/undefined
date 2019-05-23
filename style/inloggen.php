<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>inloggen</title>
</head>

<body>
  <h1>login</h1>
   <form method="POST">
     <?php
       $error = "";
         if (isset($_POST['submit'])) {
             if (!empty($_POST['username']) && !empty($_POST["password"])) {
               $username = $_POST["username"];
               $password = $_POST["password"];
               $user = "Ik";
               $pass = "Herkans";
               if ($username == $user && $password ==$pass) {
               session_start();
               $_SESSION["ingelogd"] = true;
               header("Location: gebruikers.php");
             }
         } else {
             $error ="Username $ password zijn verplicht";
         }
     }
     ?>
      <label>Username:</label> <br> <input type="text" name="username"/> <br>
      <label>Password:</label> <br> <input type="password" name="password"/> <br> <br>
      <input type="submit" name="submit" value="Inloggen"/>
  </form>

  </body>

</html>

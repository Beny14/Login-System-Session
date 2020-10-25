<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   <head>
      <title>Tutorialspoint.com</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
      <h2>Enter Username and Password</h2>
      <div class = "container form-signin">
         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
               if ($_POST['username'] == 'tutorialspoint' && $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';

                  echo 'You have entered valid use name and password';
               }else{
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      <div class = "container">

         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
              <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
              <input type="password" class="form-control" name="password" placeholder="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
         </form>
         Click here to clean <a href="logout.php" title="Logout">Session

      </div>
   </body>
</html>

<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/admin_test.css">
    <title>Loginsystem</title>
  </head>
  <body>

    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><a href="index.php">Home</a></li>
          </ul>
          <div class="nav-login">
            <?php
            if (isset($_SESSION['u_id'])) {
              echo '<form action="inc/logout.php" method="POST">
                      <button type="submit" name="submit">Logout</button>
                    </form>';
            } else {
                echo '<form action="inc/login.php" method="POST">
                        <input type="text" name="uid" placeholder="Username or Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                      </form>
                      <a href="signup_test.php">Sign up</a>';
            }
            ?>
          </div>
        </div>
      </nav>
    </header>

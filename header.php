<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Refresh page after 30 seconds for updates (system is build for worldwide usage) and that cursor is back in the field -->
    <meta http-equiv="refresh" content="30;" />

    <!-- Bootstrap CSS and CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Loginsystem</title>
  </head>
  <!-- onLoad: when you load the page the cursor is in the right field -->
  <body onLoad="this.document.getElementById('employee_number').focus();">

    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><a href="index.php">Home</a></li>
          </ul>
          <div class="nav-login">
            <?php
            if (isset($_SESSION['u_id'])) {
              echo '<form action="inc/logout.inc.php" method="POST">
                      <button type="submit" name="submit">Logout</button>
                    </form>';
            } else {
                echo '<form action="inc/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="Username or Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                      </form>
                      <a href="signup.php">Sign up</a>';
            }
            ?>
          </div>
        </div>
      </nav>
    </header>

    <h1 id="home">Welcome to HKI</h1>
    <p>Access Control</p>

    <!-- input field for transponder -->
    <form action="inc/transponder_check.php" method="POST">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer01">Employee Number:</label>
          <input type="text" name="employee_number" class="form-control" id="employee_number" placeholder="Please hold transponder to the reader" required>
        </div>
      </div>
      </div>
        <button type="submit" name="send_button" class="hidden_button">Send</button>
      </div>
    </form>

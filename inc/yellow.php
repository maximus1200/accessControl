<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Jumps back after five seconds to index.php -->
    <meta http-equiv="refresh" content="5;../index.php" />

    <!-- Bootstrap CSS and CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/yellow.css">

    <title>Access Control</title>
  </head>
    
    <h1>Welcome to HKI</h1>
    <p>Access Control</p>

    <?php
      // Text with title and lastname
      session_start();
      $title = $_SESSION['title'];
      $lastname = $_SESSION['lastname'];
      echo $title . ' ' . $lastname . ' leider keine Zutrittsberechtigung für diesen Bereich.';
    ?>

    <!-- Back to AC-Page Button (HIDDEN style tag) -->
    </div>
      <div class="col">
      <a href="../index.php"><button type="button" style=display:none class="hidden" href='#home'>Back to AC-Page</button>
    </div>

    <!-- jQuery, Bootstrap JS -->
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>
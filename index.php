<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Refresh page after 10 seconds for updates (system is build for worldwide usage) and that cursor is back in the field -->
    <meta http-equiv="refresh" content="10;" />

    <!-- Bootstrap CSS and CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>Access Control</title>
  </head>
  <!-- onLoad: when you load the page the cursor is in the right field -->
  <body onLoad="this.document.getElementById('employee_number').focus();">
    
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





    <!-- jQuery, Bootstrap JS -->
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>
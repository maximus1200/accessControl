<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS and CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">

    <title>Header</title>
  </head>
  <body>

    <!-- Header -->
    <header>
      <nav>
        <a href='#'>
          <img src='img/logo_kh.png' alt='logo'>
        </a>
        <ul>
          <li><a href='index.php'>Home</a></li>
          <li><a href='#'>Portfolio</a></li>
          <li><a href='#'>About me</a></li>
          <li><a href='#'>Contact</a></li>
          <li><a href='#'>Home</a></li>
        </ul>
        <div>
          <form action='includes/login.inc.php' method='post'>
            <input type='text' name='mailuid' placeholder='Username/E-mail'>
            <input type='password' name='pwd' placeholder='Password'>
            <button type='submit' name='login-submit'>Login</button>
          </form>
          <a href='singup.php'>Singup</a>
          <form action='includes/logout.inc.php' method='post'>
            <button type='submit' name='logout-submit'>Logout</button>
          </form>
        </div>
      </nav>
    </header>


    <!-- jQuery, Bootstrap JS -->
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>

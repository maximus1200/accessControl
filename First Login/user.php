<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS and CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user.css">

    <title>Access Control - User</title>
  </head>
  <body>

    <h1>Welcome to HKI</h1>
    <p>Access Control</p>

    <!-- table to edit users -->
    <table>
        <tr>
            <th>ID</th>
            <th>number</th>
            <th>title</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>authorized</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>

            <?php
                require("inc/include.php");
                $stmt = $con->query("SELECT * FROM employee");
                // var_dump is for data check in DB (how much data)
                // var_dump($stmt);
                while ($row = $stmt->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row["ID"] ?></td>
                        <td><?php echo $row["number"] ?></td>
                        <td><?php echo $row["title"] ?></td>
                        <td><?php echo $row["firstname"] ?></td>
                        <td><?php echo $row["lastname"] ?></td>
                        <td><?php echo $row["authorized"] ?></td>
                        <td><?php echo $row["created_at"] ?></td>
                        <td><?php echo $row["updated_at"] ?></td>
                    </tr>
            <?php
                }
            ?>
    </table>





    <!-- jQuery, Bootstrap JS -->
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>

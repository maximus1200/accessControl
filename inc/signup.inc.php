<?php

if (isset($_POST['submit'])) {

  include_once 'include.php';

  $first = mysqli_real_escape_string($con, $_POST['first']);
  $last = mysqli_real_escape_string($con, $_POST['last']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $uid = mysqli_real_escape_string($con, $_POST['uid']);
  $pwd = mysqli_real_escape_string($con, $_POST['pwd']);

  // Error handlers
  // Check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../signup_test.php?signup=empty");
    exit();
  } else {
      // Check if input characters are valid
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup_test.php?signup=invalid");
        exit();
      } else {
        // Check if Email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../signup_test.php?signup=email");
          exit();
        } else {
          $sql = "SELECT * FROM user WHERE ID='$uid'";
          $result = mysqli_query($con, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            header("Location: ../signup_test.php?signup=usertaken");
            exit();
          } else {
            // Hasching the Password
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            // Insert the user into the database
            $sql_final = "INSERT INTO user (firstname, lastname, email, uid, pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
            $result = mysqli_query($con, $sql);
            header("Location: ../signup_test.php?signup=success");
            exit();
          }
        }
      }
  }

} else {
  header("Location: ../signup.php");
  exit();
}

?>

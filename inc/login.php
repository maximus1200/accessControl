<?php

session_start();

if (isset($_POST['submit'])) {

  include 'include.php';

  $uid = mysqli_real_escape_string($con, $_POST['uid']);
  $pwd = mysqli_real_escape_string($con, $_POST['pwd']);

  // Error handlers
  // Check if inputs are empty

  if (empty($uid) || empty($pwd)) {
    header("Location: ../admin_test.php?login=empty");
    exit();
  } else {
      $sql = "SELECT * FROM user WHERE uid='$uid' OR email='$uid'";
      $result = mysqli_query($con, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        header("Location: ../admin_test.php?login=error");
        exit();
      } else {
        if ($row = mysqli_fetch_assoc($result)) {
            // De-hashing the password
            $hashedPwdCheck = password_verify($pwd, $row['pwd']);
            if ($hashedPwdCheck == false) {
              header("Location: ../admin_test.php?login=error");
              exit();
            } elseif ($hashedPwdCheck == true) {
              // Log in the user here
              $_SESSION['u_id'] = $row['ID'];
              $_SESSION['u_firstname'] = $row['firstname'];
              $_SESSION['u_lastname'] = $row['lastname'];
              $_SESSION['u_email'] = $row['email'];
              $_SESSION['u_uid'] = $row['uid'];
              header("Location: ../admin_test.php?login=success");
              exit();
            }
        }
      }
  }
} else {
    header("Location: ../admin_test.php?login=error");
    exit();
}

?>

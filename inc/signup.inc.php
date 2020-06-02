<?php

if (isset($_POST['submit'])) {

  include_once 'include.php';

  $first = mysqli_real_escape_string($con, $_POST['first']);
  $first = mysqli_real_escape_string($con, $_POST['last']);
  $first = mysqli_real_escape_string($con, $_POST['email']);
  $first = mysqli_real_escape_string($con, $_POST['uid']);
  $first = mysqli_real_escape_string($con, $_POST['pwd']);

  // Error handlers
  // Check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../signup.php?signup=empty");
    exit();
  } else {

  }

} else {
  header("Location: ../signup.php");
  exit();
}
// nkvbnkfnk
?>

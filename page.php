<?php
  // Check if the user is logged in.
  if (isset($_SESSION['user'])) {
    // The user is logged in, redirect to the home page.
    header('Location: home.php');
  }
  // Check if the form has been submitted.
  if (isset($_POST['username'])
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Process the form submission (e.g., send an email, store data, etc.)

  // Redirect the user to a thank you page
  header("Location: thank_you.html");
  exit();
}
?>

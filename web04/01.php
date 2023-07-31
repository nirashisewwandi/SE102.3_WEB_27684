<html>
<head>
  <title>User Registration Form</title>
</head>
<body>
  <h1>User Registration Form</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  $academicYear = $_POST["academicYear"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];

  // Process the data as needed (e.g., save to a database, send an email, etc.)

  // For demonstration purposes, let's just display the collected data:
  echo "<h2>Registration Successful!</h2>";
  echo "<p>First Name: $firstName</p>";
  echo "<p>Last Name: $lastName</p>";
  echo "<p>Username: $username</p>";
  echo "<p>Gender: $gender</p>";
  echo "<p>Academic Year: $academicYear</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Phone Number: $phoneNumber</p>";
}
?>

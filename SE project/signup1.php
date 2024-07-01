<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}

form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f2f2f2;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.error {
  color: red;
  font-size:20px;
  font-weight: 900;
  margin-bottom: 10px;
  text-align:center;
  padding: 40px;
}

  </style>
</head>
<body>
  <h1>Register</h1>
  <form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Register">
  </form>

  <?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data and sanitize it
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  // Connect to the database
  $servername = 'localhost'; // Replace with your database server name
  $username_db = 'root'; // Replace with your database username
  $password_db = ''; // Replace with your database password
  $dbname = 'login'; // Replace with your database name
  $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

  // Check the connection
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  // Check if the email is already registered
  $stmt = $conn->prepare("SELECT * FROM udetails WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    echo "<p class='error'>Email is already registered!</p>";
  }
  else {
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO udetails (name, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $username, $email, $password);
    if ($stmt->execute() === TRUE) {
      echo "<script>alert('Registration successful!'); window.location.href = 'index.html';</script>";
    }
    else {
      echo 'Error: ' . $stmt->error;
    }
  }

  // Close the statement and connection
  $stmt->close();
  mysqli_close($conn);
}
?>
</body>
</html>

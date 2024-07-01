<?php
session_start(); // start the session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate the form data
    if (!empty($email) && !empty($password)) {
        // connect to the database
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "login";
        $conn = mysqli_connect($servername, $username, $password_db, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // query the database for the user
        $sql = "SELECT * FROM udetails WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password === $row['password']) {
                // set session variables and redirect to home page
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];
                header("Location: shop.php");
                exit();
            } else {
                $error = "Incorrect password!";
            }
        } else {
            $error = "User not found!";
        }

        // close the database connection
        mysqli_close($conn);
    } else {
        $error = "Please fill in all fields!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
  margin-top: 50px;
}

form {
  width: 50%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

p {
  color: red;
  text-align: center;
  margin-top: 20px;
}
div{
  text-align: center;
  padding:30px;
}
div a{
text-decoration:none;
}
div a:hover{
  color:red;
}

    </style>
</head>
<body>
    <h1>Login Page</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
<div>
   Not Registered Yet? <a href="signup1.php"> Register Here.</a>
</div>
   
</body>
</html>
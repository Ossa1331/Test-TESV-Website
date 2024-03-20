<!doctype PHP>
<html>
<head>
<link rel="stylesheet" href="style.css">
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost:3307";
    $username = "root";
    $password = "rootpass";
    $dbname = "SiteUsers";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $query = "SELECT pass FROM user WHERE username = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['hashed_pass'];
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $row['username'];
            echo "Login succesful";
            header("Location: index.php");
        } else {
            echo "Your username or password does not match";
        }
    } else {
        echo "Your username or password does not match";
    }

    $stmt->close();
    $conn->close();
}
?>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container flex">
    <form method="post" class="login-form">
      <h2>Login into your account</h2>
      <input type="text" id="username" name="username" placeholder="Enter Your Username" required>
      <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="Register.php"class="register">Register here</a></p>
    </form>
  </div>
  <footer class="footer">
    <p> 1994-2023 Bethesda Softworks LLC. All rights reserved.</p>
  </footer>
</body>
</html>
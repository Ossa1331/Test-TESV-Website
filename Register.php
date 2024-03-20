<!doctype PHP>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost:3307";
    $username = "root";
    $password = "rootpass";
    $dbname = "SiteUsers";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }
    
    $fullname=$_POST['name'];
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $hashed_password=password_hash($password,PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (fullname, username, email, pass, hashed_pass) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullname, $username, $email, $pass, $hashed_pass);

    if ($stmt->execute()) {
        echo "You have registered succesfully. Welcome!";
    } else {
        echo "There has been and error in our services. Please try again later. " . $stmt->error;
    }
 
      $stmt->close();
      $conn->close();
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
    <script>

        $(document).ready(function() {
            $('#Registration-form').validate({
                rules: {
                    'name': {
                        required: true,
                        minlength: 6,
                        maxlength: 75
                    },
                    'password': {
                        required: true
                    },
                    'verify_password': {
                        required: true,
                        equalTo: '#password'
                    }
                },
                messages: {
                    'name': {
                        required: 'Please enter your username',
                        minlength: 'Your name has to be at least 6 characters long',
                        maxlength: 'Your name can not be longer than 75 characters'
                    },
                    'password': {
                        required: 'Please enter your password'
                    },
                    'verify_password': {
                        required: 'Please repeat the password',
                        equalTo: 'Password does no match'
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(form) {
                    alert('Registration successful');
                }
            });
        });

    </script>
</head>
<body>
    <div class="container flex">
      <form method="post" class="login-form">
        <h2>Register Your Account</h2>
        <div class="form-element">
          <label for="name">Enter Your Full Name</label>
          <input type="text"  name="name" placeholder="John Doe" required>
        </div>
        <div class="form-element">
          <label for="email">Enter Your Email</label>
          <input type="email"  name="email" placeholder="youremail@gmail.com" required>
        </div>
        <div class="form-element">
          <label for="username">Enter Your Username</label>
          <input type="text" name="username" placeholder="Username123" required>
        </div>
        <div class="form-element">
          <label for="password">Enter Your Password</label>
          <input type="password"  name="password" placeholder="Enter Your Password" required>
        </div>
        <div class="form-element">
         <label for="verify_password"> Re-enter Your Password</label>
         <input type="password" name="verify_password" placeholder="Repeat Your Password" required>
        </div>
        <button type="submit">Register</button>
      </form>
    </div>
    <footer class="footer">
    <p> 1994-2023 Bethesda Softworks LLC. All rights reserved.</p>
  </footer>
</body>
</html>
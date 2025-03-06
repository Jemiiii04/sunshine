<?php include 'include/conn.php' ?>
<?php session_start(); ?>
<?php

      if (isset($_POST['login'])) {

          $email = $_POST['email'];
          $pswd = $_POST['password'];

          $sql = "SELECT name, email, password FROM user WHERE email = '$email' && password = '$pswd' ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc(); 
              // Store session variables
              $_SESSION['name'] = $row['name'];
              $_SESSION['email'] = $row['email'];
              
              // Redirect to the dashboard
              header('Location: index.php');
              
          } else {
              echo "<script>alert('No user found with this email!')</script>";
          }
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display SC', serif;
            background-color: #1979A9;
            height: 50vh;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 10%;
        }
        .mybtn{
            font-size: 20px;
            font-weight: bold;
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #fdae44;
            color: #1979A9;
            transition: .5s;
            border: 1px solid #fff;
            border-radius: 5px;
            text-decoration: none;
            }
            .mybtn:hover{
            background-color: #1979A9;
            color: #fdae44;
            }

    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <h3 class="text-center mb-4" style="color: #1979A9">Login Form</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" name="email" id="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <button type="submit"  name="login" value="login" class="mybtn">LOGIN</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
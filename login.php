<?php include 'include/conn.php' ?>
<?php session_start(); ?>
<?php

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $pswd = $_POST['password'];

        $sql = "SELECT name, email, password FROM signup WHERE email = '$email' && password = '$pswd' ";
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
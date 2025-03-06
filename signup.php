  <?php include 'include/conn.php' ?>
  <?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_no = $_POST['phone_no'];    

    $sql = "INSERT INTO signup(name, email, password, phone_no) 
            VALUES ('$name', '$email', '$password', '$phone_no')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: index.php');

    // Reset form fields
    $name = "";
    $email = "";
    $password = "";
    $phone_no = "";
}

?>
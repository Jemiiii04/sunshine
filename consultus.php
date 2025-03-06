  <?php include 'include/conn.php' ?>
  <?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $typeofconsultation = $_POST['typeofconsultation'];
    $message = $_POST['message'];    

    $sql = "INSERT INTO consultus(name, email, phone_no, typeofconsultation, message) 
            VALUES ('$name', '$email', '$phone_no', '$typeofconsultation', '$message')";

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
    $phone_no = "";
    $typeofconsultation = "";
    $message = "";

}

?>
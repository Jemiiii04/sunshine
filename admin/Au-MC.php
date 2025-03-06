<?php include 'include/conn.php' ?>
<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];   

    $sql = "INSERT INTO au-mc(title, description, image) 
            VALUES ('$title', '$description', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: index.php');

    // Reset form fields
    $title = "";
    $description = "";
    $image = "";
}

?>
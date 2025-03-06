<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];

    $fileName = '';
    if (isset($_FILES['file'])) {
        $uploadDirectory = 'pic/'; 

        $randomNumber = mt_rand(1001, 9999);
        $fileName = $randomNumber . $_FILES['file']['name']; 
        $fileTmpName = $_FILES['file']['tmp_name'];

        $uploadPath = $uploadDirectory . basename($fileName);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "File has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file was uploaded or there was an error with the file.";
    }
    
    $sql = "INSERT INTO aboutustitle(title, description, image) 
            VALUES ('$title', '$description', '$fileName')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: AboutTitle-table.php');

    // Reset form fields
    $title = "";
    $description = "";
    
}

?>

<div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4">
          <div class="menu">
  
          <?php include 'include/sidebar.php' ?> 

          </div>
        </div>
      <div class="col-xl-9 col-lg-8 col-md-8">
          
    <div class="container mt-5">
        <h1 class="title mb-4"><u>About us Title</u></h1>
        <div class="card">
            <div class="card-body">
                <form action="AboutTitle-form.php" method="POST" enctype="multipart/form-data">
                    <!-- Title Input -->
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter the title">
                    </div>

                    <!-- Sub Title & Description Input -->
                    <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description"  id="description" rows="4" placeholder="Enter description"></textarea>
                    </div>

                    <!-- File Upload -->
                    <div class="mb-3">
                    <label for="file" class="form-label">Upload Image</label>
                    <input class="form-control" name="file"  type="file">
                    </div>

                    <!-- Submit Button -->
                    <div class="modal-footer">
                    <input type="submit" name="Submit" value="Submit" class="mybtnn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
    </div>
</div>
<?php include 'include/footer.php' ?>
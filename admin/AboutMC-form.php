<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<?php 
  if (isset($_POST['Submit'])) {

    // Get form data    
    $fileName1 = '';
    if (isset($_FILES['file1'])) {
        $uploadDirectory = 'pic/'; 

        $randomNumber = mt_rand(1001, 9999);
        $fileName1 = $randomNumber . $_FILES['file1']['name']; 
        $fileTmpName = $_FILES['file1']['tmp_name'];

        $uploadPath = $uploadDirectory . basename($fileName1);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "File has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No file was uploaded or there was an error with the file.";
    }

    $title1 = $_POST['title1'];
    $subtitle = $_POST['subtitle'];

    
    
    
    $sql = "INSERT INTO aboutusmc(image1, title1, subtitle) 
            VALUES ('$fileName1', '$title1','$subtitle')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: AboutMC-table.php');

    // Reset form fields
   
    $title1 = "";
    
    $subtitle = "";
    
    
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
    <h1 class="title mb-4"><u>About us Managing Committee</u></h1>
        <div class="card">
            <div class="card-body">
                <form action="AboutMC-form.php" method="POST" enctype="multipart/form-data">

                    <!-- File Upload -->

                    <!-- Card Image-1 -->
                    <h2 class="text-center mb-4">Card Image</h2>
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="mb-3">
                                <label for="file" class="form-label">Image</label>
                                <input class="form-control" name="file1" type="file" >
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title1" id="title" placeholder="Enter the title">
                            </div><div class="mb-3">
                                <label for="subtitle" class="form-label">Sub-Title</label>
                                <input type="text" class="form-control" name="subtitle" id="title" placeholder="Enter the sub-title">
                            </div>
                            
                        </div>
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
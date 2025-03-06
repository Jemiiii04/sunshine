<?php include 'include/conn.php' ?>
<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    
    $title = $_POST['title'];
    $description = $_POST['description'];   

    $sql = "INSERT INTO services(title, description) 
            VALUES ('$title','$description')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect to another page
    header('Location: Service-table.php');

    // Reset form fields
    
    $title = "";
    $description = "";
}

?>

<?php include 'include/header.php' ?>

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
    <h1 class="title mb-4"><u>Services</u></h1>
        <div class="card">
            <div class="card-body">
                <form action="Service-form.php" method="POST">

                    <!-- Title Input -->
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter the title">
                    </div>

                    <!-- Sub Title & Description Input -->
                    <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="6" placeholder="Enter description"></textarea>
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
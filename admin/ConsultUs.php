<?php 
include 'include/header.php'; 
 include 'include/conn.php'; 

    // Initialize variables
    $id = $name = $email = $phone_no = $typeofconsultation = $message = "";
    $edit = false; 
 
    // Handle Edit Request
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $typeofconsultation = $_POST['typeofconsultation'];
        $message = $_POST['message'];
        $edit = true;
    }

    // Handle Update Request
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $typeofconsultation = $_POST['typeofconsultation'];
        $message = $_POST['message'];

        $sql = "UPDATE consultus SET name='$name', email='$email', phone_no='$phone_no', typeofconsultation='$typeofconsultation', message='$message' WHERE id=$id";
        $conn->query($sql);
        
        if ($conn->query($sql) === TRUE) {
            header("Location: ConsultUs.php"); // Redirect to avoid form resubmission
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
        }

    // Handle Delete Request
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM consultus WHERE id=$id";
        $conn->query($sql);
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
        <div class="row mt-5">
            <div class="col-md-12">
            <h1 class="title mb-4"><u><?php echo $edit ? "Edit Consult Us" : "Consult Us"; ?></u></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                <!-- <table class="table border border-primary">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email ID</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1.</th>
                            <td>Jaimin Jayani</td>
                            <td>jyanijaimen@gmail.com</td>
                            <td>+91 9327393608</td>
                            <td>Dear Ma'm, I'm excited to donate in your foundation for better well being. </td>
                            <td>
                                <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg></button>
                                <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg></button>
                            </td>
                        </tr>
                    </tbody>
                </table> -->
                 
                            
            <?php                
                
            // Fetch users from the database
            $sql = "SELECT * FROM consultus";
            $result = $conn->query($sql);

            // Check if there are any users
            if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">
            <thead>
                <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email ID</th>
                            <th>Phone Number</th>
                            <th>Type of consultation</th>
                            <th>Message</th>
                            <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] ."</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone_no"] . "</td>
                    <td>" . $row["typeofconsultation"] . "</td>
                    <td>" . $row["message"] . "</td>
                     <td >
                            <form method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <input type='hidden' name='name' value='{$row['name']}'>
                                                <input type='hidden' name='email' value='{$row['email']}'>
                                                <input type='hidden' name='phone_no' value='{$row['phone_no']}'>
                                                <input type='hidden' name='typeofconsultation' value='{$row['typeofconsultation']}'>
                                                <input type='hidden' name='message' value='{$row['message']}'>
                                                <button type='submit' name='edit' class='btn btn-primary btn-sm'> 
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                                                    </svg>
                                                </button>
                                                <button type='submit' name='delete' class='btn btn-danger btn-sm'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                     </tr>";
                                      }
                                     echo '</tbody>
                                     </table>';
                                     }else {
                                      echo 'No record found!';  
                                        }
    
                                    ?>
            </div>
        </div>
    </div>
    <?php if(isset($_POST['edit'])) { ?>
                <div class="row mt-4">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Consult Us</h4>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $_POST['name']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $_POST['email']; ?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_no" class="form-control" value="<?php echo $_POST['phone_no']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="consultationType" class="form-label"><h5>Type of Consultation:</h5></label>
                                        <select id="typeofconsultation" name="typeofconsultation" class="form-select" value="<?php echo $_POST['typeofconsultation']; ?>" required>
                                        <option value="" disabled selected>Select type</option>
                                        <option value="Education">Education</option>
                                        <option value="Health">Health</option>
                                        <option value="Child Labour">Child Labour</option>
                                        <option value="Women Empowerment">Women Empowerment</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input type="text" name="message" class="form-control" value="<?php echo $_POST['message']; ?>" required>
                                    </div>
                                    <button type="submit" name="update" class="btn btn-success">Update</button>
                                    <a href="" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

</div> 

</div>
    </div>
</div>
<?php include 'include/footer.php' ?>
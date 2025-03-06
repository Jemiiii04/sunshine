<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>
<?php include 'contactAdmin.php' ?>

<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $fname = $_POST['fname'] . " " . $_POST['lname'];    
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
    $sql = "INSERT INTO contactus(full_name, phone_no, email, message) 
            VALUES ('$fname', '$phone_no', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    // Reset form fields
    $fname = "";
    $email = "";
    $phone_no = "";
    $message = "";
    
}

?>

    
<section class="hero-section">
    <div class="overlay"></div>
        <div class="cont">
            <h1 class="title">Contact Us</h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a> / <span>Contact Us</span>
            </div>
        </div>
</section>
 
<div class="container">
    <div class="rowicon row">
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                          </svg></a>
                    </div>
                    <div class="col-md-8">
                        <h3>Trusted Partner</h3>
                        <p class="subtitle text-body-secondary">+91 8140160644</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                          </svg></a>
                    </div>
                    <div class="col-md-8">
                        <h3>Mail</h3>
                        <p class="subtitle text-body-secondary">writetous@sunshine.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                          </svg></a>
                    </div>
                    <div class="col-md-8">
                        <h3>Our Address</h3>
                        <p class="subtitle text-body-secondary">101 Circular Block - Alkapuri Shopping center Vishwas Colony Road, Jetalpur Rd, Alkapuri, Vadodara, Gujarat 390007</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map container -->
<div id="map-container">
  <img src="Images/contactus/map.JPG" alt="map" class="w-100">

  <!-- Contact form overlay -->
  <div class="form-overlay">
    <h3 class="msg text-center">Write Us a Message</h3><br>
    <form class="container" action="contactus.php" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName" class="form-label"><b>First Name:</b></label>
          <input type="text" class="form-control" id="firstName" name="fname" placeholder="firstName...">
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName" class="form-label"><b>Last Name:</b></label>
          <input type="text" class="form-control" id="lastName" name="lname" placeholder="lastName...">
        </div>
      </div>
      <div class="mb-3">
        <label for="phoneNumber" class="form-label"><b>Phone Number:</b></label>
        <input type="tel" class="form-control" id="phoneNumber" name="phone_no" placeholder="PhoneNo...">
      </div>
      <div class="row">
        <div class="mb-3">
        <label for="email" class="form-label"><b>Email ID:</b></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="info@example.com">
      </div>
    </div>
      <div class="mb-3">
        <label for="message" class="form-label"><b>Message:</b></label>
        <textarea class="form-control" id="message" rows="3" name="message" placeholder="Dear Sir/Madam..."></textarea>
      </div>
      <input type="submit" name="Submit" value="Submit" class="mybtn btn-primary w-100">
    </form>
  </div>
</div><br>

<?php include 'include/footer.php' ?>
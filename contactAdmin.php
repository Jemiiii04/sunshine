<?php 
  if (isset($_POST['Submit'])) {

    // Get form data
    $fname = $_POST['fname'] . " " . $_POST['lname'];    
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Insert into database
    $sql = "INSERT INTO contactus(full_name, phone_no, email, message) 
            VALUES ('$fname', '$phone_no', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully!')</script>";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Email Configuration
    $admin_email = "sunshinengo04@gmail.com"; // Replace with actual admin email
    $subject = "New Contact Us Submission";
    $email_body = "<html><body>";
    $email_body .= "<h2>New Contact Form Submission</h2>";
    $email_body .= "<p><strong>Name:</strong> $fname</p>";
    $email_body .= "<p><strong>Phone Number:</strong> $phone_no</p>";
    $email_body .= "<p><strong>Email:</strong> $email</p>";
    $email_body .= "<p><strong>Message:</strong> $message</p>";
    $email_body .= "</body></html>";
    
    // Headers for email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Send Email
    if (mail($admin_email, $subject, $email_body, $headers)) {
        echo "<script>alert('Your message has been sent successfully!')</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
</head>
<body class="background">
    <div>
    <div class="topbar mt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-2 col-lg-2">
                  
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.8 2.8 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124q.219.416.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442q.33-.421.55-.836L15 11.105V5.383l-3.002 1.801a2.8 2.8 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                      </svg> <b>writetous@sunshine.com</b>
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg> <b>+91 9327393608</b>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <form class="d-flex" role="search">
                        <button class="mybtn rounded-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                          <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
                          <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11"/>
                        </svg></button>
                        <input class="form-control me-2 rounded-search" type="search" placeholder="Search..." aria-label="Search">
                    </form>
                </div>
                <div class="col-sm-6 col-md-2 col-lg-2">
                    <button type="button" class="mybtn rounded-search" data-bs-toggle="modal" data-bs-target="#LoginModal" data-bs-whatever="@mdo">Login <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                        </svg>
                    </button>
                    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="TY modal-header">
                                    <p class="modal-title fs-5" id="LoginModalLabel">Thank You for visiting. Stay connected to know more about out mission. </p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="login.php" method="post">
                                        <label for="email"><h5>Email ID:</h5></label>
                                        <input type="email" id="email" name="email" placeholder="Enter your Mail ID" required><br><br>
      
                                        <label for="password"><h5>Password:</h5></label>
                                        <input type="password" id="password" name="password" placeholder="Enter your Password" required><br><br>
                                        
                        
                                        <div class="modal-footer" >
                                            <button type="submit" name="submit" value="submit" class="mybtn " style="display: block; margin: 0 auto;">Submit</button>
                                        
                                          </div>
                                            <div>
                                            <h5 class="text-center">Not a member?<a href="" style="color: #1979a9; font-size: 20px; text-decoration: none;"data-bs-toggle="modal" data-bs-target="#RegistrationModal">Signup now</a></h5>
                                          
                                        </div>
                                    </form>
                                </div>
                                <div class="TY modal-header">
                                    <p class="modal-title fs-5" id="LoginModalLabel">We respect your privacy. You details are safe with us. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="RegistrationModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="TY modal-header">
              <p class="modal-title fs-5" id="RegistrationModalLabel">Thank You for visiting. Stay connected to know more about out mission. </p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="signup.php" method="POST">
                <label for="name"><h5>Full Name:</h5></label>
                <input type="text" id="name" name="name" placeholder="Enter your Full Name" required><br><br>
        
                <label for="email"><h5>Email ID:</h5></label>
                <input type="email" id="email" name="email" placeholder="Enter your Mail ID" required><br><br>
  
                <label for="password"><h5>Password:</h5></label>
                <input type="password" id="password" name="password" placeholder="Enter unique Password" required><br><br>
        
                <label for="phone"><h5>Phone Number:</h5></label>
                <input type="tel" id="phone_no" name="phone_no" placeholder="Enter your Phone No." required><br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="mybtn rounded-search" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="Submit" value="Submit" class="mybtn rounded-search">
            </div>
          </form>
          <div class="TY modal-header">
            <p class="modal-title fs-5" id="LoginModalLabel">We respect your privacy. You details are safe with us. </p>
          </div>
          </div>
        </div>
      </div>

   
    <div>
        <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="Images/Logo.png" alt="Bootstrap" width="150" height="150" class="mt-0"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b class="home">Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="AboutUs.php"><b class="home">About Us</b></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b class="home">Services</b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Education.php">Education</a></li>
              <li><a class="dropdown-item" href="health.php">Health</a></li>
              <li><a class="dropdown-item" href="ChildLabour.php">Child Labour</a></li>
              <li><a class="dropdown-item" href="WomenEmpowerment.php">Women Empowerment</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="blog.php"><b class="home">Blog</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="contactus.php"><b class="home">Contact us</b></a>
          </li>
          <li class="nav-item">
            <div class="nav-link">
              <div class="container text-center">
                <button class="mybtn donate-button rounded-search" data-bs-toggle="modal" data-bs-target="#donateModal">Consult Us <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                  </svg></button>
            </div>
            

            
            <!-- Modal for Donate Form -->
            <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="TY modal-header" >
                    <h4 class="modal-title" id="donateModalLabel">Book Your Consultation with SUNSHINE</h4>
                    <button type="button" class="btn-close rounded-search" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="consultus.php" method="POST">
                      <div class="mb-3">
                        <label for="donorName" class="form-label"><h5>Full Name:</h5></label>
                        <input type="text" class="form-control" id="donorName" name="name" placeholder="Enter your Full Name" required>
                      </div>
            
                      <div class="mb-3">
                        <label for="donorEmail" class="form-label"><h5>Email Address:</h5></label>
                        <input type="email" class="form-control" id="donorEmail" name="email" placeholder="Enter your Mail ID" required>
                      </div>
            
                      <div class="mb-3">
                      <label for="phoneNumber" class="form-label"><h5>Phone Number:</h5></label>
                      <input type="tel" class="form-control" id="phoneNumber" name="phone_no" placeholder="Enter your Phone No.">
                      </div>
            
                      <div class="mb-3">
                        <label for="consultationType" class="form-label"><h5>Type of Consultation:</h5></label>
                        <select id="typeofconsultation" name="typeofconsultation" class="form-select" required>
                          <option value="" disabled selected>Select type</option>
                          <option value="Education">Education</option>
                          <option value="Health">Health</option>
                          <option value="Child Labour">Child Labour</option>
                          <option value="Women Empowerment">Women Empowerment</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="message" class="form-label"><h5>Message:</h5></label>
                        <textarea id="message" class="form-control" rows="4" name="message" placeholder="Describe your query or consultation requirement"></textarea>
                      </div>
            
                      <div class="modal-footer">
                        <button type="button" class="mybtn rounded-search" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="Submit" value="Submit" class="mybtn rounded-search">
                      </div>
                    </form>
                  </div>
                  <div class="TY modal-header">
                    <p class="modal-title" id="LoginModalLabel">We respect your privacy. You details are safe with us. </p>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
          </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<?php include 'conn.php' ?> 
<?php 
    session_start();

?> 

<!-- Sidebar -->
<nav class="sidebar vh-100" style="background-color: #fdae44;" id="sidebar">

<div class="p-4">
  <h2 class="text-center" style="font-weight: bold; color: #1979A9">
  <?php
    echo $_SESSION['name']
  ?>  
  </h2>
  <!-- <span class="text-success text-center d-block mb-3">Online</span> -->
</div>

  <div class="p-4">
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" style="color: #000; font-size: 19px;" href="Signup.php">SignUp Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="ConsultUs.php">ConsultUs Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutTitle-form.php">AboutUsTitle</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutTitle-table.php">AboutUsTitle-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutCard-form.php">AboutUsCard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutCard-table.php">AboutUsCard-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutGrid-form.php">AboutUsGrid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutGrid-table.php">AboutUsGrid-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutMC-form.php">AboutUsMC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutMC-table.php">AboutUsMC-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutBOT-form.php">AboutUsBOT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="AboutBOT-table.php">AboutUsBOT-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="Service-form.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="Service-table.php">Services-table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color: #000; font-size: 19px;" href="ContactUs.php">ContactUs Table</a>
      </li>
    </ul>
  <div>
    <div class="container">
      <div class="logout-container">
        <form action="logout.php" method="POST">
          <input type="submit" class="mybtnn rounded-search w-100" name="Logout" value="Logout">
        </form>
      </div>
    </div>
    </div>

  </div>

</nav>
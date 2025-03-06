<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>

<div class="container">
    <div class="row text-center">
      <?php
            // Fetch users from the database
            $sql = "SELECT id, title, description, image FROM aboutustitle";
            $result = $conn->query($sql);

            // Check if there are any users
              if ($result->num_rows > 0) { 
                                $row = $result->fetch_assoc();
                                $img = 'admin/pic/'.$row["image"];
                                $title = $row["title"];
                                $description = $row["description"];
                            }    
              ?>
      <div class="col-md-4"></div>
        <div class="col-md-4">
            <b class="vision"><?php echo $title ?></b>
        </div>
    </div>
    
</div>
<div class="container-fluid">
    <div class="row text-center">
     <div class="col-md-4"></div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <p class="vision1">
            <?php echo $description ?><!-- 
            A happy, healthy and creative child whose rights are protected and honoured in a society that is built on respect for dignity, justice and equity for all. -->
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="<?php echo $img ?>" class="w-100">
        </div>
    </div>
    
</div> 

<div class="container">
    <div class="row text-center">
        <div class="col">
            <b class="vision">
            Our Mission
          </b>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mission">

      <?php
          
          // Fetch users from the database
          $sql = "SELECT id, image1, title1, description1 FROM aboutuscard";
          $result = $conn->query($sql);
          
          while($row = $result->fetch_assoc()) {
      ?>

      <div class="col-md-4">
        <div class="image-hover-container">
          <div class="card image-wrapper" >
              <img src="admin/pic/<?php echo $row["image1"] ?>" alt="gif">
          </div>
          <div class="text-overlay">
              <h3><?php echo $row["title1"] ?>
              <!-- Taking Responsibility -->
            </h3>
              <p><?php echo $row["description1"] ?>
              <!-- To enable people to take responsibility for the situation of deprived Indian children... -->
            </p>
          </div>
        </div>
      </div>

      <?php
          }
      ?>

      <!-- <div class="col-md-4">
        <div class="image-hover-container">
          <div class="card image-wrapper">
              <img src="" alt="gif">
          </div>
          <div class="text-overlay">
              <h3>
              Mobilising Potential
            </h3>
              <p>
              To make people discover their potential for action and change
            </p>
          </div>
        </div>
      </div>        
        <div class="col-md-4">
          <div class="image-hover-container">
            <div class="card image-wrapper">
                <img src="" alt="gif">
            </div>
            <div class="text-overlay">
                <h3>
                Inspiring Collective Action
              </h3>
                <p>
                To enable peoples’ movements encompassing diverse segments, working in partnership to secure, protect & honour the rights of India’s children.
              </p>
            </div>
        </div>
        </div> -->
    </div>
</div>

<div class="AU container">
    <div class="row">
      <?php
            // Fetch users from the database
            $sql = "SELECT id, title, subtitle, description, video, image FROM aboutusgrid";
            $result = $conn->query($sql);


            // Check if there are any users
              if ($result->num_rows > 0) { 
                                $row = $result->fetch_assoc();
                                $img = 'admin/pic/'.$row["image"];
                                $video = 'admin/pic/'.$row["video"];
                                $title = $row["title"];
                                $subtitle = $row["subtitle"];
                                $description = $row["description"];
                            }    
              ?>
        <div class="col-md-6">
            <h1 class="AU1"><?php echo $title ?></h1>
            <h1 class="AU2"><?php echo $subtitle ?></h1>
            <p class="AU3">
              <?php echo $description ?>
            </p>
            <p class="AU3">
                We engage in a wide range of activities, including educational workshops, community development projects, health awareness campaigns, and environmental conservation efforts. With a passionate team and the support of volunteers and donors, Sunshine NGO Institute strives to make a lasting impact on society.
            </p>
        </div>
        <div class="col-md-6">
            <video autoplay="true" muted loop class="w-100">
                <source src="<?php echo $video ?>" type="video/mp4">
                <source src="images/Aboutus/AU.mp4" type="video/webm">
              </video>
        </div>
    </div>
</div>

<div style="margin-top: 30px;">
    <img src="<?php echo $img ?>" class="w-100">
</div>

<div style="background-color: orange; color: white;">

  <div class="container">
    <div class="row text-center">
        <div class="col">
            <b class="vision">
            <!-- Our Team -->
          </b>
        </div>
    </div>
</div><br>

  <div class="container">
    <div class="row text-center">
     
        <div class="col-md-4">
            <b class="vision2">
            Managing Committee
          </b>
            <p class="AU3">
                Our dedicated team at Sunshine NGO Institute comprises passionate professionals and volunteers who share a commitment to creating meaningful social impact.
            </p><hr>
        </div>
        <div class="col-lg-8">
          <div class="AU6 container text-center">
            <div class="row ">
            <?php
              // Fetch users from the database
              $sql = "SELECT id, image1, title1, subtitle FROM aboutusmc";
              $result = $conn->query($sql);

              while($row = $result->fetch_assoc()) {
            ?>

                <div class="col-md-4">
                  <div class="card" style="width: 14rem;">
                    <img src="admin/pic/<?php echo $row["image1"] ?>" class="card-img-top" alt="bootstrap">
                    <div class="card-body">
                      <h5 class="card-text"><b><?php echo $row["title1"] ?>
                      <!-- Puja Marwaha -->
                    </b></h5>
                      <h6 class="AU5 card-subtitle text-body-secondary">
                        <?php echo $row["subtitle"] ?>
                        <!-- Chief Executive -->
                      </h6>
                    </div>
                  </div>
                </div>

                <?php
                  }
                ?>
                <!-- <div class="col-md-4">
                  <div class="card" style="width: 14rem;">
                    <img src="" class="card-img-top" alt="bootstrap">
                    <div class="card-body">
                      <h5 class="card-text"><b>
                      Yamini Kapoor
                    </b></h5>
                      <h6 class="card-subtitle text-body-secondary">DIRECTOR - Resource Generation</h6>
                    </div>
                  </div>
                </div>
                <div class=" col-md-4">
                  <div class="card" style="width: 14rem;">
                    <img src="" class="card-img-top" alt="bootstrap">
                    <div class="card-body">
                      <h5 class="card-text"><b>
                      Vatsala Mamgain
                    </b></h5>
                      <h6 class="card-subtitle text-body-secondary">DIRECTOR - Communication</h6>
                    </div>
                  </div>
                </div> -->
            </div>
          </div>
        </div>  
    </div>
</div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <b class="vision2">
                Board Of Trustees
              </b>
                <p class="AU3">
                  The team includes experts in community development, education, environmental conservation, and health advocacy. Together, we work tirelessly to design and implement programs that make a real difference in people's lives.
                </p><hr>
            </div>
            <div class="col-lg-8">
              <div class="AU6 container text-center">
                <div class="row ">


                <?php
            // Fetch users from the database
            
              $sql = "SELECT id, image1, title1, subtitle FROM aboutusbot";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc()) {
              ?> 
                <div class="col-md-4">
                  <div class="card" style="width: 14rem;">
                        <img src="admin/pic/<?php echo $row["image1"] ?>" class="card-img-top" alt="bootstrap">
                        <div class="card-body">
                          <h5 class="card-text"><b><?php echo $row["title1"] ?>
                          <!-- Ratan J. Batliboi -->
                        </b></h5>
                          <h6 class="card-subtitle text-body-secondary"><?php echo $row["subtitle"] ?>
                          <!-- Board Chair & Hon Trustee -->
                        </h6>
                        </div>
                  </div>
              </div>
                      <?php
                    }
                  ?>
              
                    </div>
                    <!-- <div class="col-md-4">
                      <div class="card" style="width: 14rem;">
                        <img src="" class="card-img-top" alt="bootstrap">
                        <div class="card-body">
                          <h5 class="card-text"><b>
                          Praveen Kadle
                        </b></h5>
                          <h6 class="card-subtitle text-body-secondary">
                          Trustee & Hon Treasurer
                        </h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 14rem;">
                        <img src="" class="card-img-top" alt="bootstrap">
                        <div class="card-body">
                          <h5 class="card-text"><b>
                          Pervin Varma
                        </b></h5>
                          <h6 class="card-subtitle text-body-secondary">
                          Trustee
                        </h6>
                        </div>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
                     
        </div>
    </div>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-3" ></div>
    <div class="col-md-6 text-center">
      <h1 class="AU7">
        SUNSHINE's Global Presence
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <p class="AU8">
        Sunshine NGO Institute is proud to have a growing global footprint. We collaborate with international partners, local organizations, and community leaders to expand our impact and reach diverse communities across the world.
      </p>
    </div>
  </div>
  </div>
</div>

<div class="AU9">
  <div class="container">
    <div class="row">
      <div class="AU10 col-md-4">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-2" style="margin-right: 10px;">
              <img src="Images/Aboutus/minilogo1.jpg" alt="minilogo">
            </div>
            <div class="col-md-8">
              All our efforts are made possible only because of your support
            </div>
          </div>
        </div>
      </div>
      <div class="AU10 col-md-4">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-2" style="margin-right: 10px;">
              <img src="Images/Aboutus/minilogo2.jpg" alt="minilogo">
            </div>
            <div class="col-md-8">
              Your donations are tax exempted under 80G of the Indian Income Tax Act
            </div>
          </div>
        </div>
      </div>
      <div class="AU10 col-md-4">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-2" style="margin-right: 10px;">
              <img src="Images/Aboutus/minilogo3.jpg" alt="minilogo">
            </div>
            <div class="col-md-8">
              Your donation transactions are completely safe and secure
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php' ?>
<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>

        <section class="CL-section">
            <div class="overlay-service"></div>
                <div class="service">
                    <h1 class="ser1">STOP CHILD LABOUR</h1>
                </div>
        </section><br>

    <div class="container">
            <h3 class="heading-arrow">WHY CHILD LABOUR?</h3>
        </div>
            <div class="container">
            <p class="CL1" style="font-size: 20px;">Being a child rights NGO, sunshine has been working to stop child labour in India since its inception. Our mission is to create a secure and protective environment for all children, ensuring their well-being and safeguarding their rights. We firmly believe that no child should be subjected to neglect, violence, or exploitation and that marginalised children are particularly vulnerable to such risks.</p>
        </div>
        <br>

<div class="CL2">
    <div class="container">
    <?php
            // Fetch users from the database
            $sql = "SELECT id, title, description FROM services WHERE title = 'Statistics on Child Labour in India' ";
            $result = $conn->query($sql);

            // Check if there are any users
              if ($result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
                    $title = $row["title"];
                    $description = $row["description"];
                }    
      ?>
    <h2 class="text-center">
      <b class="fc">
        <?php echo $title ?>
        <!-- Statistics on Child Labour in India -->
      </b>
    </h2>
    <p class="text-center" style="font-size: 20px;">
    <?php echo $description ?>
      <!-- While we are working tirelessly to stop child labour in India, it remains a widespread problem and the numbers are alarming. It is a complex issue that requires sustained efforts to build a safer and happier environment for our children. -->
    </p>
    <div class="clr">
    <div class="stats-block">
        <h2 class="card-num">46</h2>
        <p style="font-size: 17px;">million children, between 6-18 years of age, do not go to school (UDISE 2016-17)</p>
    </div>
    <div class="stats-block">
        <h2 class="card-num">33</h2>
        <p style="font-size: 17px;">million working children in India between 6-18 years (Census 2011)</p>
    </div>
    <div class="stats-block">
        <h2 class="card-num">8.9</h2>
        <p style="font-size: 17px;">million child labourers attend school parallely (Census 2011)</p>
    </div>
</div>
</div>
</div>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h3>Join our fight against <b class="fc">child labour</b></h3>
            <p style="font-size: 18px;">To support our cause and contribute to the NGO fighting against child labour, you can make a donation to SUNSHINE. Your contribution will help rescue child labour victims, provide them with education and create a safer future for them.</p>
        </div>
        <div class="col-md-9">
            <div class="container text-center">
        <div class="row align-items-start">
            <div class="col-md-3" id="margin">
              <div class="card" style="width: 15rem;">
                <img src="Images\service\cb1.jpg" class="card-img-top" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Academic Support Centres</b></h5>                  
                </div>
              </div>
            </div>
            <div class="col-md-3" id="margin">
              <div class="card" style="width: 15rem;">
                <img src="Images\service\cb2.jpg" class="card-img-top" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Re-enroll School Drop Outs</b></h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 15rem;">
                <img src="Images\service\cb3.jpg" class="card-img-top" alt="bootstrap">
                <div class="card-body">
                  <h5 class="card-text"><b>Back To School Initiative</b></h5>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
<br>

<div class="container-fluid text-center">
    <img src="Images\service\ge.jpg" class="w-100">
</div>

<section class="impact-section">
      <div class="container">
        <h1 class="text-center mb-2" style="font-weight: bold; color: #1979A9;">Our Impact</h1>
          <div class="row">
          <div class="col-md-4">
              <div class="impact-box">
              <div class="impact-icon">
                <img src="Images\service\man.webp" alt="Icon">  </div>
              <div class="impact-number">2,14,537</div>
              <div class="impact-text mb-3">children from sunshine project areas enrolled in school in 2022-23</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="impact-box">
              <div class="impact-icon">
                <img src="Images\service\man.webp" alt="Icon">  </div>
              <div class="impact-number">30,000</div>
              <div class="impact-text mb-5">children re-enrolled in school</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="impact-box">
              <div class="impact-icon">
                <img src="Images\service\man.webp" alt="Icon">  </div>
              <div class="impact-number">9,465</div>
              <div class="impact-text mb-3">children protected from child labour in the past 3 years</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'include/footer.php' ?>

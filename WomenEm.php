<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>

    <section class="EW-section">
        <div class="overlay-service"></div>
            <div class="service">
                <h1 class="ser1">WOMEN EMPOWERMENT</h1>
            </div>
      </section><br>

    <div class="container">
            <h4 class="heading-arrow">WHY WOMEN EMPOWERMENT?</h4>
        </div>
            <div class="container">
            <p class="EW1">Over the past decade, gender equality has been recognized as crucial not only to the health of nations but also to their social and economic development. The promotion of gender equality and women empowerment is a key aspect of UNDP’s Sustainable Development Goals. It involves promoting equal rights, opportunities, and access to resources for women, enabling them to make independent choices and have control over their lives. Empowered women contribute to economic growth, social progress, and sustainable development. They play active roles in decision-making processes, education, healthcare, and leadership positions. Women empowerment fosters a more balanced and diverse society, where women's voices are heard, their talents are recognized, and their potential is fully realized. It is a vital step towards building a more equitable and harmonious world for all.</p>
        </div>
        <br>

        

 <div class="container-fluid mission-section">
    <div class="row">
    <?php
            // Fetch users from the database
            $sql = "SELECT id, title, description FROM services WHERE title = 'OUR MISSION' ";
            $result = $conn->query($sql);

            // Check if there are any users
              if ($result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
                    $title = $row["title"];
                    $description = $row["description"];
                }    
      ?>
      <!-- Mission Statement -->
      <div class="col-md-6 mission-text">
        <h2 class="fw-bold">
        <?php echo $title?>
          <!-- OUR MISSION -->
        </h2>
        <p class="EW1">
          <?php echo $description?>
            <!-- Our mission is to illuminate paths to equality and empowerment for women and girls. We are committed to creating a society where every woman has the resources, confidence, and support to realize her full potential.With compassion, courage, and resilience as our guiding values, we strive to break barriers, build confidence, and nurture change-makers. Sunshine NGO shines brighter with every empowered woman who transforms her life and inspires those around her. -->
        </p>
      </div>

      <!-- Mission Chart -->
      <div class="col-md-6 mission-chart">
        <img src="Images/service/EW1.png" alt="Mission Chart" class="w-50">
      </div>
    </div>

    <div class="row">
      <!-- Community Image -->
      <div class="col-md-12 community-image">
        <img src="Images/service/EW2.jpg" alt="Community Image" class="w-100">
      </div>
    </div>
  </div>

  <?php include 'include/footer.php' ?>
<?php include 'include/header.php' ?>
<?php include 'include/conn.php'?>

  <section class="edu-section">
    <div class="overlay-service"></div>
        <div class="service">
            <h1 class="ser1">EDUCATION IS IMPORTANT</h1>
        </div>
  </section><br>

    <div class="container">
            <h4 class="heading-arrow">WHY STUDENT EDUCATION?</h4>
        </div>
            <div class="container">
            <p class="ED1">If we need to address healthcare, poverty, population control, unemployment and human rights, there's no better way to start than providing education to children in need. Education not only empowers children to have a secure future but also helps them grow up as responsible national and global citizens. The Right to Education (RTE) Act which came into force in 2010 made education free and compulsory for all children in the age group of 6-14 years. But even a decade later, the learning curve has not been steady for many children in the country. The socio-economic conditions of parents and lack of proper learning in schools are hindrances which prevent many children from having education.</p>
        
    </div><br>
<div class="EDU2">
    <div class="container">
    <?php
            // Fetch users from the database
            $sql = "SELECT id, title, description FROM services";
            $result = $conn->query($sql);

            // Check if there are any users
              if ($result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
                    $title = $row["title"];
                    $description = $row["description"];
                }    
      ?>
            <h4 class="heading-arrow"><?php echo $title ?>
                <!-- WHAT WE DO -->
            </h4>
        </div>
            <div class="container">
            <p class="ED1"><?php echo $description ?>
                <!-- SUNSHINE’s flagship programme Mission Education works with the objective of empowering underprivileged children by providing education, nutrition, and wellness support. The programme is well aligned to the New Education Policy (2020), and the SDG Goal 4 (Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all). Mission Education works with children (3-18 years) living in difficult circumstances, children from poor families, differently abled children, disaster-struck children, abandoned and street children, and children living in tribal belts, remote villages and hard to reach areas. -->
            </p>
        <img src="Images\service\program.webp" class="w-100" >
    </div>
  </div><br>

<?php include 'include/footer.php' ?>
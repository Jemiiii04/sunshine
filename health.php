<?php include 'include/header.php' ?>
<?php include 'include/conn.php' ?>

  <section class="health-section">
    <div class="overlay-service"></div>
        <div class="service">
            <h1 class="ser1">HEALTHCARE FOR ALL</h1>
        </div>
  </section><br>

    <div class="container">
            <h4 class="heading-arrow">WHY HEALTHCARE?</h4>
        </div>
            <div class="container">
            <p class="HEL1">With a population of more than 1.4 Billion, last-mile delivery of healthcare in our country is a big challenge. The geospatial diversity of the country further aggravates the issues of accessibility and availability of healthcare in difficult terrains. With more than 65% of the population residing in rural areas with a smaller share of the overall healthcare infrastructure, and the urban slum dwellers prioritising everyday survival over healthcare, uneven distribution and lack of awareness also limit the uptake of existing healthcare services. It is crucial to address these gaps to meet the goals of Universal Health Coverage and support Govt of India's vision of Ayushman Bharat.</p>
        
    </div><br>
<div class="HEL2">
    <div class="container">
    <?php
            // Fetch users from the database
            $sql = "SELECT id, title, description FROM services WHERE title='WHAT HEALTHCARE DOES?' ";
            $result = $conn->query($sql);

            // Check if there are any users
              if ($result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
                    $title = $row["title"];
                    $description = $row["description"];
                }    
    ?>
            <h4 class="heading-arrow">
                <?php echo $title ?>
                <!-- WHAT HEALTHCARE DOES? -->
            </h4>
        </div>
            <div class="container">
            <p class="HEL1">
                <?php echo $description?>
                <!-- SUNSHINE’s comprehensive and community-centric health programme takes primary healthcare services to the doorsteps of underserved communities in both rural and urban India. Following a two pronged approach, the programme provides curative as well as preventive services, addressing the gaps in availability, accessibility and affordability of healthcare. -->
            </p><br>
    </div>
  </div><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="heading-arrow">OUR INTERVENTION</h4>

            <ul class="nav nav-pills mt-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile" aria-selected="true">Mobile Healthcare</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-telemedicine-tab" data-bs-toggle="pill" data-bs-target="#pills-telemedicine" type="button" role="tab" aria-controls="pills-telemedicine" aria-selected="false">Telemedicine</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-static-tab" data-bs-toggle="pill" data-bs-target="#pills-static" type="button" role="tab" aria-controls="pills-static" aria-selected="false">Static Clinics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-camps-tab" data-bs-toggle="pill" data-bs-target="#pills-camps" type="button" role="tab" aria-controls="pills-camps" aria-selected="false">Health Camps</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-govt-tab" data-bs-toggle="pill" data-bs-target="#pills-govt" type="button" role="tab" aria-controls="pills-govt" aria-selected="false">Govt. Convergence</button>
                </li>
            </ul>
            <div class="tab-content mt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-mobile" role="tabpanel" aria-labelledby="pills-mobile-tab">
                    <div class="intervention-box">
                        <img src="Images\service\mh.webp" alt="Mobile Healthcare">  <div class="intervention-content">
                            <p>Reaching the unreached through fully-equipped Mobile Healthcare Units staffed with doctors and paramedics, providing OPD services, point-of-care test facilities and medicines.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-telemedicine" role="tabpanel" aria-labelledby="pills-telemedicine-tab">
                    <div class="intervention-box">
                        <img src="Images\service\t.png" alt="Telemedicine"> <div class="intervention-content">
                            <p>Connecting people from remote rural areas with doctors for specialized healthcare from nearby urban health centres, through e-Health Kiosks and Telemedicine Centres staffed with paramedics</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-static" role="tabpanel" aria-labelledby="pills-static-tab">
                    <div class="intervention-box">
                        <img src="Images\service\sc.png" alt="Static Clinics"> <div class="intervention-content">
                            <p>Creating accessible static healthcare centres in remote rural communities providing OPD, medicines, point of care test facilities and counseling, with focus on Physiotherapy Services</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-camps" role="tabpanel" aria-labelledby="pills-camps-tab">
                    <div class="intervention-box">
                        <img src="Images\service\hc3.png" alt="Health Camps"> <div class="intervention-content">
                            <p>Providing need-based healthcare services to specific target groups through standalone health camps with specialized doctors, point of care tests, and sometimes surgical facilities</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-govt" role="tabpanel" aria-labelledby="pills-govt-tab">
                    <div class="intervention-box">
                        <img src="Images\service\gc.png" alt="Govt. Convergence"> <div class="intervention-content">
                            <p>Enhancing reach and capacity of Government Health Centres by integrating telemedicine at sub-centres, training of frontline workers and upgradation of PHCs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>

<?php include 'include/footer.php' ?>
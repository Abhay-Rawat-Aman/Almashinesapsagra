<?php
  include 'includes/database.php';
  include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php 
  include 'includes/head.php'; 
?>

<body class="about-page">

  <?php 
    include 'includes/navbar.php'; 
  ?>
  <main class="main">

    <!-- Page Title -->
    <div id="page-title-container"></div>
	 <!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <img src="assets/img/school.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Army Public School, Agra</h3>
              <p>
                Army Public School Agra is recognized as one of the finest educational institutes in the region. Established in 1991 under the aegis of AWES (Army Welfare Education Society, New Delhi), the school is affiliated to CBSE vide Affiliation No.2180005, primarily for imparting quality education to the children of Defence Personnel at an affordable cost.<br><br>
                Our UDise School code is 09151718707. School is running three streams Science, Commerce and Arts. The school has two campuses- junior wing, having classes I to VII and Senior Wing comprising of classes VIII to XII having strength of 2600 students approx
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Salient Features</h2>
      </div><!-- End Section Title -->


        <div class="row g-0">

          <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/lab1a.jpg" alt="">
          </div>

          <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">

              <div class="swiper-slide">
                
              <div class="item">
                  <h3 class="mb-3">High-Quality Education by Highly Qualified Teachers</h3>
                  <p>Our teaching team is comprised of experienced and certified professionals who bring both expertise and enthusiasm to the classroom, fostering academic excellence and holistic growth.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">English Medium for Imparting Education & Emphasis on Spoken English</h3>
                  <p>All subjects are taught in English to ensure fluency and confidence, with additional focus on interactive sessions and conversation practice to enhance spoken-English skills.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Fully Equipped Labs (Physics, Chemistry, Biology, Computer & Math)</h3>
                  <p>Students gain hands-on experience through well-furnished laboratory settings, allowing exploration and experimentation across core scientific and mathematical disciplines.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Various Subject-Related Quiz Competitions at Interschool & Inter-Cluster Level</h3>
                  <p>We organize engaging quiz contests across subjects, enabling students to test their knowledge, build competitive spirit, and network with peers from different schools and clusters.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Smart-Class Enabled Classrooms with Extra Marks Technology</h3>
                  <p>Every classroom is optimized with state-of-the-art smart-class infrastructure and “Extra Marks” digital tools for an interactive, multimedia enriched learning environment.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Academic Session: April to March</h3>
                  <p>Our academic year runs from April through March, structured to align with national education standards and provide a full one-year cycle of instruction and assessment.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Vacation Period: May to June</h3>
                  <p>Students enjoy a well-deserved break from late May to June, offering time for rest, enrichment activities, and preparation for the next academic session.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Admission Period: February to July</h3>
                  <p>Prospective students can apply for admission between February and July, giving families flexibility and ample time to complete enrolment formalities.</p>
                </div>
              </div><!-- End slide item -->
  

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <?php
      include 'includes/welcomeback.php';
    ?>

    
    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
      </div><!-- End Section Title -->

     <?php
        include 'includes/teammembers.php';
     ?>

    </section><!-- /Team Section -->

  </main>

  <?php 
    include 'includes/footer.php';
  ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <?php 
    include 'includes/script.php'; 
  ?>
	
 	<script>
    // Call the reusable function
    createPageTitle("About Us", "assets/img/banner-about.png");
  </script>

</body>
</html>
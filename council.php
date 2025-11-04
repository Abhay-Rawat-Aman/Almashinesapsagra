<?php
  include 'includes/database.php';
  include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include 'includes/head.php';
?>

<body class="services-page">

  <?php
    include 'includes/navbar.php';
  ?>
  <main class="main">

    <!-- Page Title -->
      <div id="page-title-container"></div>
	 <!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">


    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Alumni Council</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
          <?php
            include 'includes/council-cards.php';
          ?>
        </div>

      </div>

    </section><!-- /Recent Posts Section -->
    </div>

   
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
    createPageTitle("Alumni Council", "assets/img/council.png");
  </script>

</body>

</html>
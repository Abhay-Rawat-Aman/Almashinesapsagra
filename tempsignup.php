<!DOCTYPE html>
<html lang="en">

<?php
  include 'includes/head.php';
?>

<body class="contact-page">

  <?php
    include 'includes/navbar.php';
  ?>
  <main class="main">

    <!-- Page Title -->
      <div id="page-title-container"></div>
	<!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-12">
          
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Alumni Details</h2>
            </div><!-- End Section Title -->

          <?php
            include 'includes/tempregistration.php';
          ?>
            
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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
    createPageTitle("Alumni Temp Registration", "assets/img/contact-page-title-bg.jpg");
  </script>
</body>

</html>
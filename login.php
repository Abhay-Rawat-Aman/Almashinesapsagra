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

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3 style="text-align: justify;">Welcome back to the APS Agra Alumni Community!</h3>
                <p style="text-align: justify;">Every achievement of yours adds to the legacy of our school. Reconnect with old friends, celebrate your journey, and continue to inspire the generations to come. Together, we shine brighter!</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" class="form-control" name="email" placeholder="Enter Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required="">
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Login</button>
                </div>

              </div>
            </form>
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
    	createPageTitle("Alumni Council", "assets/img/contact-page-title-bg.jpg");
 	</script>
</body>

</html>
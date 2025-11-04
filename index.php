<?php
  include 'includes/database.php';
  include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include 'includes/head.php';
?>

<body class="index-page">

  <?php
    include 'includes/navbar.php';
  ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/council.png" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">Welcome to APS Agra Alumni Community!</h1>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>Reconnect, reminisce, and celebrate the shared bond that makes our school special.
Join us in creating new memories and nurturing old friendships. Together, we shine brightly as proud members of this cherished community.</p>
            </blockquote>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="about.php" class="btn-get-started">Know More About Us</a>
              <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <?php
    //why section
      include 'includes/comeback.php';
    ?>


    <!-- Features Section -->
    <section id="features" class="features section">

    <div class="details">
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
        <h4 class="details-heading">Welcome to the Army Public School, Agra Alumni Community</h4>
        <p class="details-text" style="text-align: justify;">
          Dear Alumni, we are delighted to welcome all our esteemed former students to the Army Public School, Agra Alumni Network — a platform dedicated to reconnecting our proud alumni and celebrating the enduring bond we share with our school. Your achievements and experiences continue to shape the rich legacy of APS Agra. Through this website, we invite you to reconnect with old friends and mentors, relive cherished memories, and stay informed about upcoming school events, including our much-awaited Alumni Meet. Together, let us celebrate the spirit of camaraderie, pride, and shared values that define our APS Agra family. We look forward to rekindling old connections and building new ones as we continue to grow and shine in our diverse journeys. Thank you for being an integral part of our legacy and our future.
        </p>
        <p class="details-signoff">
          With warm regards,<br>
          The Alumni Council<br>
          Army Public School, Agra
        </p>
        <a href="#about" class="btn-get-started">Get Started</a>
      </div>
    </div>
  </div>
</div>

    </section><!-- /Features Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Message for Alumni</h2>

      </div><!-- End Section Title -->

      <div class="container">
<!-- Blog Author Section -->
          <section id="blog-author" class="blog-author section">

          <div class="container">
          <div class="author-container d-flex align-items-center">
            <img src="assets/img/principal.png" class="author-img rounded-circle flex-shrink-0" alt="Dr. Rupali Gupta">
            <div class="author-details">
              <h4 class="author-name">Dr. Rupali Gupta</h4>
              <h5 class="author-position">Principal, Army Public School Agra</h5>
              <p class="author-message">
                Dear Alumni, Greetings from Army Public School Agra! Your achievements and accomplishments continue to inspire us. Join our Alumni Community to reconnect, reminisce, and create lasting bonds. Together, let’s illuminate the path of knowledge and excellence.
              </p>
              <p class="author-signoff">
                With pride and gratitude,<br>
                Dr. Rupali Gupta
              </p>
            </div>
          </div>
        </div>
          </section>

          <section id="blog-author" class="blog-author section">

          <div class="container">
          <div class="author-container d-flex align-items-center">
            <img src="assets/img/vp.png" class="author-img rounded-circle flex-shrink-0" alt="Mrs. Poonam Kohli">
            <div class="author-details">
              <h4 class="author-name">Mrs. Poonam Kohli</h4>
              <h5 class="author-position">Vice Principal, Army Public School Agra</h5>
              <p class="author-message">
                Dear Alumni, Warm greetings from Army Public School Agra! Join us in celebrating your achievements and rekindling cherished memories. Your presence in our Alumni Community inspires the next generation. Together, let's build an enduring network of support and excellence.
              </p>
              <p class="author-signoff">
                With pride and gratitude,<br>
                Mrs. Poonam Kohli
              </p>
            </div>
          </div>
        </div>
          </section>

          <section id="blog-author" class="blog-author section">

          <div class="container">
          <div class="author-container d-flex align-items-center">
            <img src="assets/img/teachers.png" class="author-img rounded-circle flex-shrink-0" alt="Teachers">
            <div class="author-details">
              <h4 class="author-name">Teachers</h4>
              <h5 class="author-position">Teachers, Army Public School Agra</h5>
              <p class="author-message">
               Dear Alumni, Sending warm wishes from your teachers at Army Public School Agra! We take immense pride in your accomplishments and the values you uphold. Join our Alumni Community to reconnect and inspire the young minds we nurture today. Together, let's continue to shine brightly!</p>
              <p class="author-signoff">
                With fond memories,<br>
                APS Agra Teaching Staff
              </p>
            </div>
          </div>
        </div>
          </section>

      </div>

    </section><!-- /Recent Posts Section -->


    <!-- Call To Welcomeback Section -->
    <?php
      include 'includes/welcomeback.php';
    ?>
    <!-- /Call To Welcomeback Section -->

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

</body>

</html>
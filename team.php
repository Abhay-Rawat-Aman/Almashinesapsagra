<?php
  include 'includes/database.php';
  include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
  include 'includes/head.php';
?>

<body class="team-page">

  <?php
    include 'includes/navbar.php';
  ?>

  <main class="main">

    <!-- Page Title -->
      <div id="page-title-container"></div>
	<!-- End Page Title -->

    <?php
      include 'includes/teammembers.php';
    ?>
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
    createPageTitle("Our Team", "assets/img/team-page-title-bg.jpg");
  </script>

</body>

</html>
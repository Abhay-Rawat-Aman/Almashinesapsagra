<div class="container">
  <div class="row gy-5">
    <?php
		$sel = "SELECT * FROM alumni_council";
		$result = $conn->query($sel);
      //echo "<script>alert('aman');</script>";
	  
	  while ($row = $result->fetch_assoc()) {
    ?>
        <div class="col-lg-6">
            <section class="blog-author section">
                <div class="author-container d-flex align-items-center">
                <img src="assets/img/council/<?php echo $row['image']?>" class="rounded-circle flex-shrink-0" alt=""><div class="social-links">
                <div class="author-details">
                    <h4 class="author-name"><?php echo $row['Name']?></h4>
                    <h5 class="author-position"><?php echo $row['positon']?></h5>
                    <p><?php echo $row['aboutus']?></p>
                    <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                </div>
            </section>
        </div>


    <?php
      }
    ?>
  </div>
</div>
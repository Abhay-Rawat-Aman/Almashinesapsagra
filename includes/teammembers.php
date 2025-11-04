<style>
@media (min-width: 992px) { /* laptop and up */
  .col-lg-5th {
    flex: 0 0 20%;   /* 100% / 5 = 20% */
    max-width: 20%;
  }
}
</style>
<!-- Team Section -->
    <section id="team" class="team section">

      <div class="container">

        <div class="row gy-4">

          <?php 
			$sel = "SELECT * FROM `teammembers`";
			$result = $conn->query($sel);
          while($row = $result->fetch_assoc()) {
		?>
          <div class="col-lg-5th col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <!--<img src="assets/img/team/<?php echo $row['Image']?>" class="img-fluid" alt="" height="12px"> -->
				  <div class="member-img" style="overflow: hidden;">
    <img src="assets/img/team/<?php echo $row['Image']?>" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;" alt="">
</div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row["Name"]?> </h4>
                <span><?php echo $row["Position"] ?></span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <?php
          }
          ?>
          
          
        </div>

      </div>

    </section><!-- /Team Section -->

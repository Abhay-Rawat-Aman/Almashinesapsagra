<!DOCTYPE html>
<html lang="en">

<?php
    include 'utility/head.php';
?>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-start mb-3"><center>Admin Login</center></h3>
                <form>
                  <div class="form-group">
                    <label>Username *</label>
                    <input type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" class="form-control p_input">
                  </div>
                  <div class="text-center d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="text-center d-grid gap-2">
                    <a href="../" class="btn btn-primary btn-block enter-btn">
                      Back to Home Page
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <?php
      include 'utility/script.php'
    ?>
  </body>
</html>
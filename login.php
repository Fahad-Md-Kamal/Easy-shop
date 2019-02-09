
<?php include_once'templates/header.php' ?>

  <!-- Navigation -->
        <?php include_once'templates/main_nav.php' ?>


  <!-- Page Content -->
  <div class="container formPage">

    <div class="row justify-content-center">

      <div class="col-lg-5">

      <form class="mt-5" action="php/user-login.php" method="post">

      <legend class="text-center">User Login</legend>

      <div class="form-group">
        <label for="email">User Email: </label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="pass">Password: </label>
        <input type="text" name="pass" class="form-control">
      </div>
      <div class="form-group text-right">
        <input type="submit" class="btn btn-success" value="SUBMIT">
      </div>

        <p class="h2">
        
        
        <?php if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        } ?>
        
        
        </p>
      </form>
        


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include_once'templates/footer.php' ?>


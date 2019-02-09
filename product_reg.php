
<?php include_once'templates/header.php' ?>

<!-- Navigation -->
      <?php include_once'templates/main_nav.php' ?>


<!-- Page Content -->
<div class="container formPage">

  <div class="row justify-content-center">

    <div class="col-lg-5">

    <form class="mt-5" action="php/product_reg.php" method="post" enctype="multipart/form-data">
    <legend class="text-center">User Registration</legend>

    <div class="form-group">
      <label for="product_name">Product Name: </label>
      <input type="text" name="product_name" class="form-control" id="product_name">
    </div>

    <div class="form-group">
      <label for="product_price">Price: </label>
      <input type="text" name="product_price" class="form-control" id="product_price">
    </div>

    <div class="form-group">
      <label for="dtl">Product Details: </label>
      <textarea type="text" name="dtl" class="form-control" id="dtl" placeholder="( Not more than 100 words )"></textarea>
    </div>

    <div class="form-group">
      <label for="img">Product Image: </label>
      <input type="file" name="img" id="img">
    </div>

    <div class="form-group text-right">
      <input type="submit" class="btn btn-success" value="SUBMIT">
    </div>
            <p class="h1 text-secondary"><?php 
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
            ?></p>
    </form>
      


    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include_once'templates/footer.php' ?>


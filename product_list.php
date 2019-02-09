
<?php include_once'templates/header.php' ?>

  <!-- Navigation -->
        <?php include_once'templates/main_nav.php' ?>


  <!-- Page Content -->
  <div class="container formPage">

    <div class="row">

      <div class="col-lg-3">

        <!-- < ?php include_once'templates/side-bar.php' ?> -->


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-12">
      <p class="h1 text-center my-4">Produts List</p>

<!-- slider -->
<?php

 include_once 'php/product_view.php';
 $product = products();


?>
<table class="table">
    <thead>
      <tr>
        <th>Product name</th>
        <th>Price name</th>
        <th>Details</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    
<?php 
foreach ($product as $row) {
  echo
    "<tr>
        <td>".$row["product_name"]."</td>
        <td>".$row["product_price"]."</td>
        <td>".$row["dtl"]."</td>
        <td><a class='btn btn-primary' href='#'>Edit</a>
        <a class='btn btn-danger' href='#'>Delete</a></td>
      </tr>";
}
?>


    
    </tbody>
  </table>
      <!-- < ?php include_once'templates/slider.php' ?> -->


        <div class="row">

<!-- page content -->
      <!-- < ?php include_once'templates/page-content.php' ?> -->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include_once'templates/footer.php' ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>

        <?php 
          if(isset($_SESSION['loggedIn'])){
        ?>
        <li class="nav-item">
            <a class="nav-link" href="product_list.php">Product list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product_reg.php">Product Reg</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#"><?php echo $_SESSION['User-name']; ?></a>
          </li>
          <li class ="nav-item">
            <a class="nav-link text-danger" href="php/logout.php">Log Out</a>
          </li>
          
          <?php 
            } else{ 
          ?>

          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>
          
          <?php } ?>  
        
        </ul>
      </div>
    </div>
  </nav>
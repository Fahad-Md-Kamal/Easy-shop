<?php 
   session_start();

 if($_POST){

   $product_name = $_POST["product_name"];
   $product_price = $_POST["product_price"];
   $dtl = $_POST["dtl"];
   
   $image = $_FILES['img']['name'];
// print_r($_FILES['img']['name']);
//    exit;

   if (empty($product_name)) {
      $_SESSION['msg'] = "Please provide product name";
      header("location:../product_reg.php?product_name=$product_name&product_price=$product_price&dtl=$dtl&img=$image");
   }
   elseif (empty($product_price) || !is_numeric($product_price)){
      $_SESSION['msg'] = "Please provide valid product's price";
      header("location:../product_reg.php?product_name=$product_name&product_price=$product_price&dtl=$dtl&img=$image");
   }
   elseif (empty($dtl)){
      $_SESSION['msg'] = "Please provide product's details";
      header("location:../product_reg.php?product_name=$product_name&product_price=$product_price&dtl=$dtl&img=$image");
   }elseif (empty($image)){
      $_SESSION['msg'] = "Please provide product's Image";
      header("location:../product_reg.php?product_name=$product_name&product_price=$product_price&dtl=$dtl&img=$image");
   }
   else
   {
      include_once 'dbconnection.php';
      $conn = connect();
      $sql = "CREATE TABLE products(
      id INT(2) PRIMARY KEY AUTO_INCREMENT,
      product_name VARCHAR(50), 
      product_price VARCHAR(100), 
      dtl VARCHAR(100),
      img VARCHAR(20))";

      $conn->query($sql);

      $sql = "SELECT * FROM products WHERE product_name = '$product_name'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
         $_SESSION['msg']= "Product already exists in the record";
      
      }else{

          
         $sql = "INSERT INTO products (product_name, product_price, dtl, img) VALUES
         ('$product_name','$product_price','$dtl','$image')";

        if ($conn->query($sql)) {
           move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$image);
            $_SESSION['msg'] = "Product Saved to database";
          
        }
          
      }

     }
 }
 header('location:../product_reg.php');



?>
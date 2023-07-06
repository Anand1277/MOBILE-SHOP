 <?php
 // Require mysql connection
 require ('database/DBController.php');
 

  // Require product class
 require ('database/Product.php');


  // Require cart class
 require ('database/Cart.php');
 
 //  DBController object
$db=new DBController();

// Product object
$product=new Product($db);
 $product__shuffle =$product->getData();


// cart object
$Cart=new Cart($db);




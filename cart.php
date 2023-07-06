<?php
// include header.php file
ob_start();
include ('header.php');
?>
   
   <!-- <!-Main section-  --> 
<?php

// cart area if not empty
count($product->getData(table:'cart')) ? include('Template/_cart-template.php') :  include('Template/notFound/_cart_notFound.php');

//End cart area

// Wishlist area
//   include('Template/_wishlist_template.php');
//End wishlist area

//  Top sale items -->
 include('Template/_new-phones.php');
//  <!-- Top sale items -->

?>

      

<?php
// include footer.php file
include ('footer.php');
?>
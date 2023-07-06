<?php
ob_start();
// include header.php file
include ('header.php');
?>
   
   <!-- <!-Main section-  --> 
<?php

//    Banner area
  include('Template/_banner-area.php');
//    End Banner area

//  Top sale items -->
 include('Template/_top-sale.php');
//  <!-- Top sale items -->


// <!-- Special price -->
 include('Template/_special-price.php');
// <!-- Special price -->

// <!-- Banner Ads --> 
 include('Template/_banner-ads.php');      
// <!-- Banner Ads --> 

//  <!-- New PHones Section -->
 include('Template/_new-phones.php');
//  <!-- New PHones Section -->

//  <!-- Blog section -->
 include('Template/_blogs.php');
//  <!-- Blog section -->
?>

      

<?php
// include footer.php file
include ('footer.php');
?>
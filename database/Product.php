<?php

// Use to fetch product area
class product
{
   public $db=null;
   
   public function __construct(DBController $db)
   {
    if(!isset($db->con)) return null;
    $this->db=$db;
   }

   public function getData($table='product'){
    $result=$this->db->con->query(query:"SELECT * FROM  {$table}");

    $resultArray=array();

    // Fetch Product data one by one
       while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $resultArray[]=$item;
       } 
       return $resultArray;
   }

   // get CART product using item_id
   public function getProduct($item_id=null,$table='product'){
      if(isset($item_id)){
       $result=$this->db->con->query(query:"SELECT * FROM  {$table} WHERE item_id={$item_id}");

       $resultArray=array();

    // Fetch Product data one by one
       while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $resultArray[]=$item;
       } 
       return $resultArray;
      }
   }



   public function updatedStock($itemid=null,$table="product")
   {
        if ($this->db->con != null){
            if ($itemid != null){
                
               
             $result2=$this->db->con->query(query:"Update {$table} SET Stock=Stock-1 WHERE item_id={$itemid}");
              return  $result2;
            }
         }

   }


      // to update Stock column
    public  function updateStock($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            
        $result2=$this->updatedStock($itemid);

            if ($result2){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }
}
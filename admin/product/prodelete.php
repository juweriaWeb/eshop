<?php
include "config.php";

if(isset($_GET['del'])){
    $delete =$_GET['del'];
    $query = mysqli_query($con,"delete
     from products where product_id ='$delete'");
    if($query){
     echo "delete howa";
        
    }
    else{
        echo "delete nhi howa";
    }
    }

?>
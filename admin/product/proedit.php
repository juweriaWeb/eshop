<?php
include "config.php";
$update= $_GET['edit'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['edit'])){
        $update = $_GET['edit'];
        $query = mysqli_query($con,"select * from users where product_id = '$update'");
    $row = mysqli_fetch_array($query);
?>
<form action="" method="post">
       <label for="">product_id</label>
       <input type="text" name="product_id" value="<?=$row['product_id'];?>">

       <label for="">product_name</label>
       <input type="product_name" name="product_name" value="<?=$row['product_name'];?>">

       <label for="">product_description</label>
       <input type="product_description" name="product_description" value="<?=$ow['product_description'];?>">

        <label for="">product_image1</label>
       <input type="product_image1" name="product_image1" value="<?=$row['product_image1'];?>">

       <label for="">product_image2</label>
       <input type="product_image2" name="product_image2" value="<?=$row['product_image2'];?>">

       <label for="">product_image3</label>
       <input type="product_image3" name="stateproduct_image3" value="<?=$row['product_image3'];?>">

       <label for="">product_category</label>
       <input type="product_category" name="product_category" value="<?=$ro['product_category'];?>">

       <label for="">product_price</label>
       <input type="product_price" name="product_price" value="<?=$row['product_price'];?>">

       <label for="">discount_price</label>
       <input type="discount_price" name="discount_price" value="<?=$row['discount_price'];?>">

       <input type="submit" value="update" name="change">


</form>
<?php } ;?>
</body>
</html>

<?php
    if (isset($_POST['change'])){
    $update = $_GET['edit']; 
    $product_id= $_POST['product_id'];
    $product_name=$_POST['product_name'];
    $product_description=$POST['product_description'];
    $product_image1=$_POST['product_image1'];
    $product_image2=$_POST['product_image2'];
    $product_image3=$_POST['product_image3'];
    $product_category=$_POST['product_category'];
    $product_price=$_POST['product_price'];
    $discount_price=$_POST['discount_price']

     $update_query = mysqli_query($con,"update products set product_id='$product_id',product_name='$product_name',product_description='$product_description',product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',product_category='$product_category',product_price='$product_price',discount_price='$discount_price' where product_id ='$update'");
            
            if($update_query){
                echo "update  howa";
            }
            else{
                echo "update nhi howa";
            }
            }
        

?>

</body>
</html>
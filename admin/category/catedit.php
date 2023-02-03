<?php
include "../../config.php";
// $update= $_POST['edit'];
// print_r($_POST);
print_r($_REQUEST);
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
    if(isset($_POST['edit'])){
        $update = $_POST['edit'];
        $query = mysqli_query($con,"select * from categories where category_id = '$update'");
    $row = mysqli_fetch_array($query);
?>
<form action="catedit.php" method="post">
      
       <label for="">category_title</label>
       <input type="category_title" name="category_title" value="<?=$row['category_title'];?>">

       <label for="">category_description</label>
       <input type="category_description" name="category_description" value="<?=$row['category_description'];?>">

       <input type="submit" value="update" name="change">


</form>
<?php } ;?>
</body>
</html>

<?php
    if (isset($_POST['change'])){
    $update = $_GET['edit']; 
    $category_id= $_POST['category_id'];
    $category_title = $_POST['category_title'];
    $category_description = $_POST['category_description'];
    

    $update_query = mysqli_query($con,"update categories set category_id='$category_id',category_title='$category_title',category_description='$category_description',
    where category_id ='$update'");
            
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
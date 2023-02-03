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
        $query = mysqli_query($con,"select * from users where user_id = '$update'");
    $row = mysqli_fetch_array($query);
?>
<form action="" method="post">
       <label for="">Name</label>
       <input type="text" name="name" value="<?=$row['name'];?>">

       <label for="">Email</label>
       <input type="email" name="email" value="<?=$row['email'];?>">

       <label for="">password</label>
       <input type="password" name="password" value="<?=$row['password'];?>">

       <label for="">Address</label>
       <textarea name ="address"><?= $row['address'];?></textarea>

       <label for="">pincode</label>
       <input type="pincode" name="pincode" value="<?=$row['pincode'];?>">

       <label for="">city</label>
       <input type="city" name="city" value="<?=$row['city'];?>">

       <label for="">state</label>
       <input type="state" name="state" value="<?=$row['state'];?>">

       <label for="">mobile</label>
       <input type="mobile" name="mobile" value="<?=$row['mobile'];?>">

       <label for="">user_pic</label>
       <input type="pic" name="pic" value="<?=$row['user_pic'];?>">

       <input type="submit" value="update" name="change">


</form>
<?php } ;?>
</body>
</html>

<?php
    if (isset($_POST['change'])){
    $update = $_GET['edit']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
     // imge part strt
     $img= $_FILES['img']['name'];
     $tmp_img= $_FILES['img'] ['tmp_name'];
     move_uploaded_file($tmp_img,"image/$img");

              $update_query = mysqli_query($con,"update users set name='$name',email='$email',password='$password',address='$address',pincode='$pincode',city='$city',state='$state',mobile='$mobile',user_pic='$user_pic' where user_id ='$update'");
            
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
<?php
include ("../config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<!-- 1st form strt  -->
<h1><font color="bold black"></font></h1>
    <h1> USERS </h1>
    
    <form action="" method="post">
       <label for="">Name</label>
       <input type="text" name="name"><br>

       <label for="">Email</label>
       <input type="email" name="email"><br>

       <label for="">password</label>
       <input type="password" name="password"><br>

       <label for="">Address</label>
       <textarea name ="address"></textarea><br>

       <label for="">pincode</label>
       <input type="pincode" name="pincode"><br>

       <label for="">city</label>
       <input type="city" name="city"><br>

       <label for="">state</label>
       <input type="state" name="state"><br>

       <label for="">mobile</label>
       <input type="mobile" name="mobile"><br>

       <label for="">user_pic</label>
       <input type="user_pic" name="pic"><br>

       <input type="submit"name="send">
</form>
<!-- 1st form end -->

        <!-- 1st table strt  -->
    <table border="8" width="50%" >
    <tr>
        <th>user_id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>pincode</th>
        <th>city</th>
        <th>state</th>
        <th>mobile</th>
        <th>user_pic</th>
        <th>Delete</th>
        <th>Edit</th>
        
    </tr>
<?php
    $result = mysqli_query($con,"select * from users");
    while($get = mysqli_fetch_array($result)){?>
<tr>
    <td><?= $get['user_id'];?></td>
    <td><?= $get['name'];?></td>
    <td><?= $get['email'];?></td>
    <td><?= $get['address'];?></td>
    <td><?= $get['pincode'];?></td>
    <td><?= $get['city'];?></td>
    <td><?= $get['state'];?></td>
    <td><?= $get['mobile'];?></td>
    <td><img src="image/<?=$row['img'];?>" class="card-img-top" height="300px">
    <td class="btn-group"><a href="delete.php?del=<?=$get['user_id'];?>" class="btn btn-danger">Delete</a></td>
    <td class="btn-group"><a href="edit.php?edit=<?=$get['user_id'];?>" class="btn btn-primary">Edit</a></td>
                        
    <?php } ;?>
    </tr>
</table>
<!-- 1st table end  -->
</body>
</html>

<?php
include ("../../config.php");

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
    <h1> PRODUCTS </h1>
    
    <form action="" method="post">
       <label for="">product_id</label>
       <input type="text" name="product_id"><br>

       <label for="">product_name</label>
       <input type="product_name" name="product_name"><br>

       <label for="">product_description</label>
       <input type="product_description" name="product_description"><br>

       <label for="">product_image1</label>
       <input type="product_image1" name="product_image1"><br>

       <label for="">product_image2</label>
       <input type="product_image2" name="product_image2"><br>

       <label for="">product_image3</label>
       <input type="product_image3" name="product_image3"><br>

       <div class="form-group">
                                <label class="m-0 p-0 text-muted small">category</label>
                                <select class="form-control" name="product_category">
                                    <option>select category</option>
                                    <?php 

                                    $calling_cat = mysqli_query($con,"SELECT * FROM categories");
                                    while($cat = mysqli_fetch_array($calling_cat)):
                                    ?>
                                    <option value="<?= $cat['category_id'];?>"><?= $cat['category_title'];?></option>
                                    <?php endwhile;?>
                                </select>
                            </div>

       <label for="">product_price</label>
       <input type="product_price" name="product_price"><br>

       <label for="">discount_price</label>
       <input type="discount_price" name="discount_price"><br>

       <input type="submit"name="send">
</form>
<!-- 1st form end -->

        <!-- 1st table strt  -->
    <table border="8" width="50%" >
    <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>product_description</th>
        <th>product_image1</th>
        <th>product_image2</th>
        <th>product_image3</th>
        <th>product_category</th>
        <th>product_price</th>
        <th>discount_price</th>
        <th>Delete</th>
        <th>Edit</th>
        
    </tr>
<?php
    $result = mysqli_query($con,"select * from products inner join categories on products.product_category=categories.category_id");
    while($get = mysqli_fetch_array($result)){?>
<tr>
    <td><?= $get['product_id'];?></td>
    <td><?= $get['product_name'];?></td>
    <td><?= $get['product_description'];?></td>
    <td><?= $get['product_image1'];?></td>
    <td><?= $get['product_image2'];?></td>
    <td><?= $get['product_image3'];?></td>
    <td><?= $get['category_title'];?></td>
    <td><?= $get['discounted_price'];?></td>
    <td><?= $get['product_price'];?></td>
    <td class="btn-group"><a href="delete.php?del=<?=$get['product_id'];?>" class="btn btn-danger">Delete</a></td>
    <td class="btn-group"><a href="edit.php?edit=<?=$get['product_id'];?>" class="btn btn-primary">Edit</a></td>
                        
    <?php } ;?>
    </tr>
</table>
<!-- 1st table end  -->
</body>
</html>

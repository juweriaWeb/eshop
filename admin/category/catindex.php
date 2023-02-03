<?php
include ("../../config.php");
// C:\xampp\htdocs\usersCrud\config.php
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
<!-- <h1><font color="bold black"></font></h1>
    <h1> CATEGORY</h1>
    
    <form action="" method="post">
       <label for="">category_id</label>
       <input type="text" name="name"><br>

       <label for="">category_title</label>
       <input type="category_title" name="category_title"><br>

       <label for="">category_description</label>
       <input type="category_description" name="category_description"><br>

       <input type="submit"name="send">
</form> -->
<!-- 1st form end -->

        <!-- 1st table strt  -->
    <table border="6" width="50%" >
    <tr>
        <th>category_id</th>
        <th>category_title</th>
        <th>category_description</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
<?php
    $result = mysqli_query($con,"select * from categories");
    while($get = mysqli_fetch_array($result)){?>
<tr>
    <td><?= $get['category_id'];?></td>
    <td><?= $get['category_title'];?></td>
    <td><?= $get['category_description'];?></td>
    <td class="btn-group"><a href="catdelete.php?del=<?= $get['category_id'];?>" class="btn btn-danger">Delete</a></td>
    <td class="btn-group"><a href="catedit.php?edit=<?= $get['category_id'];?>" class="btn btn-primary">Edit</a></td>
                        
    <?php } ;?>
    </tr>
</table>
<!-- 1st table end  -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header display-1">Signup Here</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label for="">category_id</label>
                            <input type="text" name="category_id" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">category_title</label>
                            <input type="category_title" name="category_titlel" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">category_description</label>
                            <input type="category_description" name="category_description" class="form-control">
                        </div>

                        <div class="mb-2">
                            <input type="submit" value="Signup" name="send" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['send'])){
        $name = $_POST['category_id'];
        $email = $_POST['category_title'];
        $password = $_POST['category_description'];


        $signup = mysqli_query($con,"insert into categories(category_id,category_title,category_description,)values('$category_id','$category_title','$category_description')");
      
        if($signup){
           echo "yes";
        }
        else{
            echo "nhich hua";
        }

    }
?>
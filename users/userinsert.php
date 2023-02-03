<?php
    include("../config.php");
 
   ?>
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
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Image</label>
                            <input type="file" name="user_pic" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="">pincode</label>
                            <input type="text" name="pincode" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">city</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">state</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="">mobile</label>
                            <input type="text" name="mobile" class="form-control">
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $mobile = $_POST['mobile'];
        

//Image Work
        $img = $_FILES['user_pic'] ['name'];
        $tmp_img = $_FILES['user_pic'] ['tmp_name'];
        move_uploaded_file($tmp_img,"image/$img");    


        $signup = mysqli_query($con,"insert into users(name,email,password,address,pincode,city,state,mobile,user_pic)values('$name','$email','$password','$address','$pincode','$city','$state','$mobile','$img')");
      
        if($signup){
           echo "yes";
        }
        else{
            echo "nhich hua";
        }

    }
?>
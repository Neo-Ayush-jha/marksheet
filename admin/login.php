<?php include "../function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <?php include "../header.php"; ?>
    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-lg-6 col-sm-8 shadow mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <h2 class="h4 text-center text-lightfw-bolder">Login Here</h2>
                        <div class="card-header">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="">USER ID.</label>
                                    <input type="text" name="user_id" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">USER PASSWORD</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="go" class="btn btn-danger rounded-pill fw-bolder fst-italic w-100">
                                </div>
                            <div class="mt-3 mt-4">
                                <a href="index.php" class="text-primary float-start">SingUp</a>
                                    <a href="login.php" class="text-primary float-end">Forget Password</a>
                            </div>
                                
                            </form>
                            
                        <?php
                        if(isset($_POST['go'])){
                            $user_id = $_POST['user_id'];
                            $password=$_POST['password'];

                            $check = mysqli_query($connect, "select * from account where user_id='$user_id' AND password='$password'" );
                            $count= mysqli_num_rows($check);

                            if($count > 0){
                                $_SESSION['user']=$user_id;
                                header("location: index.php");
                                die();
                            }
                            else{
                                echo"<script>alert('email and password is incorrect')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
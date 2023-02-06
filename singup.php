<?php include "function.php"; ?>
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
    <?php include "header.php"; ?>
    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-lg-6 col-sm-8 shadow mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <h2 class="h4 text-center text-lightfw-bolder">CREATE NEW ACCOUNT</h2>
                        <div class="card-header">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="">NAME</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">FATHER NAME</label>
                                    <input type="text" name="father" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">SCHOOL NAME</label>
                                    <input type="text" name="school" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">CONTACT</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">EMAIL ID</label>
                                    <input type="email" name="user_id" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">USER PASSWORD</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="singup" class="btn btn-danger rounded-pill fw-bolder fst-italic w-100">
                                </div>
                            </div>
                            </form>
                           <?php
                                if(isset($_POST['singup'])){
                                    $data = [
                                        'name' => $_POST['name'],
                                        'father' => $_POST['father'],
                                        'school' => $_POST['school'],
                                        'contact' => $_POST['contact'],
                                        'password' => $_POST['password'],
                                        'user_id' => $_POST['user_id']
                                    ];
                                    insertData('account',$data);
                                    refresh();
                                    // if($query){
                                    //     $_SESSION['user_id'] = $user_id;
                                    //     echo"<script>window.open('index.php','_self')</script>";
                                    // }
                                    // else{
                                    //     echo"<script>alert('failed')</script>";
                                    // }
                                }
                                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


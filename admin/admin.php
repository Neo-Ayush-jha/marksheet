
<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result management system </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <?php include "header.php";?>

    <div class="container-fluid mt-5">
        
        <div class="row">
            <div class="col mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Father name</label>
                                <input type="text" name="father" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Mother name</label>
                                <input type="text" name="mother" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">School</label>
                                <input type="text" name="school" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="row g-1 mb-3">
                                <div class="mb-3 col">
                                    <label for="">maths</label>
                                    <input type="text" name="maths" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="">science</label>
                                    <input type="text" name="science" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="">sst</label>
                                    <input type="text" name="sst" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                            <div class="mb-3 col">
                                    <label for="">hindi</label>
                                    <input type="text" name="hindi" class="form-control">
                                </div>
                                <div class="mb-3 col">
                                    <label for="">english</label>
                                    <input type="text" name="english" class="form-control">
                                </div>
                            </div>
                                <div class="mb-3 col">
                                    <label for="">password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Create" name="create" class="btn btn-success w-100">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                               $data = [
                                   'name' => $_POST['name'],
                                   'father' => $_POST['father'],
                                   'mother' => $_POST['mother'],
                                   'address' => $_POST['address'],
                                   'school' => $_POST['school'],
                                   'contact' => $_POST['contact'],
                                   'email' => $_POST['email'],
                                   'maths' => $_POST['maths'],
                                   'science' => $_POST['science'],
                                   'sst' => $_POST['sst'],
                                   'english' => $_POST['english'],
                                   'hindi' => $_POST['hindi'],
                                    'password' => $_POST['password']
                               ];
                               insertData('student',$data);
                            //    refrsh();
                            }
                        ?>
                    </div>
                </div>
            </div>    
        </div>

        
        <!-- news update -->
        <div class="row">
            <div class="col">
                 <div class="card">
                    <div class="card-body  ">
                        <h2 class="h4 text-center text-lightfw-bolder">UPDATE NEWS</h2>
                        <div class="card-header">
                            <form action="" method="post">
                                <div class="mb-3">
                                   <input type="text" class="form-control" name="news_title" placeholder="enter News">
                                   <input type="submit" name="cat_insert" class="btn btn-success">
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['news_insert'])){
                                    $news_title=$_POST['news_title'];
                                    $query = mysqli_query($connect,"insert into news(news_title) value ('$news_title')");
                                    if($query){
                                        echo"<script>window.open('result.php','_self')</script>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html




<?php include "function.php"; 
// if(!isset($_SESSION['user'])){
//     // echo"<script>window.open('login.php''_self')</script>";
//     header("location: login.php");
//     die();
// }

?>
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
            <!-- <div class="col-3">
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
                                   'hindi' => $_POST['hindi']

                               ];
                               insertData('student',$data);
                            //    refrsh();
                            }
                        ?>
                    </div>
                </div>
            </div> -->
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Father</th>
                            <th>Mother</th>
                            <th>Address</th>
                            <th>School</th>
                            <th>Contact</th>
                            <th>Email</th>
                            
                            <th>Total Marks</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                        <?php
                            $data = callingData("student");
                            foreach ($data as $value) {
                        ?>
                                    <tr>
                                        <td><?= $value['id'];?></td>
                                        <td><?= $value['name'];?></td>
                                        <td><?= $value['father'];?></td>
                                        <td><?= $value['mother'];?></td>
                                        <td><?= $value['address'];?></td>
                                        <td><?= $value['school'];?></td>
                                        <td><?= $value['contact'];?></td>
                                        <td><?= $value['email'];?></td>

                                       <td><?= $total = $value['english'] + $value['hindi'] + $value['sst'] + $value['science'] + $value['maths'];?></td>

                                        <td>
                                            <a href="view.php?roll=<?= $value['id'];?>" class="btn btn-success">View Result</a>
                                            <a href="index.php?del=<?= $value['id'];?>" class="btn btn-danger">X</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</body>
</html




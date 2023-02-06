<?php include "function.php";
loginRequired();
$email=$_SESSION['user'];
$data =viewSingleData("student","email = '$email'");
$result = 0;
if($data['maths'] < 30 || $data['science'] < 30 || $data['sst'] < 30 || $data['english'] < 30 || $data['hindi'] < 30 ){
    $result = -1;
}
?>
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
    <button class="btn btn-danger px-0 py-0 ms-5 mt-3"><a href="logout.php" class="nav-link text-white">Logout</a>
</button>
    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-lg-6 sm-12 mx-auto">
                <div class="card border shadow">
                    <div class="card-body p-0">
                        <table class="table">
                            <tr class="bg-primary text-white text-center mt-3"><th colspan="4">PERSONAL DETAILS</th>
                        </tr>
                            <tr>
                                <th colspan="2">NAME</th>
                                <td colspam="2"><?= $data['name'];?></td>
                        </tr>
                        </tr>
                            <tr><th colspan="2">FATHER NAME</th>
                            <td colspam="2"><?= $data['father'];?></td>
                        </tr>
                            <tr><th colspan="2">MOTHER NAME</th>
                            <td colspam="2"><?= $data['mother'];?></td>
                        </tr>
                            <tr><th colspan="2">SCHOOL NAME</th>
                            <td colspam="2"><?= $data['school'];?></td>
                        </tr>
                            <tr><th colspan="2">ADDRESS</th>
                            <td colspam="2"><?= $data['address'];?></td>
                        </tr>
                            <tr><th colspan="2">EMAIL</th>
                            <td colspam="2"><?= $data['email'];?></td>
                        </tr>
                            <tr><th colspan="2">CONTACT</th>
                            <td colspam="2"><?= $data['contact'];?></td>
                        </tr>
                        <tr class="bg-danger text-white text-center mb-5">
                            <th colspan="4">MARKS DETAILS</th>
                        </tr>
                        <tr>
                            <th>SUBJECT</th>
                            <th>TOTAL MARKS</th>
                            <th>PASS MARKS</th>
                            <th>OBTAIN MARKS</th>
                        </tr>
                        <tr>
                            <th>MATHS</th>
                            <td>100</td>
                            <td>30</td>
                            <td><?= $data['maths']; ?><?= ($data['maths']<30)? "F" : "";?></td>
                        </tr>
                        <tr>
                            <th>SCIENCE</th>
                            <td>100</td>
                            <td>30</td>
                            <td><?= $data['science']; ?><?= ($data['science'] <30)?"F":"";?></td>
                        </tr>
                        <tr>
                            <th>SST</th>
                            <td>100</td>
                            <td>30</td>
                            <td><?= $data['sst']; ?><?= ($data['sst']<30 )? "F":"";?></td>
                        </tr>
                        <tr>
                            <th>ENGLISH</th>
                            <td>100</td>
                            <td>30</td>
                            <td><?= $data['english']; ?><?= ($data['english']<30 )? "F":"";?></td>
                        </tr>
                        <tr>
                            <th>HINDI</th>
                            <td>100</td>
                            <td>30</td>
                            <td><?= $data['hindi'];?> <?= ($data['hindi'] < 30 )? "F" : "";?></td>
                        </tr>
                        <tr class="bg-success text-white text-center mt-3">
                            <th colspan="4">RESULT DETAILS</th>
                        </tr>
                        <tr>
                            <th colspan="2">TOTAL MARKS</th>
                            <td colspan="2"><?= $total = $data['maths'] + $data['science'] + $data['sst'] + $data['english'] + $data['hindi'] ;?></td>
                        </tr>
                        <tr>
                            <th colspan="2">DIVISION</th>
                            <th colspan="2"><?= ($total >=300 && $result == 0)? "1st Division": (($total >=250 && $result == 0)? "2nd Division": (($total >=150 && $result == 0)? "3rd Division": "fail")); ?> </th>
                        </tr>
                        </table>

                        <a href="" class="btn btn-info d-print-none w-100" onClick="window.print()"> PRINT MARKSHEET<i class="bi bi-printer-fill ms-3 "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_GET['del'])){
    $id =$_GET['del'];
    deleteData('student',"id='$id'");
    refresh();
}
?>
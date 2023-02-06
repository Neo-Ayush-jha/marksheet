<?php
$connect = mysqli_connect('localhost','root','','marks')or die("db connection error");
session_start();
// insert data

function insertData($table,$array){
    $cols = implode(",",array_keys($array));
    $values = implode("','",array_values($array));
    global $connect;
    $query = mysqli_query($connect ,"insert into $table($cols) value('$values')");
    return $query;
}

// calling data
function callingData($table){
    global $connect;
    $result = [];
    $query = mysqli_query($connect,"select * from $table");
    while($row = mysqli_fetch_array($query)){
        $result[] = $row;
    }
    return $result;
}
// view
function viewSingleData($table,$cond){
    global $connect;
    $query  = mysqli_query($connect,"select * From $table where $cond");
    $data = mysqli_fetch_array($query);
    return $data;
}
// delete data
function deleteData($table,$cond=NULL){
    global $connect;
    if($cond==NULL){
        return "query failed";
    }
    else{
        $query = mysqli_query($connect ,"delete from $table where $cond");
        return $query;
    }
}
// page refresh
function refresh($page="result.php"){
    echo"<script>window.open('$page','_self')</script>";
}

// login requir
function loginRequired(){
    if(!isset($_SESSION['user'])){
        refresh("login.php");
    }
}
?>
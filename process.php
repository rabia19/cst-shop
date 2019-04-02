<?php

session_start();

$db= new mysqli('localhost', 'root', '', 'products') or die(mysqli_error($db));

$id=0;
$update=false;
$id='';
$product_name='';
$price='';
$product_description='';
$about='';
$using_inf='';
$composition='';


if(isset($_POST['save'])){
    $id=$_POST['id'];
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $product_description=$_POST['product_description'];
    $about=$_POST['about'];
    $using_inf=$_POST['using_inf'];
    $composition=$_POST['composition'];

    $db->query("INSERT INTO product (id, product_name, price, product_description, about, using_inf, composition) VALUES('$id', '$product_name', '$price', '$product_description', '$about', '$using_inf', '$composition')") or
    die($db->error);

    $_SESSION['message']="Record has been saved";
    $_SESSION['msg_type']="success";

    header("location: admin.php");

}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query("DELETE FROM product WHERE id=$id") or die($db->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";

    header("location: admin.php");

}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $db->query("SELECT * FROM product WHERE id=$id") or die($db->error());
    if(count($result)==1){
        $row = $result->fetch_array();
        $id = $row['id'];
        $product_name = $row['product_name'];
        $price = $row['price'];
        $product_description = $row['product_description'];
        $about = $row['about'];
        $using_inf = $row['using_inf'];
        $composition = $row['composition'];
    }

}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $id=$_POST['id'];
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $product_description=$_POST['product_description'];
    $about=$_POST['about'];
    $using_inf=$_POST['using_inf'];
    $composition=$_POST['composition'];

    $db->query("UPDATE product SET id='$id', product_name= '$product_name',
    price= '$price',product_description= '$product_description',about= '$about',
    using_inf= '$using_inf',composition= '$composition' WHERE id=$id") or die($db->error());
   
   $_SESSION['message']="Record has been updated";
   $_SESSION['msg_type']="warning";

   header('location: admin.php');


   }







?>
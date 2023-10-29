<?php
include "config.php";

$category=mysqli_real_escape_string($conn, $_POST['category']);
$sql="INSERT INTO category() VALUES('$post_title', '$post_content', '$category', '$date')";
$result=mysqli_query($conn, $sql) or die("Connection Failed");
if($result){
    header("location: {$hostname}/admin/post.php");
 }else{
   echo "Post upload unsuccessfull";
 }
 
?>
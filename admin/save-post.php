<?php
include "config.php";

$post_title=mysqli_real_escape_string($conn, $_POST['post_title']);
$post_content=mysqli_real_escape_string($conn, $_POST['post_content']);
$category=mysqli_real_escape_string($conn, $_POST['category']);
$date=date('d M, Y');

$sql="INSERT INTO post(title, content, category, date) VALUES('$post_title', '$post_content', '$category', '$date')";
$result=mysqli_query($conn, $sql) or die("Connection Failed");
if($result){
    header("location: {$hostname}/admin/post.php");
 }else{
   echo "Post upload unsuccessfull";
 }
 
?>

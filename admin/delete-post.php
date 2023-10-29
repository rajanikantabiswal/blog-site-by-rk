<?php
include "config.php";
$post_id=$_GET['id'];
$sql="DELETE FROM post WHERE post_id=$post_id";
$result=mysqli_query($conn, $sql) or die("Query failed");

if($result){
    header("location: {$hostname}/admin/post.php");
 }else{
   echo "Post delete unsuccessfull";
 }
?>
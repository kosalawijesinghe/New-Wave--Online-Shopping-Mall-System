<?php
if (isset($_GET['cid'])){
    $cid = $_GET['cid'];
    include("configde.php");
    $sql = "DELETE FROM crud WHERE cid=$cid";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"] = "Category Deleted Successfully";
        header("Location:indexd.php");
    }
}
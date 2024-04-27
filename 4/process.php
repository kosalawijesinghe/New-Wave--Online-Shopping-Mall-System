<?php
include("configde.php");
if (isset($_POST["create"])) {
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $c_des = mysqli_real_escape_string($conn, $_POST["c_des"]);
    $sql = "INSERT INTO crud (type, c_des) VALUES ('$type', '$c_des')";
    if (mysqli_query($conn , $sql)) {
        session_start();
        $_SESSION["create"] = "Category Added Successfully";
        header("Location:indexd.php");
    } else {
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $c_des = mysqli_real_escape_string($conn, $_POST["c_des"]);
    $cid = mysqli_real_escape_string($conn, $_POST["cid"]);
    $sql = "UPDATE crud SET type = '$type', c_des='$c_des' WHERE cid=$cid";
    if (mysqli_query($conn , $sql)) {
        session_start();
        $_SESSION["update"] = "Category Updated Successfully";
        header("Location:indexd.php");
    } else {
        die("Something went wrong");
    }
}
?>
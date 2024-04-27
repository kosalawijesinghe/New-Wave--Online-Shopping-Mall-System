<?php
   $conn=mysqli_connect("localhost","root","","new_wave"); 
    if(!$conn) { die(" Connection Error "); } 
if(isset($_GET['Del']))
         {
             $id = $_GET['Del'];
             $query = " delete from contact_us where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:view_A.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view_A.php");
         }
         
 ?>      
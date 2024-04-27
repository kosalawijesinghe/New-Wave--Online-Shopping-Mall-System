<?php
   $con=mysqli_connect("localhost:3306","root","","new_wave"); 
    if(!$con) { die(" Connection Error "); } 
if(isset($_GET['Del']))
         {
             $id = $_GET['Del'];
             $query = " delete from `signup db` where id = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
         
 ?>      
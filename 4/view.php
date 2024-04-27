<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Category Details</title>
    <style>
    .category-details{
    margin-top: 200px;
	
    background:#f1f1f1;
    padding :50px 180px;

}
    </style>
</head>
<body>
   <fieldset>
    <header class="d-flex justify-content-between my-4">
            <h1>Category Details</h1>
            <div><a href="indexd.php" class="btn btn-primary">Back</a>
       </fieldset>
		
		<fieldset>
		
        <div class="category-details">
            <?php
            if(isset($_GET["cid"])){

                $cid = $_GET["cid"];
                include("configde.php");
                $sql = "SELECT *FROM crud WHERE cid=$cid";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);

             ?>
               <h2>Type</h2>
               <p><?php echo $row["type"]; ?></p>
               <h2>Description</h2>
               <p><?php echo $row["c_des"]; ?></p>
               <?php
            }
           ?> 
        </div>
    </div> 
</fieldset>	
</header>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Edit Category</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Category</h1>
            <div>
                <a href="indexd.php" class="btn btn-primary">Back</a>
            </div>
        </header>
                
        <?php
        if (isset($_GET["cid"])){
            $cid=$_GET["cid"];
            include("configde.php");
            $sql="SELECT * FROM crud WHERE cid=$cid";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
        ?>
        
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Category</option>
                    <option value="Sport & Outdoor" <?php if($row['type']=="Sport & Outdoor") {echo "selected";} ?>>Sport & Outdoor</option>
                    <option value="Groceries" <?php if($row['type']=="Groceries") {echo "selected";} ?>>Groceries</option>
                    <option value="Babies & Toys" <?php if($row['type']=="Babies & Toys") {echo "selected";} ?>>Babies & Toys</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" value="<?php echo $row["c_des"]; ?>" class="form-control" name="c_des" placeholder="Category Description">
            </div>  
            <input type="hidden" name="cid" value='<?php echo $row['cid']; ?>'> 
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="Edit Category">
            </div>
        </form>  
    <?php
    }
    ?>

    </div>
</body>
</html>

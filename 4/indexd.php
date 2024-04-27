<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Category List</title>
</head>
<body>
<div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Category List</h1>
            <div><a href="create.php" class="btn btn-primary">Add New Category</a>
        </div>      
        </header>
        <?php
        session_start();
        if(isset($_SESSION["create"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["create"];
                unset($_SESSION["create"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        
        if(isset($_SESSION["edit"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["edit"];
                unset($_SESSION["edit"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        
        if(isset($_SESSION["delete"])){
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["delete"];
                unset($_SESSION["delete"]);
                ?>
            </div>
            <?php
        }
        ?>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("configde.php");
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($conn,$sql);
                
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["cid"];?></td>
                        <td><?php echo $row["type"];?></td>
                        
                        <td>
                            <a href="view.php?cid=<?php echo $row["cid"]; ?>" class="btn btn-info">Read More</a>
                            <a href="edit.php?cid=<?php echo $row["cid"]; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?cid=<?php echo $row["cid"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <?php
                }

               
                
                ?>

            </tbody>
        </table>
    </div>   
</body>
</html>
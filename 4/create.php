<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add New Category</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Category</h1>
            <div><a href="indexd.php" class="btn btn-primary">Back</a>
        </div>
                
</header>
        <form action="process.php" method="post">
        <div class="form-element my-4">
    <select name="type" class="form-control">
        <option value="">Select Category</option>
        <option value="Sport & Outdoor">Sport & Outdoor</option>
        <option value="Groceries">Groceries</option>
        <option value="Babies & Toys">Babies & Toys</option>
        <option value="Books">Books</option>
    </select>
</div>

<div class="form-element my-4">
    <input type="text" class="form-control" name="c_des" placeholder="Category Description">
</div>   
<div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Add Category">
</div>

</form>  

    
</body>
</html>
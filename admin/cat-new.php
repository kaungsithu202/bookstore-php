<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pussy Duppy Catt</title>
</head>
<style>
    form label{
        display: block;
        margin-top: 8px;
    }
</style>
<body>
    <h1>New Category</h1>
    <form action="cat-add.php" method="post">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name">

        <label for="remark">Remark</label>
        <textarea name="remark" id="remark" cols="30" rows="10"></textarea>

         <br><br>
        <input type="submit" value="Add Category">
    </form>
</body>
</html>
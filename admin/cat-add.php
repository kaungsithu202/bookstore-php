<?php 
 include("confs/auth.php");
    include("confs/config.php");
    $name=$_POST['name'];
    $remark=$_POSTp['remark'];
    $sql="INSERT INTO categories (name,remark,create_date,modified_date)
            VALUES ($name,$remark,now(),now())";
    mysqli_query($conn,$sql);
    header("location: cat-list.php");
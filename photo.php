<?php
if(isset($_POST['submit'])){
    $uploadimage = $_FILES["uploadimage"]["name"];
    $tmp = $_FILES["uploadimage"]["tmp_name"];
    $folder = "product-images/".$uploadimage;
    move_uploaded_file($tmp, $folder);
    echo "<img src= ".$folder." >" ; 
}
?>


    <form method="post" action="" enctype="multipart/form-data">

    <td><input type="file" name="uploadimage" required></td>
    <td><input type="submit" name="submit"></td>
    </form>

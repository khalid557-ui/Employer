<?php
include("connection.php");
if(isset($_POST['submit'])){
    $cin=htmlspecialchars(trim(strtolower($_POST['cin'])));
    $query="DELETE FROM pme WHERE cin='$_POST[cin]'";
    mysqli_query($conect,$query);
    mysqli_close($conect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DELETE PAGE</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="CIN" name="cin" class="item"><br>
        <input type="submit" name="submit" class="btn"><br>
        <a href="insert.php">Insert</a><a href="select.php">Select</a><a href="update.php">Update</a>
    </form>

    
    
</body>
</html>
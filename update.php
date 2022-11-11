<?php
include("connection.php");
if(isset($_POST['submit'])){
    $cin=htmlspecialchars(trim(strtolower($_POST['cin'])));
    $query="UPDATE pme set name='$_POST[name]',prenom='$_POST[prenom]',age='$_POST[age]',email='$_POST[email]',
    date='$_POST[date]',salary='$_POST[salary]'WHERE cin='$_POST[cin]'";
    mysqli_query($conect,$query);
    mysqli_close($conect);
}else{
    echo "ffffff";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>INSERT PAGE</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" placeholder="CIN" name="cin" class="item"><br>
        <input type="text" placeholder="NOM" name="name" class="item"><br>
        <input type="text" placeholder="PRENOM" name="prenom" class="item"><br>
        <input type="number" placeholder="AGE" name="age" class="item"><br>
        <input type="email" placeholder="EMAIL" name="email" class="item"><br>
        <input type="date" class="item" name="date"><br>
        <input type="number" placeholder="SALARY" name="salary" class="item"><br>
        <input type="submit" name="submit" class="btn"><br>
        <a href="delete.php">Delete</a><a href="select.php">Select</a><a href="insert.php">Insert</a>
    </form>

    
    
</body>
</html>
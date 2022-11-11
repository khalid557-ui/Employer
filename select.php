
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>INSERT PAGE</title>
    <style>
        table{
            margin: auto;
            margin-top: 10rem;}
:root {
    --green: #16a085;
    --black: #444;
    --light-color: #777;
    --box-shadow: .5rem .5rem 0 rgba(22, 160, 133, .2);
    --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
    --border: .2rem solid var(--green);
}

 table {
     border-collapse: collapse;
    
    background: #fff;
    border: var(--border);
    box-shadow: var(--box-shadow);
    text-align: center;
    padding: 1rem;
    border-radius: .5rem;

}

 table tr td {
    width: 30%;
    margin: .2rem 0;
    border-radius: .5rem;
    border: var(--border);
    font-size: 1.6rem;
    color: var(--black);
    
    padding: 1rem;
}

 

        
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" placeholder="CIN" name="cin" class="item"><br>
        <input type="submit" name="submit" class="btn"><br>
        <a href="delete.php">Delete</a><a href="insert.php">insert</a><a href="update.php">Update</a>
    </form>
    <?php
        include("connection.php");
        if(isset($_POST['submit'])){
            $cin=htmlspecialchars(trim(strtolower($_POST['cin'])));
            $query="SELECT * FROM pme WHERE cin='$_POST[cin]'";
            $res=mysqli_query($conect,$query);
            echo "<table border='4'>";
            echo "<tr><th>Nom</th><th>Prenom</th><th>Age</th><th>Email</th><th>CIN</th><th>Date de naissance</th><th>Salary</th></tr>";
            while($row=mysqli_fetch_array($res)){
                echo "<td>$row[name]</td><td>$row[prenom]</td><td>$row[age]</td><td>$row[email]</td><td>$row[cin]</td><td>$row[date]</td><td>$row[salary]</td>";
             
        }
    }
        
        ?>

    
    
</body>
</html>
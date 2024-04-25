<?php
    session_start();

    if(isset($_POST['logout'])) {
        unset($_SESSION['user']);
    }

    
    if(!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>











    <form method="post">
        <input type="hidden" name="logout" value="1"/>
        <input type="submit" name="logout"/>
    </form>
</head>
<body>
    
</body>
</html>
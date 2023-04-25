<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Krypten Web</title>
</head>
<body>
    <div class="nav-dark">
        <h1>Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1><i style="color:gray;margin:0 auto;margin-left:20rem;margin-top:0;font-size:30px" class="fa-solid fa-ellipsis-vertical"></i>
    </div>
    <div class="nav-hor">
        <h3>Available Sites</h3>
    </div>
    <div class="search">
        <input placeholder="krpyten://"> <i style="font-size:20px;margin-left:20px;color:white;" class="fa-solid fa-ellipsis-vertical"></i>
</div>

<script src="https://kit.fontawesome.com/c27ee28938.js" crossorigin="anonymous"></script>
</body>
</html>


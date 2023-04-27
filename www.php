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
    <div class="nav-dark"><br>
        <h1>Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
        <!-- <i style="color:gray;margin-left:20rem;margin-top:20px;font-size:30px" class="fa-solid fa-ellipsis-vertical"></i> -->
    </div>
    <div class="nav-hor">
        <h3>Gremios</h3><br>
        <span style="color:green;padding-top:90px">Running</span><br><br>
        <gremio>KrypenPedia <stats style=""><i class="fa-solid fa-user"></i> 0</stats></gremio><hr><br>
        <span style="color:red;padding-top:90px">Stopped</span><br><br>
        <span style="color:yellow;padding-top:90px">Mantainance</span>
    </div>
    <div class="search">
        <input placeholder="krpyten://"> <i style="font-size:20px;margin-left:20px;color:white;" class="fa-solid fa-ellipsis-vertical"></i>
</div>

<script src="https://kit.fontawesome.com/c27ee28938.js" crossorigin="anonymous"></script>
</body>
</html>


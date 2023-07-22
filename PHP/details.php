<?php 
require_once 'db_connect.php' ;
$id = $_GET["id"];

$sql = "SELECT * FROM media WHERE isbn_code = $id" ;
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$availibility = "";
if($row["pieces"] > 0){
    $availibility = "available";
}
else{
    $availibility = "not available";
}

$card = "<div class='content'>
            <hr>
            <h3>{$row["title"]}</h3>
            <hr>
            <img src='../IMAGES/{$row["image"]}' alt='...'>
            <hr>
            <p>{$row["short_description"]}</p>
            <hr>
            <p>Author: {$row["author_first_name"]} {$row["author_last_name"]}</p>
            <hr>
            <p>Type: {$row["type"]}</p>
            <hr>
            <p>Publisher Name: {$row["publisher_name"]}</p>
            <hr>
            <p>Publish Date: {$row["publish_date"]}</p>
            <hr>
            <p>Publisher Address: {$row["publisher_address"]}</p>
            <hr>
            <p>$availibility</p>
        </div>
        </div>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="Stylesheet" href="../CSS/details.css">
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <h3>Big Libary</h3>
            <a href="index.php">Home</a>
            <a href="create.php">Create</a>
        </div>
    </nav>
    <div class="container">
        <?= $card ?>
    </div>
    <footer>
        <nav class="IconNav">
            <a href="#"><img src="../IMAGES/facebook.png"></a>
            <a href="#"><img src="../IMAGES/google.png"></a>
            <a href="#"><img src="../IMAGES/twitter.png"></a>
            <a href="#"><img src="../IMAGES/instagram.png"></a>
            <a href="#"><img src="../IMAGES/linkedin.png"></a>
            <a href="#"><img src="../IMAGES/github.png"></a>
        </nav>
        <nav class="footerNav">
            <form>
                <label for="signUp">Sign up for our newsletter</label>
                <input type="text" name="signUp" id="signUp">
                <input type="subscripe" id="sub" value="Subscripe"> 
            </form>
        </nav>
        <p>&copy; 2023 Copyright: Marvin van Dyck</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
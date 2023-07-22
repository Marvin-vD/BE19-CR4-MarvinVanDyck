<?php 
require_once 'db_connect.php' ;

$sql = "SELECT * FROM media" ;
$result = mysqli_query($connect, $sql);
$cards = "" ;
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $cards .= "<div class='content'>
        <div class='card' style='width: 18rem;'>
            <img src='../IMAGES/{$row["image"]}' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>{$row["title"]}</h5>
            <hr>
            <p class='card-text'>{$row["short_description"]}</p>
            <hr>
            <p class='card-text'>{$row["author_first_name"]} {$row["author_last_name"]}</p>
            <hr>
            <a href='publisher.php?id={$row["publisher_name"]}' class='card-text'>{$row["publisher_name"]}</a>
            <hr>
            <a href='details.php?id={$row["isbn_code"]}' class='btn btn-success'>Details</a>
            <a href='update.php?id={$row["isbn_code"]}' class='btn btn-warning'>Update</a>
            <a href='delete.php?id={$row["isbn_code"]}' class='btn btn-danger'>Delete</a>
            </div>
        </div>
        </div>" ;
    }
} else  {
    $cards = "<p>No results found</p>" ;
}

//<img src='pictures/{$row["image"]}' class='card-img-top' alt='...'>
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Libary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="Stylesheet" href="../CSS/home.css">
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
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-s-1" id="result">
            <?php 
            echo $cards;
            ?>
        </div>
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
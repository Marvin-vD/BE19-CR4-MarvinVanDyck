<?php
   require_once "db_connect.php";
   require_once "file_upload.php";

   if(isset ($_POST["add"])){
       $title = $_POST["title"];
       $description = $_POST["description"];
       $image = fileUpload($_FILES["picture"]);
       $type = $_POST["type"];
       $authorFName = $_POST["authorFirstName"];
       $authorLName = $_POST["authorLastName"];
       $publisherName = $_POST["publisherName"];
       $publisherAddress = $_POST["publisherAddress"];
       $publisherDate = $_POST["publishDate"];
       $pieces = $_POST["pieces"];

       $sql = "INSERT INTO `media`(`title`, `short_description`, `image`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `pieces`) VALUES ('$title','$description','{$image[0]}','$type','$authorFName','$authorLName','$publisherName','$publisherAddress','$publisherDate',$pieces)";
       if (mysqli_query($connect, $sql)){
           echo "<div class='alert alert-success' role='alert'>
           New record has been created, {$image[1]}
           </div>" ;
         header("refresh: 1; url= index.php");
       }else  {
           echo "<div class='alert alert-danger' role='alert'>
           error found, {$image[1]}
         </div>" ;
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateMedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="Stylesheet" href="../CSS/update.css">
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <h3>Big Libary</h3>
            <a href="index.php">Home</a>
            <a href="create.php">Create</a>
        </div>
    </nav>
    <div class="updateMedia mt-3">
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Title: </label><br>
            <input type="text" name="title" id="title">
            <br>
            <label for="description">Description: </label>
            <textarea type="text" class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
            <br>
            <label for="type">Txpe: </label>
            <select id="type" name ="type"> 
              <option value ="DVD">DVD</option>
              <option value="CD">CD</option>
              <option value="Book" selected>Book</option>
            </select>
            <br>
            <label for="authorFirstName">Author First Name: </label><br>
            <input type="text" name="authorFirstName" id="authorFirstName">
            <br>
            <label for="authorLastName">Author Last Name: </label><br>
            <input type="text" name="authorLastName" id="authorLastName">
            <br>
            <label for="publisherName">Publisher Name: </label><br>
            <input type="text" name="publisherName" id="publisherName">
            <br>
            <label for="publisherAddress">Publisher Address: </label><br>
            <input type="text" name="publisherAddress" id="publisherAddress">
            <br>
            <label for="publishDate">Publish Date: </label><br>
            <input type="date" name="publishDate" id="publishDate">
            <br>
            <label for="pieces">Pieces: </label><br>
            <input type="number" name="pieces" id="pieces">
            <br>
            <label for="picture" class="form-label">picture</label>
            <input type = "file" class="form-control" id="picture" aria-describedby="picture" name="picture">
            <br>
            <input type="submit" name="add">
            <!-- <a class="btn btn-primary" id="myAddBtn"><img src="../IMAGES/plus.png"> Add Task</a> -->
        </form>
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
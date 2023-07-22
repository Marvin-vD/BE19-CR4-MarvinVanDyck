<?php
    function fileUpload($pic){
        if($pic["error"] == 4){
            $pictureName = "placeholder.jpg";
            $message = "No picture has been chosen, but you can upload an image later :)";
        }else {
            $checkIfImage = getimagesize($pic["tmp_name"]);
            $message = $checkIfImage ? "Ok" : "Not an image";
        }
        if($message == "Ok"){
            $ext = strtolower(pathinfo($pic["name"], PATHINFO_EXTENSION));
            $pictureName = uniqid("") . "." . $ext;
            $destination = "../IMAGES/{$pictureName}";
            move_uploaded_file($pic["tmp_name"], $destination);
        }elseif($message == "Not an image") {
            $pictureName = "placeholder.jpg";
            $message = "the file that you chose is not an image!";
        }
        return [$pictureName, $message];
    }
?>
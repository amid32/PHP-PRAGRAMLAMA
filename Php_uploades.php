<?php

//"Upload.php" fayl bir dosyanı yükləmək üçün kodu ehtiva edir:
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK= 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - ".$check["mime"].".";
        $uploadOK = 1;
    }else {
        echo "File is not an image.";
        $uploadOK = 0;
    }
}


//Faylın mövcud olduğunu yoxlayın.
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOK = 0;
}

//limit fayl ölçüsü
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOK  = 0;
}
//Müəyyən fayl formatlarına icazə verin
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK = 0;
}


//$ UploadOk bir səhv ilə 0-a təyin olub olmadığını yoxlayın
if ($uploadOK == 0) {
    echo "Sorry your file was not uploaded.";
    
    //hər şey tamamsa fayl yükləməyə çalışın
}else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Thi file ".basename($_FILES['fileToUpload']["name"]). "has been uploaded.";
    }else {
        echo "Sorry, there was an error uploading your file."; }
}


 //header("Location: index.php");
?>

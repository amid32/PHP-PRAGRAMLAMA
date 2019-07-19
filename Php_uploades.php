<?php

//"Upload.php" dosya dosya yuklerken icin kod icerir
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


//fayl artiq movcud olmadigini yoxlayir
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOK = 0;
}

//sinir dosya boytu 
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOK  = 0;
}
//sinir dosya turu
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK = 0;
}



if ($uploadOK == 0) {
    echo "Sorry your file was not uploaded.";
}else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Thi file ".basename($_FILES['fileToUpload']["name"]). "has been uploaded.";
    }else {
        echo "Sorry, there was an error uploading your file."; }
}


 //header("Location: index.php");
?>

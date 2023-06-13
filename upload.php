<?php
require 'connection.php';
$app['db'] = (new Database())->db;


if ($_POST['user-name'] !== "" && isset($_FILES["uploaded-file"])){
    $userName = $_POST["user-name"];
    $uploadedFile = $_FILES["uploaded-file"];
    $filePath= "upload/".$uploadedFile["name"];
    move_uploaded_file($uploadedFile["tmp_name"],"$filePath");
    $insert = $app['db']->query("INSERT INTO upload (user_name,file_path)VALUES('$userName','$filePath')");
    echo '<script type="text/javascript">alert("File upload succesfully");
    window.location.href = "http://localhost:8888/"
</script>';
}
else{
    echo '<script type="text/javascript">alert("please fill the details");
    window.location.href = "http://localhost:8888/"
</script>';
}




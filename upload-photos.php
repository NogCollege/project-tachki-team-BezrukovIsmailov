<?php

    require_once('controllers/connect.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM catalogg WHERE id='$id'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($result);
    $uploadDir = 'templates/img/photos/'. $data['id'] . '-' . $data['namee'] .'/';
    var_dump($uploadDir);
        if ($_FILES) {
            $files = array_filter($_FILES['upload']['name']);
            $total = count($_FILES['upload']['name']);
        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            if ($tmpFilePath != "") {
            $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
                if(!file_exists($newFilePath)) {
                move_uploaded_file($tmpFilePath, $newFilePath);
                echo $_FILES['upload']['name'][$i] .' успешно загружен в папку ' .
            $uploadDir .'<br>';
                } else {
                echo 'Файл '. $_FILES['upload']['name'][$i] .' уже существует!';
                }
        }
    }
}
?>
<form enctype="multipart/form-data" method="post">
    <input name="upload[]" type="file" multiple="multiple">
    <input type="submit" value="нажми на меня">
</form>
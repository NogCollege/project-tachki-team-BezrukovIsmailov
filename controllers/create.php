<?php 
    require_once('controllers/connect.php');

    if ($link->connect_error) {
        die("Ошибка подключения к базе данных: " . $link->connect_error);
    }

    // Получаем список автомобилей из базы данных
    $sql = "SELECT id, name FROM catalogg";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // Перебираем результирующий набор
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["fullname"];
            $folderName = $id . "-" . preg_replace("/[^A-Za-z0-9]/", "", $name);

            // Проверяем, существует ли папка с таким названием
            $folderPath = "templates/img/photots/" . $folderName;
            if (!is_dir($folderPath)) {
                // Создаем новую папку
                mkdir($folderPath);
                echo "Папка " . $folderName . " успешно создана.<br>";
            }
        }
    } else {
        echo "Нет данных об автомобилях в базе.";
    }

    $link->close();

?>
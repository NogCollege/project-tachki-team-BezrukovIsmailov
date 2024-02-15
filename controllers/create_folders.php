    <?php 
        $host = "localhost";

        $user = "root";
        $password = "";
        
        $db_name = "sait";
        
        $link = mysqli_connect($host, $user, $password, $db_name);

        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT id, namee FROM catalogg";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $carId = $row['id'];
                $carName = $row['fullname'];

                $folderName = $carId . '-' . strtolower(str_replace(' ','', $carName));
                $folderPath = 'templates/img/photos/' . $folderName;

                if(!is_dir($folderPath)){
                    mkdir($folderPath);
                    echo "Папка" .$folderName . 'успешно создана<br>';

                }
            }

        } else{
            echo 'Нет данных об автомобилях';
        }

        mysqli_close($link);


    ?>
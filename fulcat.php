<!DOCTYPE html>
<html lang="en">
<?
    require_once('controllers/head.php')
?>
<body>
<main>
    <?php 
        require_once ("controllers/connect.php");
        
        $query = "SELECT * FROM catalogg WHERE id=".$_GET['id'];
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $data = mysqli_fetch_assoc($result);
        // var_dump($data);
        $dir = 'templates/img/photots/' . $data['id'] . '-' . $data['namee']; // Укажите путь к папке с
        $files = scandir($dir); // Получаем список файлов в папке
        // var_dump($files);
        

?>  
    <header class="head">
        <div class="nav-menu">
            <ul class="menu">
              <div class="logo">
                <li><h1>АРЕНДАТАЧЕК.РФ</h1></li>
              </div>
              <div class="menu-l">  
                    <li>Подобрать авто</li>
                    <li>Условия</li>
                    <li>Цены</li>
                    <li>О нас</li>
                    <li>Контакты</li>
              </div>
              <div class="soc">
                <li><img src="templates/img/watsapp.png" alt=""></li>
                <li><img src="templates/img/Vector (2).png" alt=""></li>
              </div>
              <div class="tel">
                <li>7 (499) 110-20-47</li>
              </div>
              <div>
                <li><button class="knop">Заказать звонок</button></li>
              </div>
              <div class="prof">
                <li><img src="templates/img/Group 71.png" alt=""></li>
                <li><img src="templates/img/Group 72.png" alt=""></li>
              </div>
            </ul>
          </div>
    </header>


    <section class= "slid-info container">
        <div class="slider-container">
                <h1 class="page-title"><?=$data['fullname']?> <?=$data['god']?></h1>
                <div class="slider">
                
                    <?
                    foreach ($files as $file) {
                        $file_path = $dir . '/' . $file;

                        if (is_file($file_path) && in_array(pathinfo($file_path,
                        PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                            echo '<img src="' . $file_path . '" ;>';
                        }
                    
                    }
                    ?>
                </div>
            
                <button class="prev-button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
                <button class="next-button" aria-label="Посмотреть следующий слайд">&gt</button>
        </div>
        <div class= "infocar">
            <p class= "ceninf"><?=$data['max']?>₽</p>

            <div class="stoim">
                <h1>Стоимость аренды</h1>
                <p class="cenaa">Максимальная цена аренды: <span><?=$data['max']?></span></p>
                <p class="cenaa">Средняя цена аренды: <span><?=$data['mid']?></span> </p>
                <p class="cenaa">Минимальная цена аренды: <span><?=$data['min']?></span> </p>
                <div class="inf">
                    <p><?=$data['city'] ?></p>
                    <p><img src="templates/img/Vector (8).png" alt=""><?=$data['volume'] ?></p>
                    <p><img src="templates/img/Vector (9).png" alt=""><?=$data['loshad'] ?></p>
                    <p><img class="benz" src="templates/img/icon-in-card-3.png" alt=""><?=$data['typemot'] ?></p>
                </div>
                <button>Арендовать</button>
            </div>
            
            <p class="fullopis"><?=$data['fullopes']?></p>

        </div>
        
    </section>
</main>
  
  <script src="script.js"></script>
</body>
</html>
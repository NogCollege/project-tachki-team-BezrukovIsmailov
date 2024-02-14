<?php 
    require_once("../controllers/connect.php");

    $link = mysqli_query($link, "SELECT*FROM catologg WHERE id>0");

    $query = "SELECT * FROM catalogg";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data [] = $row)

    $result = '';

    foreach ($data as $elem) {
        
    }
?>


<section class="fleet">
        <div class="sect2-he container">
            <h1>Наш автопарк</h1>
            <button>Смотреть всё</button>
        </div>
        <div class="sect2-car container">
            <ul class="car container">
                <li class="black"><img src="templates/img/Group 47.png" alt="">Внедорожники</li>
                <li class="white w1"><img src="templates/img/Vector (5).png" alt="">Бизнес</li>
                <li class="white w4"><img src="templates/img/Group 48.png" alt="">Спорткар</li>
                <li class="white w2"><img src="templates/img/Vector (6).png" alt="">Премиум</li>
                <li class="white w3"><img src="templates/img/Vector (7).png" alt="">Комфорт</li>
            </ul>
        </div>
        <div class="katalog container">
            <ul class="katal">
                <div class="first">
                    <li class="vis">
                        <div class="img-kat">
                            <img src="templates/img/image 22 (4).png" alt="">
                        </div>
                        <h4>BMW X2, 2021</h4>
                        <div class="text-s2">
                            <p> <img src="templates/img/Vector (8).png" alt="">2,3 л/бензин</p>
                            <p class="pa"> <img src="templates/img/Vector (9).png" alt="">317 л.с.</p>
                        </div>
                        <hr size="1px">
                        <div class="cen">
                            <button>Забронировать</button><p>от <span>7150</span>руб/сут.</p>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
</section>
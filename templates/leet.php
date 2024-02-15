


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
        <?php 
            require_once ("controllers/connect.php");
        
            $query = "SELECT * FROM catalogg";

            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
            
            echo '<div class = "katalog container">
            <ul class="katal">';
            foreach ($data as $elem){
                $result = '';
                $result .= '
                <li class="vis">
                <div class="img-kat">
                <img src="templates/img/image 22 (4).png" alt="">
                </div>';
                $result .= ' <h4>'. $elem['fullname'] . ', '. $elem['god'] . '</h4>';
                $result .= '<div class="text-s2">
                    <p> <img src="templates/img/Vector (8).png" alt="">'. $elem['volume'] . ',' . $elem['typemot'] . '</p>
                    <p class="pa"> <img src="templates/img/Vector (9).png" alt="">'. $elem['loshad'] .'</p>
                </div>';
                $result .= '<hr size="1px">';
                $result .= '<div class="cen">
                    <button>Забронировать</button><p>от <span>'.$elem['mid'].'</span>руб/сут.</p>
                </div>';
                $result .= '</li>';

                echo $result;
            }
            echo '</ul></div>';

        ?>
</section>
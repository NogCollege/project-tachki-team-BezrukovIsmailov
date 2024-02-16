<script> 
    let buttons = document.querySelectorAll('.button-cat')

    let category = new Map([
        ['suv', document.querySelectorAll('.cat-Внедорожники')],
        ['business', document.querySelectorAll('.cat-Бизнес')],
        ['sport', document.querySelectorAll('.cat-Спорткар')],
        ['premium', document.querySelectorAll('.cat-Премиум')],
        ['comfort', document.querySelectorAll('.cat-Комфорт')]
    ]);

    
    let allCards = document.querySelectorAll('.catalog-list-item')

    for (let button of buttons) {
        button.addEventListener("click", function() {
            if (!button.classList.contains("button-active")) {
                console.log("Нажатие на неактивную кнопку")
            buttons.forEach((button) => {
                button.classList.remove("button-active") // убираем класс у всех кнопок
                this.classList.add("button-active") // добавляем класс к нажатой кнопке
            })
            DisplayCards(this.dataset.category)
            } else {
                console.log("Нажатие на активную кнопку")
            }
        })
    }


    function DisplayCards(cat) {
        allCards.forEach((card) => {
            card.style.display = 'none'
        })
        category.get(cat).forEach((card) => {
            card.style.display = 'block'
        })
    }
    
</script>

<section class="fleet">
        <div class="sect2-he container">
            <h1>Наш автопарк</h1>
            <button>Смотреть всё</button>
        </div>
        <div class="sect2-car container">
            <ul class="car container">
                <li> 
                    <button class="button-cat black" data-category="Внедорожники"><img src="templates/img/Group 47.png" alt="">Внедорожники</button>

                </li>
                <li>
                    <button class="button-cat white w1" data-category="Бизнес"><img src="templates/img/Vector (5).png" alt="">Бизнес</button>

                </li>
                <li>
                    <button class="button-cat white w4" data-category="Спорткар"><img src="templates/img/Group 48.png" alt="">Спорткар</button>

                </li>
                <li>
                    <button class="button-cat white w2" data-category="Премиум"><img src="templates/img/Vector (6).png" alt="">Премиум</button>

                </li>
                <li>
                    <button class="button-cat white w3" data-category="Комфорт"><img src="templates/img/Vector (7).png" alt="">Комфорт</button>

                </li>
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
                <li class="vis Внедорожник Бизнес Спорткар Премиум Комфорт">
                <div class="img-kat">
                <img src="templates/img/photots/'. $elem['id'].'-'.$elem['namee']   . '/main.jpg" alt="">
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
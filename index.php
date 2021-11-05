<?php
  
    $nickname = "Александр";
    $recommend = "Этот сайт одновременно и учебный и рабочий по PHP";
    $balance = 49;

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой учебный сайт по PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Cormorant:wght@300&family=Montserrat+Alternates:ital,wght@0,100;1,100&family=Philosopher&family=Zen+Antique&display=swap" rel="stylesheet">

</head>
<body>
    <h1>Мой учебный сайт по PHP</h1>

    <!-- //есть два варианта написания кода PHP с Html 
    // первый - когда код PHP внутри кода HTML, а второй наоборот.
    // И так поехали. -->
    <section class="introduction"> 
        <h2>Вместо вступления</h2>
        <p>Есть два варианта написания кода PHP, при создании и разработки сайта. <br>
           <ul>
               <li>
                    Первый - когда код PHP пишется внутри тегов/кода HTML. <br>
                    Пример: <br>
                    div> Привет, ?php echo $nickname; ?> /div>.             
               </li>
               <li>
                    Второй - второй кода ынутри кода PHP пишется код/теги HTML. <br>
                    Пример: <br>
                    ?php echo "div>" $balance; "/div>" ?>.
               </li>
           </ul> 
           <br>
           <strong class="notetext">*При написании кода убраны стрелочки иначе они будут не видны.</strong>
        </p>
        <p>
            Ниже видим как будет выглядеть код на странице. <br>
            <span class="notetext">*Всегда под кодом будет его пример как он выглядит на странице, кроме случая, когда код становиться для выполнения бесконечным, что приведет к зависанию не только браузера, но и ОС.</span>
        </p>
        <div class="introduction-code">
        <div class="codephpstar">Привет, <?php echo $nickname; ?></div>
        <?php 
            echo "<div class=\"codephpstar\">".$recommend."</div>";
            echo "<div class=\"codephpstar\">".$balance."</div>"; 
        ?>
        </div>
        <p>
            <strong>ВАЖНО: При написании/указании класса CSS в непосредственно в коде PHP, кавычки надо экранировать слешом.</strong> <br>
            Пример: <br> 
            ?php <br>
            echo "div class=\"codephpstar\">".$recommend."/div>"; <br>
            echo "div class=\"codephpstar\">".$balance."/div>"; <br>
            ?>
        

        </p>
    </section>
    <section class="tipeofsites">
        <h2>Виды сайтов</h2>
        <div class="statics">
            <h3>Статический сайт</h3>
            <p>
              <strong>Статический сайт</strong> — это сайт, который состоит из неизменяемых веб-страниц. Исходный код таких страниц состоит только из HTML и возможно ещё CSS и JavaScript. <br>
              Чтобы обновить или дополнить информацию на статичной веб-странице, нужно самостоятельно вручную внести изменения в её исходный код. <br>
              Когда веб-сервер получает запрос от клиента на какой-нибудь ресурс (изображение, HTML документ и др.), он находит этот ресурс и просто отправляет его клиенту
            </p>
            <div class="advantages">
                <h4>Плюсы статического сайта:</h4>
                <ul>
                    <li>Статичные веб-страницы создают небольшую нагрузку на сервер, поэтому нетребовательны к ресурсам хостинга.</li>
                    <li>Статичные веб-страницы быстро загружаются в браузере.</li>
                    <li>Статический сайт легко перенести на новый хостинг.</li>
                    <li>Возможность прямого просмотра HTML-документа в браузере, без использования промежуточного ПО.</li>
                </ul>
            </div>
            <div class="minus">
                <h4>Минусы статического сайта:</h4>
                <ul>
                    <li>
                    При увеличении количества веб-страниц, поддерживать статический сайт становится труднее, так как появляются трудности с внесением изменений в код веб-страниц. Например, если надо внести какое-нибудь однотипное изменение, придётся редактировать код каждого HTML-документа отдельно, что в свою очередь является источником дополнительных время затрат, вероятности обновить не всё и допустить где-нибудь ошибки.
                    </li>
                </ul>
            </div>
        </div>
        <div class="dinamic">
            <h3>Динамический сайт</h3>
            <p>
                <strong>Динамический сайт</strong> — это сайт, который состоит из изменяемых веб-страниц. Исходный код таких веб-страниц обычно генерируется во время обработки HTML файла интерпретатором какого-нибудь языка программирования. Языки программирования на серверной стороне используются разные, наиболее часто встречаются: Java, PHP, Ruby.
            </p>
            <p>
                Когда клиент запрашивает динамическую веб-страницу запускается целая цепь событий:
                <ul>
                    <li>
                        Веб-сервер получает запрос на веб-страницу, находит её и передаёт интерпретатору PHP.
                    </li>
                    <li>
                        Интерпретатор PHP выполняет код, расположенный в HTML-документе, взаимодействуя при этом, если необходимо, с файловой системой, почтовым сервером или с базой данных.
                    </li>
                    <li>
                        После того как интерпретатор выполнил все необходимые действия, он отдаёт сгенерированный код HTML-документа веб-серверу.
                    </li>
                    <li>
                        Веб-сервер отправляет сгенерированный код HTML-документа клиенту.
                    </li>
                </ul>
            </p>
            <div class="advantages">
                <h4>Плюсы динамического сайта:</h4>
                <ul>
                    <li>
                        При увеличении количества веб-страниц, поддерживать динамический сайт достаточно легко, по сравнению со статическим, так как, если надо внести какое-нибудь однотипное изменение на всех страницах, отредактировать код можно в одном месте, а применится изменение ко всем страницам.
                    </li>
                    <li>
                        Дополнительные функциональные возможности.
                    </li>
                </ul>
            </div>
            <div class="minus">
                <h4>Минусы динамического сайта:</h4>
                <ul>
                    <li>
                        Динамические веб-страницы более требовательны к ресурсам хостинга по сравнению со статическими.
                    </li>
                    <li>
                        Динамический сайт тяжелее перенести на новый хостинг, так как надо смотреть подходит ли хостинг по параметрам.
                    </li>
                    <li>
                        Для просмотра HTML-документа в браузере, необходимо использовать промежуточного ПО.
                    </li>
                </ul>
            </div>
        </div>
    </section>

</body>
</html>
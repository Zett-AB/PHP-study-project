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
    <section class="php-this-is">
        <h2>PHP и его возможности</h2>
        <div>
            <p>
                Аббревиатура PHP, расшифровывается как "PHP: Hypertext Preprocessor" (PHP: Препроцессор Гипертекста).
            </p>
            <p>
                <strong>PHP</strong> — это интерпретируемый язык программирования общего назначения, работающий на серверной стороне. Это означает, что когда посетитель запрашивает страницу сайта, сервер получает запрос, передаёт управление интерпретатору PHP, он выполняет все необходимые операции, отдаёт готовый код серверу и только потом сервер отправляет готовую страницу браузеру. Обычно PHP-файлы помимо самого PHP-кода содержат ещё HTML, CSS и возможно JavaScript. <br>

                PHP хоть и является языком общего назначения, но изначально он создавался специально для web-разработки. Основным преимуществом PHP является возможность добавлять PHP-код непосредственно в обычные HTML документы. <br>

                Пример встраивания PHP-кода в HTML-документ смотри выше.
            </p>
        </div>
        <div class="features-php">
            <h4>Возможности</h4>
            <ul>
                <li>
                    Если вам необходимо динамическое формирование содержимого страницы, PHP будет отличным решением для этого.
                </li>
                <li>
                    С помощью PHP можно устанавливать и читать cookies, управлять аутентификацией и авторизацией, использовать сессии.
                </li>
                <li>
                    Он может взаимодействовать с различными базами данных на основе пользовательских данных.
                </li>
                <li>
                    С помощью PHP можно легко сделать форму обратной связи, отправлять почту, добавить возможность оставлять комментарии и многое другое.
                </li>
            </ul>
        </div>
        <div class="necessary tools">
            <h4>Необходимые инструменты</h4>
            <p>
                Для тех, кто решил начать изучать PHP мы рекомендуем установить сборку XAMPP. Она содержит всё необходимое для работы с PHP.
            </p>
            <p>
                После установки XAMPP, запустите его и нажмите Start напротив Apache. Далее введите в адресной строке браузера localhost, чтобы убедиться, что сервер находится в активном состоянии. Он должен отображать файл index.php, расположенный по умолчанию по адресу C:\xampp\htdocs\index.php на компьютерах с операционной системой Windows. htdocs - папка, в которой веб-сервер Apache будет искать файлы для отображения. Всё что в этой папке содержится после установки XAMPP можно смело удалять и добавлять туда только ваши файлы.
            </p>
        </div>
    </section>
    <section class="php-tags">
        <h2>PHP: Теги</h2>
        <div class="php-tags-one">
            <h3>Теги PHP</h3>
            <p>
                Когда интерпретатор PHP обрабатывает файл, он ищет теги ?php и ?>, которые указывают, где начинается и где заканчивается PHP-код. Всё, что находится вне пары открывающих и закрывающих тегов, будет проигнорировано интерпретатором (т. е. просто будет отдано веб-серверу как есть). <br> 
                К примеру файл переданный интерпретатору PHP имеет следующий код: <br>
                    <ul>
                        <li>
                            p>Это будет проигнорировано интерпретатором и просто будет отдано как есть, сначала веб-серверу, а тот в свою очередь отдаст браузеру./p>
                        </li>
                        <li>
                            ?php <br>
                                echo "Этот код сначала обрабатывается интерпретатором PHP, и только затем <br>
                                отдаётся веб-серверу"; <br>
                                ?>
                        </li>
                    </ul>
            </p>
            <p>
                Если файл содержит только PHP-код или он расположен в самом конце файла, то есть после него ничего уже нет, то закрывающий тег предпочтительно опустить (не указывать). Это помогает избежать добавления случайных пробельных символов после закрывающего тега PHP, которые могут послужить причиной нежелательных эффектов. <br>

                PHP также допускает использование короткого открывающего тега ? вместо ?php
            </p>
        </div>
        <div class="php-tags-two">
            <h3>Пробельные символы</h3>
            <p>
                В PHP коде можно использовать пробельные символы: пробелы, табуляции и переносы строк. Число пробельных символов не ограничивается и зависит от предпочтений программиста, основная цель которого — создать наглядный и легко читаемый текст программы (исходный код).
            </p>
        </div>
    </section>
    <section class="php-lit-idn-isnt">
        <h2>PHP: литералы, идентификаторы и инструкции</h2>
        <p>Коротко о главном</p>
        <div class="php-lit">
            <h3>Литералы</h3>
                <p>
                <strong>Литерал</strong> - это запись в исходном коде программы, представляющая собой значение некоторого типа данных, у которого нет имени:
                <br>
                    <ul>
                        <li>11 / числовой литерал</li>
                        <li>"Мой текст" / Строковый литереал</li>
                        <li>true / Булев литерал</li>
                        <li>[]  / литерал массива</li>
                    </ul>
                <p>
                В следующем примере 23 и "акула" это литералы, а $num и $fish — переменные, которым они присваиваются: <br>
                    <ul>
                        <li>$num = 23;</li>
                        <li>$fish = "акула";</li>
                    </ul>    
                </p>
                <p>
                    Литералы являются важной частью любого языка программирования, так как написать программу без них невозможно.  
                </p>
        </div>
        <div class="php-ind">
            <p>
                <strong>Идентификатором</strong>называется последовательность букв, цифр и символов подчёркивания ( _ ). Идентификаторы выступают в качестве имён переменных, функций, свойств объекта, и т. д. При выборе идентификатора необходимо учитывать следующие правила:
                    <ul>
                        <li>
                            Идентификаторы не могут совпадать ни с одним из ключевых слов PHP, т. к. они являются частью синтаксиса самого языка и имеют специальное значение для интерпретатора.                            
                        </li>
                        <li>
                            Идентификаторы могут состоять из одного и более символов.
                        </li>
                        <li>
                            Идентификаторы должны начинаться с буквы или символа подчёркивания. Далее могут следовать любые буквы, цифры и символы подчёркивания в любом количестве.
                        </li>
                    </ul> 
                    Примеры допустимых идентификаторов в качестве имён переменных:
                        <ul>
                            <li>
                                $x
                            </li>
                            <li>
                                $my_var
                            </li>
                            <li>
                                $_myCar2
                            </li>
                        </ul>
            </p>
            <p>
                Чтобы лучше понимать код, при его чтении, идентификаторы желательно придумывать такие, которые будут соответствовать хранящимся в них данным:
                <ul>
                    <li>
                        $age = 35;             // Возраст
                    </li>
                    <li>
                        $hairColor = "Чёрный"; // Цвет волос
                    </li>
                    <li>
                        $year = 1900;          // Год
                    </li>
                </ul>  
            </p>
            <p>
                Есть два устоявшихся негласных стиля используемых для записи идентификаторов, состоящих из нескольких слов: CamelCase и Snake_case. 
            </p>
            <p>
                <strong>CamelCase</strong> - "Верблюжья" нотация (нотация — это устоявшиеся правила записи). Согласно этому стилю идентификаторы, которые состоят из одного слова, пишутся строчными буквами:
                <ul>
                    <li>
                        $color = "серый";
                    </li>
                    <li>
                        $number = 15;
                    </li>
                </ul>
            </p>     
            <p>
                Если идентификатор состоит более, чем из одного слова, то первое слово пишется строчными буквами, а каждое последующее слово начинается с прописной (заглавной) буквы:
                <ul>
                    <li>
                        $myAge = 23;
                    </li>
                    <li>
                        $firstName = "Дональд";
                    </li>
                </ul>
                Верблюжья нотация получила своё название в результате того, что заглавные буквы внутри идентификатора напоминают горбы верблюда.
            </p> 
            <p>
                <strong>Snake_case</strong> - "Змеиная" нотация. Согласно этому стилю идентификаторы, которые состоят из одного слова, пишутся строчными буквами:
                    <ul>
                        <li>
                            $color = "белый";
                        </li>
                        <li>
                            $number = 25;
                        </li>
                    </ul>
            </p> 
            <p>
                Если идентификатор состоит более, чем из одного слова, то слова разделяются символом нижнего подчёркивания, при этом каждое последующее слово пишется с маленькой буквы:
                <ul>
                    <li>
                        $my_age = 23;
                    </li>
                    <li>
                        $first_name = "Дональд";
                    </li>
                </ul>        
            </p> 
         </div>
         <div class="php-instr">
             <p>
                 <strong>Инструкция</strong> — это указание интерпретатору на совершение какого-либо действия, например, создать переменную, запустить цикл, выполнить условный переход, выйти из функции и т. п. Любая программа представляет собой последовательность выполняемых инструкций. Окончание инструкции обозначается символом ; (точка с запятой): <br>
                    ?php <br>
                        echo 'Это текст'; <br>
                    ?>
             </p>
             <p>ниже смотрим код PHP  в действиии</p>
                <?php echo 'Это текст'; ?>  
             <p>
                 Точку с запятой можно не ставить у последней инструкции перед закрывающим тегом ?>. В этом случае закрывающий тег автоматически подставляет точку с запятой после последней инструкции: <br>
                    ?php echo 'Точка с запятой будет подставлена автоматически.' ?>
            </p>
            <p>ниже смотрим код PHP  в действиии</p>
                <?php echo 'Точка с запятой будет подставлена автоматически.' ?>
            <p>
                Обычно инструкции используют внутри себя одно или более выражений, например, инструкция условного перехода имеет выражение, которое используется в качестве условия выполнения. Сами по себе инструкции не имеют ни значения, ни типа.
            </p>
         </div>
    </section>

</body>
</html>
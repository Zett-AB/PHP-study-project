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

</body>
</html>
<?php
// Массив с новостями (замените на свой)
$news = array(
    array(
        "title" => "Мы открылись!",
        "text" => "Новый культурный центр для любителей чтения.",
        "img" => "../img/news1.jpg",
        "date" => "11.11.111",
        "link" => "news/news1.php"
    ),
    array(
        "title" => "День рождения Пушкина",
        "text" => "Пушкину - 222: Россия отмечает день рождения великого поэта.",
        "img" => "../img/news2.jpg",
        "date" => "11.11.111",
        "link" => "news/news2.php"
    ),
    array(
        "title" => "1000 лет первой книге",
        "text" => "Первая печатная книга - 555: мир празднует день рождения письменность.",
        "img" => "../img/news3.jpg",
        "date" => "11.11.111",
        "link" => "news/news3.php"
    )
);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Новости - Читай вместе с нами</title>
    <meta name="description" content="Будьте в курсе последних новостей библиотеки &mdash; мы расскажем о новых событиях и акциях, предлагаемых нашей библиотекой.">
    <!-- Шрифты, стили, слайдер -->
    <link rel="preconnect" type="text/css" href="https://fonts.googleapis.com">
    <link rel="preconnect" type="text/css" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
</head>
<body>
    <header>
        <nav>
            <?php include '../assets/nav.php'; ?>
        </nav>
    </header>
    <main>
        <div class="news">
            <h1>Новости</h1>
            <?php foreach ($news as $item): ?>
                <div class="newsItem">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    <div class="about">
                        <h2><?php echo $item['title']; ?></h2>
                        <p><?php echo $item['text']; ?></p>
                        <p class="date"><?php echo $item['date']; ?></p>
                        <a href="<?php echo $item['link']; ?>" class="button">Читать далее</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>Читай вместе с нами</p>
        <p class="adress">Ждём тебя по адресу: <br>
            пр. Декабристов, 12А, Пермь</p>
        <div class="socialFooter">
            <p>Подпишись!</p>
            <a href="#" class="logoVK"></a>
            <a href="#" class="logoVK"></a>
            <a href="#" class="logoVK"></a>
        </div>
    </footer>
</body>
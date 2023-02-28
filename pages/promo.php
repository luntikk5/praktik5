<?php
// Массив с новостями (замените на свой)
$news = array(
    array(
        "title" => "День открытых дверей",
        "text" => "Предоставляем бесплатный доступ к электронным ресурсам, аудиокнигам и другим материалам. Для студентов и школьников проведём бесплатные экскурсии.",
        "img" => "../img/promo1.jpeg",
        "date" => "11.11.111",
        "link" => "promo/promo1.php"
    ),
    array(
        "title" => "Читайте вместе с друзьями",
        "text" => "Предложите друзьям зарегистрироваться на сайте, каждый получит дополнительные привилегии.",
        "img" => "../img/promo2.jpeg",
        "date" => "11.11.111",
        "link" => "promo/promo2.php"
    ),
    array(
        "title" => "Отпуск для чтения",
        "text" => "Опубликуй в социальных сетях фотографию, которая демонстрирует, как вы читаете книгу или журнал во время отпуска. Лучшие фотографии будут награждены специальными призами от библиотеки, например, бесплатной подпиской на следующий месяц или новую книгу.",
        "img" => "../img/promo3.jpg",
        "date" => "11.11.111",
        "link" => "promo/promo3.php"
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
    <title>Акции - Читай вместе с нами</title>
    <meta name="description" content="Узнайте о всех акциях библиотеки 'Читай вместе с нами'. Получите возможность ознакомиться с нашей коллекцией книг и услугами, задать вопросы и получить консультации наших библиотекарей.">
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
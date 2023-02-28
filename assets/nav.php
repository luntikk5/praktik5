<?php
    // массив данных
    $nav_items = array(
        array('href' => '/index.php', 'text' => 'Каталог'),
        array('href' => '/pages/promo.php', 'text' => 'Акции'),
        array('href' => '/index.php', 'text' => 'Читай вместе с нами', 'class' => 'nameCompany'),
        array('href' => '/pages/news.php', 'text' => 'Новости'),
        array('href' => '/index.php', 'text' => 'Контакты'),
        array('href' => '/index.php', 'text' => 'Профиль', 'class' => 'button autoriz')
    );
?>

<!-- Генерируем навигацию -->
<ul>
    <li><a href="/index.php" class="logo"></a></li>
    <?php foreach($nav_items as $item): ?>
        <li><a href="<?php echo $item['href']; ?>"<?php echo isset($item['class']) ? ' class="'.$item['class'].'"' : ''; ?>><?php echo $item['text']; ?></a></li>
    <?php endforeach; ?>
</ul>
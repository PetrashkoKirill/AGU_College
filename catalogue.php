<?php require_once'./php/connect.php';?>
<?php
$sql = $pdo->prepare("SELECT * FROM courses");
$sql->execute();
$res=$sql->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Колледж АлтГУ</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__logo">
                <img src="images/header_logo.svg" alt="Логотип" class="header__logo-image" />
                <p class="header__logo-title">
                    Колледж Алтайского государственного университета
                </p>
            </div>
            <nav class="header__nav">
                <ul class="nav">
                    <li class="nav__item"><a href="index.html" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="catalogue.php" class="nav__link">Специальности</a></li>
                    <li class="nav__item">
                        <a href="contacts.html" class="nav__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="main-content">
            <section class="main-content__section main-content__section--slider">
                <div class="slider">
                    <div class="slides">
                        <img src="images/slider/00000435.jpg" alt="Image #1" class="slide" />
                        <img src="images/slider/00000476.png" alt="Image #2" class="slide" />
                    </div>
                    <button class="slider__button prev" onclick="prevSlide()">&#10094</button>
                    <button class="slider__button next" onclick="nextSlide()">&#10095</button>
                </div>
            </section>

            <section class="main-content__section main-content__section--category-filter">
                <div class="container">
                    <div class="title">
                        <h1 class="main-content__title">Специальности</h1>
                    </div>
                    <div class="filter-btns">
                        <button type="button" class="filter-btn" id="all">Все
                        </button>
                        <button type="button" class="filter-btn" id="information-technology">Информационные технологии
                        </button>
                        <button type="button" class="filter-btn" id="finance-and-economics">Финансы и экономика
                        </button>
                        <button type="button" class="filter-btn" id="law-and-security">Право и безопасность
                        </button>
                        <button type="button" class="filter-btn" id="design-and-ads">Дизайн и реклама
                        </button>
                        <button type="button" class="filter-btn" id="other">Прочее
                        </button>
                    </div>
                    <div class="filter-items">
                        <?php foreach($res as $course):?>
                        <div class="filter-item <?php echo $course->course_tags ?>">
                            <div class="item-img">
                                <img src="<?php echo $course->course_image?>" alt="Item image">
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__info">
                <p class="text">
                    <strong>Место нахождения:</strong> 656049, Алтайский край, город Барнаул, проспект Ленина, дом 61
                </p>
                <p class="text">
                    <strong>Режим и график работы:</strong> с 8:00 до 17:00; перерыв – с 12:00 до 12:48, выходные –
                    суббота,
                    воскресенье
                </p>
                <p class="text">
                    <strong>Контактный телефон:</strong> (3852) 291-291
                </p>
                <p class="text">
                    <strong>Контактный факс:</strong> (3852) 667-626
                </p>
                <p class="text">
                    <strong>Адрес электронной почты:</strong> <a href="mailto:rector@asu.ru"
                        style="color: #333; text-decoration: none;">rector@asu.ru</a>
                </p>
            </div>
        </footer>
    </div>
    <script src="./js/slider.js"></script>
    <script src="./js/filter.js"></script>
</body>


</html>
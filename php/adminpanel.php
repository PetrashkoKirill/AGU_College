<?php session_start();?>
<?php require_once("../php/connect.php");?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>

<body>
    <div class="wrapper">
        <main class="main-content">
            <section class="main-content__section">
                <?php echo '<h2 class="main-content__title">Редактирование курсов</h2>'.$_SESSION['login']; ?>
                <a href="../php/logout.php">Выйти</a>

                <?php
                $sql = $pdo->prepare('SELECT * FROM courses');
                $sql->execute();
                while ($res = $sql->fetch(PDO::FETCH_OBJ)): ?>
                <form class="form" action="../php/adminpanel.php" method="post">
                    <input type="hidden" name="course_id" value="<?php echo $res->course_id; ?>">
                    <input type="text" name="course_name" value="<?php echo $res->course_name; ?>">
                    <input type="text" name="course_image" value="<?php echo $res->course_image; ?>">
                    <input type="text" name="course_tags" value="<?php echo $res->course_tags; ?>">
                    <input type="submit" value="Сохранить">
                </form>
                <?php endwhile; ?>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $course_id = $_POST['course_id'];
                    $course_name = $_POST['course_name'];
                    $course_image = $_POST['course_image'];
                    $course_tags = $_POST['course_tags'];

                    $row = "UPDATE courses SET course_name = :course_name, course_image = :course_image, course_tags = :course_tags WHERE course_id = :course_id";
                    $query = $pdo->prepare($row);
                    $query->execute([
                        "course_name" => $course_name,
                        "course_image" => $course_image,
                        "course_tags" => $course_tags,
                        "course_id" => $course_id
                    ]);
                }
                ?>

            </section>
        </main>

    </div>

</body>

</html>
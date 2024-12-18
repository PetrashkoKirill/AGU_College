<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в админ-панель</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>

<body>
    <div class="wrapper">
        <main class="main-content">
            <section class="main-content__section">
                <h2 class="main-content__title">Вход в админ-панель</h2>
                <form class="form" action="../php/admin.php
                " method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Введите логин" name="login">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Введите пароль" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </section>
        </main>
    </div>
</body>

</html>
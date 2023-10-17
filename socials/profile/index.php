<?php
ini_set('session.gc_maxlifetime', 300);
ini_set('session.cookie_lifetime', 300);
session_start();
$username2 = $_SESSION[$username2];
// Проверяем, был ли пользователь аутентифицирован
if (!isset($_SESSION[$username2]) || !$_SESSION[$username2]) {
    header('Location: ../login');  // Перенаправляем на страницу входа
    exit();
}

// ... Остальной код с доступом ...

?>
<?php
    if (isset($_POST['logout'])) {
        // Выход пользователя
        session_destroy();
        header('Location: ../login');  // Перенаправляем на страницу входа
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .profile-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>
    <header>
    <h1>Profile</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="../site">Reviews</a></li>
        <li><a href="../login">Logout</a></li>
      </ul>
    </nav>
  </header>
    <div class="profile-container">
        <h1>Профиль пользователя</h1>
        <p>Привет, <?php echo $username2; ?>!</p>
        <!-- Дополнительная информация о пользователе -->
        <!--<p>Ваш username: <?php echo $username2; ?></p>-->
        <!-- <p>Ваш email: ibrashovaab@gmail.com</p> -->

        <!-- Форма для выхода -->
        <form method="POST" action="">
            <button type="submit" name="logout">Выйти</button>
        </form>
        
    </div>

     <footer>
      <p>&copy; 2023 Social Reviews</p>
    </footer>
</body>

</html>
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Students</title>
</head>
<body>
  <header>
    <h1>Students Information</h1>
    <nav>
      <ul>
        <li><a href="../profile">Home</a></li>
        <li><a href="#">Reviews</a></li>
        <!-- <li><a href="/news">News</a></li> -->
        <li><a href="../login">Logout</a></li>
      </ul>
    </nav>
  </header>
  <div class="content">
  <input type="text" id="search" placeholder="Search by name &#128269" onkeyup="filterStudents()">
  </div>
  <div class="content">
    <div class="student-card">
      <img src="https://media.discordapp.net/attachments/1050433610622181478/1163843580788494386/57_20231017201645.png" alt="photo">
      <h2>Аділжан</h2>
      <p>Социальная метка: Химик</p>
      <p>Год рождения: 2007</p>
      <p>Уровень: B</p>
      <p>Хобби: Тренировки, Музыка</p>
    </div>

    <div class="student-card">
      <img src="https://media.discordapp.net/attachments/1050433610622181478/1163846076932046899/57_20231017202838.png" alt="photo">
      <h2>Нұржанәлі</h2>
      <p>Социальная метка: Братан</p>
      <p>Год рождения: 2005</p>
      <p>Уровень: B+</p>
      <p>Хобби: Игра на домбре, Музыка</p>
    </div>
  </div>
  
  
  <div class="content">
    <div class="student-card">
      <img src="https://media.discordapp.net/attachments/1050433610622181478/1163532325112532992/57_20231016234153.png" alt="photo">
      <h2>Арсен</h2>
      <p>Социальная метка: Мефедрончик</p>
      <p>Год рождения: 2007</p>
      <p>Уровень: A</p>
      <p>Хобби: Пение, Музыка, Тренировки</p>
    </div>

    <div class="student-card">
      <img src="https://media.discordapp.net/attachments/1050433610622181478/1163845527687942144/57_20231017202628.png" alt="photo">
      <h2>Азат</h2>
      <p>Социальная метка: Турецкий качок</p>
      <p>Год рождения: 2006</p>
      <p>Уровень: B+</p>
      <p>Хобби: Гулять, Читать книги, Тренировки</p>
    </div>
  </div>
  

  <br />
  <br />
  <br />
  <footer>
    <p>&copy; 2023 Social Reviews</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
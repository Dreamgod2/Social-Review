<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $file = file("ex/users.txt.html");

    foreach ($file as $line) {
        list($savedUsername, $savedPassword) = explode("-", trim($line));
        ini_set('session.gc_maxlifetime', 10);
        session_start();

// Проверяем, введены ли правильные логин и пароль (здесь просто пример, нужно использовать более безопасный механизм хранения паролей)
if ($_POST['username'] === $savedUsername && $_POST['password'] === $savedPassword) {
    $_SESSION[$username2] = $_POST['username'];
    $_SESSION[$username] = true;  // Устанавливаем флаг аутентификации
    header('Location: ../profile');  // Перенаправляем на ограниченную страницу
    exit();
}
        if ($savedUsername === $username && $savedPassword === $password) {
            echo
            "
            <script>
            alert('Login Successfully');
            document.location.href = 'http://kundelik.ddns.net/social/user.php';
            </script>
            ";
            return;
        }
    }
    echo
    "
            <script>
            alert('Error Login');
            document.location.href = '../login';
            </script>
            ";

}
?>
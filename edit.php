<?php

include 'database.php';

if
(
    !isset($_GET['id']) ||
    empty($_GET['id']) ||
    !is_numeric($_GET['id'])
) 
{
    header('Location: index.php');
}

$db = new Database('remotemysql.com', 'rKJoSBuvYr', 'BRaG9Lx50I', 'rKJoSBuvYr');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(empty($_POST['imePrezime'])) {
        Header('Location: edit.php?id='.$_GET['id']);
        exit();
    }

    $db->get_ime($_POST);
}

$get_ime = $db->get_ime($_GET['id']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <a href="index.php"><< Povratak na početnu</a>
    </p>
    <hr>

    <form method="post" action="index.php">

        <input type="hidden" name="id" value="<?php echo $get_ime['id']; ?>">

        <label for="">Ime</label><br>
        <input type="text" name="imePrezime" value="<?php echo $get_ime['imePrezime']; ?>"><br><br>

        <input type="submit" value="Ažuriraj podatke">
    </form>




</body>
</html>




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

$delete_ime = $db->delete_ime($_GET['id']);





?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'functions.php';
session_start();

$_SESSION['num'] = $_GET['num'];

if (empty($_SESSION['num'])) {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class='container py-5'>
        <div class='row'>
            <div class='col'>
                Password: '<?php
                echo generatePassword($selected_num, $characters_list);
                ?>'
            </div>
        </div>
    </div>
</body>

</html>
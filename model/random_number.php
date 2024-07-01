<?php
session_start();
// echo random_float(0, 100, 3);
require_once("../class/random.php");
if (isset($_POST['verify'])) {
    $number_random = new Random(
        $_POST['min'],
        $_POST['max'],
        $_POST['house']
    );
    $_SESSION['tipo'] = $action = $_GET['action'];


    if ($action == "float") {
        if ($house <= 20) {
            $_SESSION['random'] = $number_random->decimal_random(
                $_POST['min'],
                $_POST['max'],
                $_POST['house']
            );
        } else {
            echo "Limite de 20 casas decimais ultrapassado!";
        }
    } elseif ($action == "int") {
        $_SESSION['random'] = $number_random->number_random(
            $_POST['min'],
            $_POST['max'],
            $_POST['house']
        );
    }
    header("location: index.php");
}


function random_float(int $min, int $max, int $house)
{
    $random_int = mt_rand($min, $max);
    $random_decimal = "";
    for ($i = 0; $i < $house; $i++) {
        $random = mt_rand(0, 9);
        $random_decimal = $random_decimal . $random;
    }
    return $random_int . "," . $random_decimal;
}

// header("Location: ".$_SERVER['HTTP_REFERER']."");
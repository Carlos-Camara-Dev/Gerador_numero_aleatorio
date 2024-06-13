<?php
session_start();
// echo random_float(0, 100, 3);
if (isset($_POST['verify'])) {
    $min = $_POST['min'];
    $max = $_POST['max'];
    $house = $_POST['house'];
    $_SESSION['tipo'] = $action = $_GET['action'];

    if ($action == "float") {
        if ($house <= 20) {
            $_SESSION['random'] = random_float($min, $max, $house);
        } else {
            echo "Limite de 20 casas decimais ultrapassado!";
        }
    } elseif ($action == "int") {
        $_SESSION['random'] = mt_rand($min, $max);
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
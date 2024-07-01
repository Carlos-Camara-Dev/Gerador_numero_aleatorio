<?php
// if ($_GET["action"]) {
//     session_start();
// } session_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number</title>
    <link rel="stylesheet" href="../public/assets/css/overall_style.css">
</head>

<body>
    <main class="main">
        <nav>
            <button class="button">
                Inteiro
            </button>
            <button class="button">
                Decimias
            </button>
        </nav>
        <section>
            <section class="painel">

                <form action="../model/random_number.php?action=int" method="post" id="form">
                    <h2>Número inteiro aleátorio</h2>
                    <label for="min"> Valor minimo: </label>
                    <input type="text" id="min" name="min" require>
                    <br>
                    <label for="max"> Valor maximo: </label>
                    <input type="text" id="max" name="max" require>
                    <br>
                    <input type="submit" name="verify" class="button" placeholder="Draw lots">
                </form>
                <article class="result">
                    <?php
                    if (isset($_SESSION['tipo'])) {
                        if ($_SESSION['tipo'] == "int") {
                            include_once("result_random.php");
                        }
                    }
                    ?>
                </article>
            </section>

        </section>
        <section>
            <section class="painel">
                <form action="../model/random_number.php?action=float" method="post" id="form">
                    <h2>Número aleátorio - virgula </h2>
                    <label for="min"> Valor minimo: </label>
                    <input type="text" id="min" name="min" require>
                    <br>
                    <label for="max"> Valor maximo: </label>
                    <input type="text" id="max" name="max" require>
                    <br>
                    <label for="house">Casas decimais: </label>
                    <input type="text" id="house" name="house" require>
                    <br>
                    <input type="submit" name="verify" class="button" placeholder="Draw lots">
                </form>
                <article class="result">
                    <?php
                    if (isset($_SESSION['tipo'])) {
                        if ($_SESSION['tipo'] == "float") {
                            include_once("result_random.php");
                        }
                    }
                    ?>
                </article>
            </section>

        </section>
    </main>
</body>

</html>
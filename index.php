<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section>
            <h2>Número inteiro aleátorio</h2>
            <form action="random_number.php?action=int" method="post">
                <label for="min"> Valor minimo: </label>
                <input type="text" id="min" name="min" require>
                <br>
                <label for="max"> Valor maximo: </label>
                <input type="text" id="max" name="max" require>
                <br>
                <button name="verify">Draw lots</button>
            </form>
            <article>
                <?php
                if ($_SESSION['tipo'] == "int") {
                    include_once("result_random.php");
                }
                ?>
            </article>
        </section>
        <section>
            <h2>Número com virgula aleátorio
            </h2>
            <form action="random_number.php?action=float" method="post">
                <label for="min"> Valor minimo: </label>
                <input type="text" id="min" name="min" require>
                <br>
                <label for="max"> Valor maximo: </label>
                <input type="text" id="max" name="max" require>
                <br>
                <label for="house"> Valor de casas decimais: </label>
                <input type="text" id="house" name="house" require>
                <br>
                <button name="verify">Draw lots</button>
            </form>
            <article>
                <?php
                if ($_SESSION['tipo'] == "float") {
                    include_once("result_random.php");
                }
                ?>
            </article>
        </section>
    </main>
</body>

</html>
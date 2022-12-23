<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ciąg Fibonacciego</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        function fib($n) {
            if ($n == 0) {
                return 0;
            } else if ($n == 1) {
                return 1;
            } else {
                return fib($n - 1) + fib($n - 2);
            }
        }
        ?>
        <form method="post" action="index.php">
            <div class="input-group">
                <h2 style="text-align: center;">FibCalc<h2>
                        <p> Autor: Weronika Wach</p>
                        <p> Grupa: IMST 1.3 </p>
                        
                <hr><br>
                <label>Który element ciągu Fibonacciego chcesz obliczyć?</label>
                <input type="number" name="k">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="show">Pokaż wynik</button>
                <br><br>
            </div>
            <div>Wybrałeś element: <?php
                if (isset($_POST['show'])) {
                    $k = $_POST['k'];
                    echo $k;
                }
                ?><br><br>
                Twój wynik to: <?php
                if (isset($_POST['show'])) {
                    $k = $_POST['k'];
                    echo fib($k);
                }
                ?>
                <br><br>
                <p>Uwaga! jeżeli chcemy wyliczyć element powyżej 30 miejsca w ciągu, może wystąpić opóźnienie w wyświetlaniu wyniku, jednak jest on liczony od momentu wciśnięcia przycisku. </p>
            </div>
        </form>
    </body>
</html>

<?php

class FizzBuzzCalculator {

    public static function fizzBuzz(int $dimension) {

        self::checkDimension($dimension);

        for ($i = 1; $i <= $dimension; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 === 0) {
                echo "Fizz ";
            } elseif ($i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }
        }
    }

    private function checkDimension(int $dimension)
    {
        if ($dimension < 1) {
            throw new Exception('The dimension cannot be less than 1 !');
        }
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>[Algo] FizzBuzz</title>
    </head>

    <body>
        <h1>FizzBuzz made by Hugo CAMOUS</h1>
        <form method="post">
            <label for="dimension">Dimension du FizzBuzz: </label>
            <input type="number" id="dimension" name="dimension" min="1" value="10" required />
            <input type="submit" value="Générer" />
        </form>

        <?php
        if (isset($_POST["dimension"])) {
            echo "<h2>Résultat: </h2>";
            FizzBuzzCalculator::fizzBuzz($_POST["dimension"]);
        }
        ?>
    </body>
</html>

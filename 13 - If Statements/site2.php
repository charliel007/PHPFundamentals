<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site2.php" method="post">
        Number 1: <input type="number" name="numbersEntered[]"> <br>
        Number 2: <input type="number" name="numbersEntered[]"> <br>
        
        <input type="submit">
    </form>

    <?php

        function getMax($num1, $num2)
        {
            if ($num1 > $num2)
            {
                return $num1;
            }
            elseif ($num2 > $num1)
            {
                return $num2;
            }
            else echo "They are equal";
        }

        function getMaxNumber()
        {
            $numbers = $_POST["numbersEntered"];

            if ($numbers[0] > $numbers[1])
            {
                return $numbers[0];
            }
            elseif ($numbers[0] < $numbers[1])
            {
                return $numbers[1];
            }
            else
            {
                echo "They are equal";
            }
        }
        
        echo getMax(4, 5);
        echo "<br>";
        echo getMaxNumber();

    ?>
</body>
</html>
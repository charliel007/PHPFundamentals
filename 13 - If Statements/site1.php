<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $isMale = true;
        $isTall = true;

        if ($isMale && $isTall)
        {
            echo "You are a tall male";
        }
        elseif ($isMale || $isTall) //you could check specifically one or the other (not operator, !) !$isTall
        {
            echo "You are either male or tall";
        }
        else
        {
            echo "You are not male or tall";
        }

    ?>
</body>
</html>
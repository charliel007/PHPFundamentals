<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
        What was your grade?
    <input type="text" name="grade">
    <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    switch($grade)
    {
        case "A":
            echo "You got a A";
            break;
        case "B":
            echo "You got a B";
            break;
        case "C":
            echo "You got a C";
            break;
        case "D":
            echo "You got a D";
            break;
        case "F":
            echo "You got a F";
            break;
        default:
            echo "Invalid Grade";
    }
    
    ?>
</body>
</html>
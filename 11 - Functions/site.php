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
        
        <input type="submit">
    </form>

    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHi("Mike", 40);
        sayHi("Tom", 50);
        sayHi("Oscar", 60);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is an example of where the get mothod is not what would be used because get methods are stored in the url-->
    <form action="site1Get.php" method="get">
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="submit">
    </form>
    <br><br>

    <?php
        echo $_GET["password"]
    ?>
</body>
</html>
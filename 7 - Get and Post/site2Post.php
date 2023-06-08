<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Post method is more secure because the information is not stored in the url -->
    <form action="site2Post.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="submit">
    </form>
    <br><br>

    <?php
        echo $_POST["password"]
    ?>
</body>
</html>
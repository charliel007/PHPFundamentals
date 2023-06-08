<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="get">
        Name: <input type="text" name="name"> <br>

        <input type="submit" value="submit">
    </form>

    <?php
        echo $_GET["name"];

        // echo $_GET["age"]; ===> if I put   &age=70   at the end of the url it would populate this echo get.
        // Takeaway: You can store information within the URL.
    ?>
</body>
</html>
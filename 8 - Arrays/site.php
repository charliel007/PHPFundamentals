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
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[1] = 400;
        $friends[4] = "Jack"; //added another element
        echo $friends[0]; //access the index 0, "kevin"
    ?>
</body>
</html>
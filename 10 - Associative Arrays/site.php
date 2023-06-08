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
        Sutdent (Jim is a key to enter): <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        

        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"); //associative array: name is the key, grade is the value
        echo $grades["Jim"];
        echo "<br>";
        $grades["Jim"] = "F";
        echo $grades["Jim"];
        echo "<br>";
        echo count($grades);
        echo "<br><br><br>";
        
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>
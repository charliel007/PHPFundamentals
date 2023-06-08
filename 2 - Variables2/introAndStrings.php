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
    $phrase = "To be or not to be"; //string
    $age = 40; //integer
    $gpa = 40.0; //float
    $isMale = false; //boolean

    echo "Hello <br>"; 
    echo "$phrase <br>";
    echo strtolower($phrase);
    echo strtoupper("$phrase <br>");
    echo strlen($phrase);
    echo "<br>";
    echo "$phrase[0] <br>"; //indexes

    echo str_replace("not", "will", $phrase);  //("(portion within string)", ("what you replace it with"), variable)
    echo "<br>";
    echo substr("$phrase <br>", 7); //from there on (index)
    echo substr($phrase, 7, 3); //from and to
    

    ?>

</body>
</html>
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
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating)
            {
                $this -> title = $title;
                $this -> rating = $rating;
            }
            // Getters and Setters
            function getRating(){
                return $this -> rating;
            }

            function setRating($rating){
                $this -> rating = $rating;
            }

            
        }

        $avengers = new Movie("Avengers", "PG-13");
        // G, PG, PG-13, R, NR

        // with $rating being private, it is no longer accessible outside of the class, getter and setters need used
        //     $avengers -> rating = "dog";
        // echo $avengers -> rating;
        echo $avengers -> getRating();
        echo "<br>";

            $avengers -> setRating("Dog");
        echo $avengers -> getRating();


        /* We could limit the response to the setter 
            
            function __construct($title, $rating)
            {
                $this -> title = $title;
                $this -> setRating($rating);   ------This change checks the initial value passed in with the constructor
            }
                        
            function setRating($rating){
                if($rating == "G" || $RATING == "PG" || )
                $this -> rating = $rating;
                else{
                    $this -> rating = "NR";
                }
            }

            $avengers = new Movie("Avengers", "Dog"); -------Dog passed into the constructor will now also be NR
            */



    ?>
</body>
</html>
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
        class Book {
            var $title;
            var $author;
            var $pages;
            
            //adding a constructor, throwing in a parameter for extra measure (don't have too)
            function __construct($name){
                echo "New Book Created $name <br>";
            } 
        
        }

        $book1 = new Book("Book 1");
        $book1 -> title = "Harrry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        $book2 = new Book("Book 2");
        $book2 -> title = "Lord of the Rings";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;

        echo $book1 -> title;
        echo "<br>";
        echo $book1 -> author;
        echo "<br>";
        echo "<br>";
        echo $book2 -> title;
        echo "<br>";
        echo $book2 -> author;
        echo "<br>";
        echo "<br>";

        //Taking less lines of code by using constructor with parameters
        class BetterBook {
            var $title;
            var $author;
            var $pages;
            
            //adding a constructor, throwing in a parameter for extra measure (don't have too)
            function __construct($aTitle, $aAuthor, $aPages){
                $this -> title = $aTitle;
                $this -> author = $aAuthor;
                $this -> pages = $aPages;
            } 
        }

        $book3 = new BetterBook("Harry Potter", "JK Rowling", 400);
        $book4 = new BetterBook("Lord of the Rings", "Tolkien", 700);
        
        echo $book3 -> title;
    ?>
</body>
</html>
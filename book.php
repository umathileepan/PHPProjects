<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Title: <?php echo $title ?></h1>
    <h2> Author: <?php echo $author ?> </h2>
    <h3> Word: <?php echo $wordCount ?> </h3>

    <?php
        class Book {
            var $title;
            var $author;
            var $pages;
            private $rating;

            function __construct($btitle,$bAuthor,$bPages){
                $this->title=$btitle;
                $this->author=$bAuthor;
                $this->pages=$bPages;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($brating) {
                $this->rating = $brating;
            }

        }

        $book1 = new Book("Magic world","Harry Potter",300);
        $book1->setRating("A");
        echo $book1->getRating();
        
    ?>
</body>
</html>
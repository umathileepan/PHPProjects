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

            function __construct($btitle,$bAuthor,$bPages){
                $this->title=$btitle;
                $this->author=$bAuthor;
                $this->pages=$bPages;
            }

        }

        $book1 = new Book("Magic world","Harry Potter",300);
        echo $book1->title;
        
    ?>
</body>
</html>
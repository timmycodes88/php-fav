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

            function __construct($title, $author, $pages) {
                echo "<h4>New Book Created</h4>";
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }
        }

        $book1 = new Book("Tim is Awesome", "The World", "777");


    ?>

</body>
</html>

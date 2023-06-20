<?php
require_once 'Movie.php';

$movie = new Movie("The Shawshank Redemption", "Drama", 142, "Frank Darabont");
$movie1 = new Movie("The Shawshank Redemption", ["Action", "Sci-Fi"], 122, "Joss Whedon");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <?php echo $movie->toString(); ?>
    </div>
    
    <div>
        <?php echo $movie1->toString(); ?>
    </div>

</body>
</html>

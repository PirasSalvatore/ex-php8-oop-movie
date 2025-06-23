<?php


require_once './Models/Review.php';
require_once './Traits/Reviews.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';






$action = new Genre("Action", "A genre that emphasizes physical feats, including fights, chases, and explosions.");
$adventure = new Genre("Adventure", "A genre that typically involves a journey or quest, often in exotic locations.");
$war = new Genre("War", "A genre that focuses on warfare, battles, and the experiences of soldiers.");
$scifi = new Genre("Science Fiction", "A genre that explores futuristic concepts, advanced technology, space exploration, and often speculative science.");


$Inception = new Movie("Inception", "Christopher Nolan", 2010, "A thief who steals corporate secrets through the use of dream-sharing technology.", [$action, $scifi]);
$Interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.", [$adventure, $scifi]);
$Dunkirk = new Movie("Dunkirk", "Christopher Nolan", 2017, "Allied soldiers are surrounded by the German army and evacuated during a fierce battle in World War II.", [$war, $action]);

$Inception->addReview(new Review("Alice", "Amazing movie with a complex plot!"));
$Inception->addReview(new Review("Bob", "A visual masterpiece."));
$Interstellar->addReview(new Review("Charlie", "A thought-provoking journey through space and time."));
$Dunkirk->addReview(new Review("David", "Intense and gripping from start to finish."));

var_dump($Inception);
echo "<br>";
echo $Inception->getDescription();
echo "<br>";
var_dump($Interstellar);
echo "<br>";
echo $Interstellar->getDescription();
echo "<br>";
var_dump($Dunkirk);
echo "<br>";
echo $Dunkirk->getDescription();
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>
<body>
    
</body>
</html>
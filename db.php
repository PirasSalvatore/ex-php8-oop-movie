<?php

require_once './Models/Review.php';
require_once './Traits/Reviews.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';

$action = new Genre("Action", "A genre that emphasizes physical feats, including fights, chases, and explosions.");
$adventure = new Genre("Adventure", "A genre that typically involves a journey or quest, often in exotic locations.");
$war = new Genre("War", "A genre that focuses on warfare, battles, and the experiences of soldiers.");
$scifi = new Genre("Science Fiction", "A genre that explores futuristic concepts, advanced technology, space exploration, and often speculative science.");


$Inception = new Movie("Inception", "Christopher Nolan", 2010, "A thief who steals corporate secrets through the use of dream-sharing technology.", [$action, $scifi],"https://mr.comingsoon.it/imgdb/locandine/big/47397.jpg");
$Interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.", [$adventure, $scifi],"https://m.media-amazon.com/images/I/712I5GOGprL._UF1000,1000_QL80_.jpg");
$Dunkirk = new Movie("Dunkirk", "Christopher Nolan", 2017, "Allied soldiers are surrounded by the German army and evacuated during a fierce battle in World War II.", [$war, $action],"https://valeriocaprara.it/wp-content/uploads/2017/09/maxresdefault.jpg");

$Inception->addReview(new Review("Alice", "Amazing movie with a complex plot!"));
$Inception->addReview(new Review("Bob", "A visual masterpiece."));
$Interstellar->addReview(new Review("Charlie", "A thought-provoking journey through space and time."));
$Dunkirk->addReview(new Review("David", "Intense and gripping from start to finish."));


?>
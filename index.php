<?php


Class Genre {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }
}

Class Movie {
    public $title;
    public $director;
    public $year;
    public $description;
    public $genre;

    public function __construct($title, $director, $year, $description, Genre $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->description = $description;
        $this->genre = $genre;
    }

    public function getYear(){
        return $this->year;
    }

    public function getDescription(){
        return $this->description;
    }
}

$action = new Genre("Action", "A genre that emphasizes physical feats, including fights, chases, and explosions.");
$adventure = new Genre("Adventure", "A genre that typically involves a journey or quest, often in exotic locations.");
$war = new Genre("War", "A genre that focuses on warfare, battles, and the experiences of soldiers.");


$Inception = new Movie("Inception", "Christopher Nolan", 2010, "A thief who steals corporate secrets through the use of dream-sharing technology.", $action);
$Interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.", $adventure);
$Dunkirk = new Movie("Dunkirk", "Christopher Nolan", 2017, "Allied soldiers are surrounded by the German army and evacuated during a fierce battle in World War II.", $war);

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
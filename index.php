<?php

Class Movie {
    public $title;
    public $director;
    public $year;

    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }
}

$Inception = new Movie("Inception", "Christopher Nolan", 2010);
$Interstellar = new Movie("Interstellar", "Christopher Nolan", 2014);
$Dunkirk = new Movie("Dunkirk", "Christopher Nolan", 2017);

var_dump($Inception);
echo "<br>";
echo $Inception->getYear();
echo "<br>";
var_dump($Interstellar);
echo "<br>";
echo $Interstellar->getYear();
echo "<br>";
var_dump($Dunkirk);
echo "<br>";
echo $Dunkirk->getYear();
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
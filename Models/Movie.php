<?php


Class Movie {
    public $title;
    public $director;
    public $year;
    public $description;
    public $genre = [];

    use Reviews;

    public function __construct($title, $director, $year, $description, array $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->description = $description;
        foreach ($genre as $g) {
            if (!$g instanceof Genre) {
                throw new InvalidArgumentException('Ogni elemento deve essere un oggetto Genre');
            }
            $this->genre[] = $g;
        }
    }

    public function getYear(){
        return $this->year;
    }

    public function getDescription(){
        return $this->description;
    }
}


?>
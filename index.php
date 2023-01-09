<?php
class Movie {
    public $genre;
    public $title;
    public $description;

    //costruttore
    public function __construct($title, $genre, $description)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
    }

    //get e set
    public function set_title($title)
    {
        $this->title = $title;
    }

    public function get_title()
    {
       return $this->title;
    }

    public function set_genre($genre)
    {
        $this->title = $genre;
    }

    public function get_genre()
    {
       return $this->genre;
    }

    public function set_description($description)
    {
        $this->title = $description;
    }

    public function get_description()
    {
       return $this->description;
    }

    //Metodo
    public function showNameMovie()
    {
        echo "
            <h1>{$this->title}</h1>
            <h2>Genere</h2>
            <p>{$this->genre}</p>
            <h2>Descrizione</h2>
            <p>{$this->description}</p>
            ";
    }
}

$movie1 = new Movie("Batman", "Azione-Mistero-Drammatico", "Batman è stato originariamente introdotto come uno spietato vigilante che spesso uccideva o mutilava criminali, ma si è evoluto in un personaggio con un codice morale rigoroso e un forte senso di giustizia.");
echo $movie1->showNameMovie();

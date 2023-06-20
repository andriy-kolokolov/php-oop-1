<?php

class Movie {
    // private fields for encapsulation
    private $title;
    private $genres;
    private $duration;
    private $director;

    public function __construct($title, $genres, $duration, $director) {
        $this->title = $title;
        $this->genres = $genres;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function toString() {
        return "Title -> " . $this->title .
            ". Genres -> " . $this->genresToString().
            ". Duration -> " . $this->duration .
            ". Director -> " . $this->director;
    }

    /**
     * @return string
     */
    public function genresToString() {
        if (gettype($this->genres) == "array") {
            return implode(" ", $this->genres);
        } else {
            return $this->genres;
        }
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function getGenres() {
        return $this->genres;
    }

    /**
     * @param array $genres
     */
    public function setGenres($genres) {
        $this->genres = $genres;
    }

    /**
     * @return int
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration) {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDirector() {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector($director) {
        $this->director = $director;
    }


}
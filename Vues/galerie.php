<?php

class Photos
{
    private $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=dbb-restaurant;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }

    public function listerPhotos()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photos');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject()) {
            $photos[] = $photo;
        }

        return $photos;
    }
}

require_once 'Vues/liste-gallery.php';
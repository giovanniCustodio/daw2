<?php

class Artista_musica {

    private $idArtistaMusica;
    private $id_artista;
    private $id_musica;

    function getIdArtistaMusica() {
        return $this->idArtistaMusica;
    }

    function getId_artista() {
        return $this->id_artista;
    }

    function getId_musica() {
        return $this->id_musica;
    }

    function setIdArtistaMusica($idArtistaMusica) {
        $this->idArtistaMusica = $idArtistaMusica;
    }

    function setId_artista($id_artista) {
        $this->id_artista = $id_artista;
    }

    function setId_musica($id_musica) {
        $this->id_musica = $id_musica;
    }
}

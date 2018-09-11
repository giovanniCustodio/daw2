<?php

class Artista {

    private $idArtista;
    private $nomeArtista;
    private $emailArtista;
    private $senhaArtista;

    function getIdArtista() {
        return $this->idArtista;
    }

    function getNomeArtista() {
        return $this->nomeArtista;
    }

    function getEmailArtista() {
        return $this->emailArtista;
    }

    function getSenhaArtista() {
        return $this->senhaArtista;
    }

    function setIdArtista($idArtista) {
        $this->idArtista = $idArtista;
    }

    function setNomeArtista($nomeArtista) {
        $this->nomeArtista = $nomeArtista;
    }

    function setEmailArtista($emailArtista) {
        $this->emailArtista = $emailArtista;
    }

    function setSenhaArtista($senhaArtista) {
        $this->senhaArtista = $senhaArtista;
    }
}

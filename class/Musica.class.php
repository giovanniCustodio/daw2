<?php

class Musica{
    private $idMusica;
    private $nomeMusica;
    private $letra;
    private $arquivo;
    private $cifra;
    private $ano;
    private $estilo;

    function getIdMusica() {
        return $this->idMusica;
    }

    function getNomeMusica() {
        return $this->nomeMusica;
    }

    function getLetra() {
        return $this->letra;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getCifra() {
        return $this->cifra;
    }

    function getAno() {
        return $this->ano;
    }

    function getEstilo() {
        return $this->estilo;
    }

    function setIdMusica($idMusica) {
        $this->idMusica = $idMusica;
    }

    function setNomeMusica($nomeMusica) {
        $this->nomeMusica = $nomeMusica;
    }

    function setLetra($letra) {
        $this->letra = $letra;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    function setCifra($cifra) {
        $this->cifra = $cifra;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setEstilo($estilo) {
        $this->estilo = $estilo;
    }
}
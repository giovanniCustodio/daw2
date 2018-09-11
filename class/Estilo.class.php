<?php

class Estilo{
    private $idEstilo;
    private $nomeEstilo;
    
    function getIdEstilo() {
        return $this->idEstilo;
    }

    function getNomeEstilo() {
        return $this->nomeEstilo;
    }

    function setIdEstilo($idEstilo) {
        $this->idEstilo = $idEstilo;
    }

    function setNomeEstilo($nomeEstilo) {
        $this->nomeEstilo = $nomeEstilo;
    }
}
<?php

class Usuario{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $telefone;
    private $senhaUsuario;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmailUsuario() {
        return $this->emailUsuario;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenhaUsuario() {
        return $this->senhaUsuario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenhaUsuario($senhaUsuario) {
        $this->senhaUsuario = $senhaUsuario;
    }
}
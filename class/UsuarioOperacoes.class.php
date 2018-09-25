<?php

class UsuarioOperacoes {

    public function __construct() {
        //
    }

    public function registrarDadosDoUsuario() {
        try {
            include_once 'conexao.php';
            
            $sql = "insert into usuario(nomeUsuario, emailUsuario, telefone, senhaUsuario) "
                    . "values (:nomeUsuario, :emailUsuario, :telefone, :senhaUsuario);";
            
            $preparedStatment = $connection->prepare($sql);
            
            $preparedStatment = bindParam(':nomeUsuario', $nomeUsuario);
            $preparedStatment = bindParam(':emailUsuario', $emailUsuario);
            $preparedStatment = bindParam(':telefone', $telefone);
            $preparedStatment = bindParam(':senhaUsuario', $senhaUsuario);
            
            $result = array();

            if ($preparedStatment->execute() == TRUE) {
                $result = $preparedStatment->fetchAll();
//                print_r($result);
            } else {
                throw new PDOException("Execution Error." . $preparedStatment->errorCode() . " - " .
                $preparedStatment->errorInfo());
            }
        } catch (PDOException $exc) {
            if ((isset($connection)) && ($connection->inTransaction())) {
                $connection->rollBack();
            }
            print $exc->getMessage();
        } finally {
            if (isset($connection)) {
                unset($connection);
            }
            return $result;
        }
    }

}

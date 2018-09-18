<?php

class UsuarioOperacoes {

    public function __construct() {
        //
    }

    public function registrarDados() {
        try {
            include_once 'conexao.php';
            $sql = "insert into usuario(nomeUsuario, emailUsuario, telefone senhaUsuario) "
                    . "values ('', '', 0,'');";
            
            $preparedStatment = $connection->prepare($sql);

            $preparedStatment->bindParam(":texto", $pTextoBusca);
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

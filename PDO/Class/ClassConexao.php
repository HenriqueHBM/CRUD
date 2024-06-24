<?php

abstract class ClassConexao
{
    //Realiza a conecao com o banco
    protected function conectaBD()
    {

        try {

            $con = new PDO("mysql:host=localhost;dbname=crud", "root", "password");
            return $con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}

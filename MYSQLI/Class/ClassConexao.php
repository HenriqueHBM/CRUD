<?php

abstract class ClassConexao
{
    //Realiza a conecao com o banco
    protected function conectaBD()
    {

        try {

            $con = new mysqli("localhost", 'root', 'password', 'crud');
            return $con;
        } catch (Exception $Erro) {
            return $Erro->getMessage();
        }
    }
}

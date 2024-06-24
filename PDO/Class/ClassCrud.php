<?php
include 'ClassConexao.php';
class ClassCrud extends ClassConexao
{

    //Atributos
    private $crud;
    private $contador;

    //Preparacao das declarativas
    private function preparedStatements($query, $parametros)
    {
        $this->countParametros($parametros);
        $this->crud = $this->conectaBD()->prepare($query);

        //Se tiver parametros, realiza a query
        if($this->contador > 0){
            for ($x = 1; $x <= $this->contador; $x++) {
                $this->crud->bindValue($x, $parametros[$x - 1]);
            }
        }
        $this->crud->execute();
    }

    // Contador de parametros
    private function countParametros($parametros)
    {
        $this->contador = count($parametros);
    }


    // Insert into BD
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $parametros);
        return  $this->crud;
    }
}


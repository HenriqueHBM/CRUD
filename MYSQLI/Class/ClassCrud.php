<?php
//Puxa toda a rota vor var/etc...
include "{$_SERVER['DOCUMENT_ROOT']}/CRUD/MYSQLI/Class/ClassConexao.php";
class ClassCrud extends ClassConexao
{
    //Atributos
    private $crud;
    private $contador;
    private $resultado;

    private function preparedStatements($query, $tipos, $parametros)
    {
        $this->countParametros($parametros);
        $con = $this->conectaBD();
        $this->crud = $con->prepare($query);

        if ($this->contador > 0) {
            $callParametros = array();
            foreach ($parametros as $key => $parametro) {
                //& == Referencia
                $callParametros[$key] = &$parametros[$key];
            }
            array_unshift($callParametros, $tipos);
            call_user_func_array(array($this->crud, 'bind_param'), $callParametros);
        }

        $this->crud->execute();
        $this->resultado = $this->crud->get_result();
    }

    private function countParametros($parametros)
    {
        $this->contador = count($parametros);
    }

    //Insert into DB
    public function insertDB($tabela, $condicao, $tipos, $parametros)
    {
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $tipos, $parametros);
        return $this->crud;
    }

    //selacao BD, select bd
    public function selectDB($campos, $tabela, $condicao,$tipos, $parametros)
    {
        $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $tipos, $parametros);
        return  $this->resultado;
    }
// Deletar Dados BD
    public function deleteDB($tabela, $condicao,$tipos, $parametros){
        $this->preparedStatements("delete from {$tabela} where {$condicao}",$tipos,  $parametros);
        return $this->crud;
    }

    // Editar dado
    public function updateDB($tabela, $set, $condicao, $tipos, $parametros){
        $this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $tipos, $parametros);
        return $this->crud;
    }
}

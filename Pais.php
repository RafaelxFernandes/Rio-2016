<?php
class Pais
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }
    public function exibirTodos()
    {
        $resultado = $this->mysql->query('SELECT nome FROM pais');
        $esportes = $resultado->fetch_all(MYSQLI_ASSOC);
        return $esportes;
    }
    
}
<?php
class Esporte
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }
    public function exibirTodos()
    {
        $resultado = $this->mysql->query('SELECT nome FROM esporte');
        $esportes = $resultado->fetch_all(MYSQLI_ASSOC);
        return $esportes;
    }
    
}
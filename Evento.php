<?php
class Evento
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }
    public function exibirTodos()
    {
        $resultado = $this->mysql->query('SELECT Nome,Esporte,Local FROM evento');
        $esportes = $resultado->fetch_all(MYSQLI_ASSOC);
        return $esportes;
    }
    
}

?>
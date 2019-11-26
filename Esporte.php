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

    public function encontrarPorId(string $id)
    {
        $selecionaEsporte = $this->mysql->prepare("SELECT nome FROM ESPORTE WHERE id = ?");
        $selecionaEsporte->bind_param('s', $id);
        $selecionaEsporte->execute();
        $esporte = $selecionaEsporte->get_result()->fetch_assoc();
        return $esporte;
    }
    
}
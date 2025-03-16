<?php
class Conexao {
    private $host = "smpsistema.com.br";
    private $dbname = "u283879542_booksandfun";
    private $usuario = "u283879542_booksandfun";
    private $senha = "@Booksandfun01";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConexao() {
        return $this->pdo;
    }
}

?>



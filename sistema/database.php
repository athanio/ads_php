<?php
class Database{
    private $host = "localhost";
    private $dbname = 'empresa';
    private $user = "root";
    private $pass = "";
    private  $conn;
    public function Connect(){
        try {
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname, $this->user, $this->pass);
        }catch (PDOException $e){
            echo "Erro na conexao " . $e;
        }
        return $this->conn;
        }
}
// $c = new Database();
// $cco = $c->Connect();
// $sql ="SELECT * FROM produtos";
// $start =  $cco->query($sql);
// print_r($start->fetchALL(PDO::FETCH_ASSOC));

?>
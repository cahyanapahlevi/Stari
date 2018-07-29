<?php
 class Database{
    private $host, $port, $dbname, $username, $password, $pdo, $url;

    function __construct($host, $port, $dbname, $username, $password){
      $this->host     = $host;
      $this->port     = $port;
      $this->dbname   = $dbname;
      $this->username = $username;
      $this->password = $password;
      $this->url      = "mysql:host=$host;dbname=$dbname;port=$port;";
      $this->pdo      = new PDO($this->url, $this->username, $this->password);
    }

    function query($query){
      $exec   = $this->pdo->query($query);
      return $exec->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert($table, $item=array()){
      $query  = "insert into $table ";
      $col    = "(";
      $val    = "(";
      foreach ($item as $key => $value) {
        $col  .= $key.",";
        $val  .= $value.",";
      }
      $col[strlen($col)-1]  = ")";
      $val[strlen($val)-1]   = ")";
      $query  .= $col."values".$val;
      $exec   = $this->pdo->prepare($query);
      $exec->execute();
      return $exec->fetchAll();
    }
  }
?>

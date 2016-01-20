<?php 
class MeowSearch {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        
        $sql = 'select ID,title,released,gross,tickets from moviesTable2014';
        if($q){
            $sql = "select title,released,gross,tickets from moviesTable2014 where title like '%{$q}%'";
        }
        
       // $stmt = $this->conn->prepare($sql);
        //$success = $stmt->execute(array($q,$q));

        
        $stmt = $this->conn->query($sql);
        if (!$stmt) {
           var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
    public function getDetail($g){
        $sql = "select * from movies2014 where ID = {$g}";
        //print_r($sql);
        $stmt = $this->conn->query($sql);
        if (!$stmt) {
            //var_dump($stmt->errorInfo());
            echo "Failed";
            return false;
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
?>
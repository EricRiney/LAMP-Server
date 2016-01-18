<?php 
class MeowSearch {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select title,released,gross,tickets from movies2014';
        print_r($q);
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {            
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>
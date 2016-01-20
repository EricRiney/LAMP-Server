<?php 
class Search {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    //this search function
    //takes a single parameter and uses it to search 
    //the title field of our db
    public function search($q) {
        $sql = 'select ID,title,released,gross,tickets from movies2014';
        if($q){
            $sql = "select title,released,gross,tickets from movies2014 where title like '%{$q}%'";
        }
        
        $stmt = $this->conn->query($sql);
        if (!$stmt) {
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
    //detail function
    //takes a single parameter and uses it to search 
    //the key field of our db
    public function getDetail($g){
        $sql = 'select * from movies2014 where ID = {$g}';
        print_r($sql);
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
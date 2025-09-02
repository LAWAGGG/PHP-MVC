<?php 

class Connection {
    private $hostname = "localhost";
    private $username = "faqih";
    private $password = "1243";
    private $dbname = "ProductManagement";

    public function connect(){
        return new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
    }
}

?>
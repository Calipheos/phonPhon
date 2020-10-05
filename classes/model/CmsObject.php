<?php
class CmsObject {
    protected $conn;
    protected function establishConnection(){
        // configuration of the database
        include 'config.php';
        // Create connection
        $this->conn = new \mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
            throw new Exception('SQL Connection Error'.$sql.$this->$conn->error);
        }
    }
    protected function preapereQuery ($queryText, $parameterTypes,$values)
    {
        $this->establishConnection();
        $this->conn->prepare($queryText);
        foreach ($values as $hodnota)
        $this->conn->bind_param('i',$this->id);

        // prepare sql and bind parameters
        // $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES (:firstname, :lastname, :email)");
        // $stmt->bindParam(':firstname', $firstname);
        // $stmt->bindParam(':lastname', $lastname);
        // $stmt->bindParam(':email', $email);
        
    }
    protected function executeQuerry($stmt){

        return $result = $stmt->execute();
        //echo "Do I run twice?";
//        if ($result == TRUE){
//            //$result = $this->conn->query($sql);
//            echo "Success!";
//            $response = 'OK';
//            $this->conn->close();
//            //$conn.close();
//            $responseArray = array("responseMessage" => $response,"responseContent" => $result);
//            return $responseArray;
//        } else {
//            // throw new Exception('SQL Querry Error'.$sql.$this->conn->error);
//            $response = ['Connection Error',$this->conn->error];
//            $result = "SQL ERROR!";
//            $this->conn->close();
//            //$conn.close();
//            return $responseArray  = array("responseMessage" => $response,"responseContent" => $result);
//        }
    }
}
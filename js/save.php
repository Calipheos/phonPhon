<?php 
 require '../vendor/autoload.php';
 $test = new phonPhon\Test();
    $lilly = new phonPhon\DatabaseHandler();
    $s = "','";
    $response = $lilly -> readObject("SELECT ifnull(MAX(idmain_navigation),1) as 'ID' FROM main_navigation");
    
    print_r( $response);
   
    
    $id = $response[0]['ID'];
  
    
    
    $label = $_POST["label"];
    $desc = $_POST["desc"];

    echo $label." ".$desc;
    //$label = 'label';
    //$desc = 'desc';
    $path = 'test';
    $type = 'main_navigation';
    $arguments = "idmain_navigation,label,description,path";
    $values = $id.$s.$label.$s.$desc.$s.$path;
    
    $lilly -> saveObject($type,$arguments,$values);
?>
<?php
abstract class CmsObject extends \phonPhon\DatabaseHandler {
    private $type = '';
    private $arguments;

    public function StoreItem($type,$attributes,$values) {
        saveObject($type,$values);

    }
    public function ReadItem($type,$id){


    }
    public function UpdateItem($type,$id,$attributes,$values) {


    }
    public function DeleteItem() {


    }

}
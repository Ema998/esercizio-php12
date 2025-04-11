<?php 
abstract class Category{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function getMyCategory();
}


?>
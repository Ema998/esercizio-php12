<?php 
class Attuality extends Category{
    public function __construct($name){
        parent::__construct($name);
    }

    public function getMyCategory(){
        echo $this->name;
    }
}
class Sport extends Category{
    public function __construct($name){
        parent::__construct($name);
    }

    public function getMyCategory(){
        echo $this->name;
    }
}

class Gossip extends Category{
    public function __construct($name){
        parent::__construct($name);
    }

    public function getMyCategory(){
        echo $this->name;
    }
}

class History extends Category{
    public function __construct($name){
        parent::__construct($name);
    }

    public function getMyCategory(){
      echo $this->name;
    }
}

$attualita = new Attuality("Attualità");
$basket = new Sport("Sport");
$portinaia = new Gossip("Gossip");
$storia = new History("Storia");



?>
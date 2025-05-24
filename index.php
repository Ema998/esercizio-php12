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
$attualita->getMyCategory();

$basket = new Sport("Sport");
$basket->getMyCategory();

$portinaia = new Gossip("Gossip");
$portinaia->getMyCategory();

$storia = new History("Storia");
$storia->getMyCategory();


?>

<?php 
abstract class Category{
    abstract public function getMyCategory();
}

class Attuality extends Category{
    public function getMyCategory(){
        return "Attualità";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        return "Sport";
    }
}

class Culture extends Category{
    public function getMyCategory(){
        return "Cultura";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        return "Gossip";
    }
}

class History extends Category{
    public function getMyCategory(){
        return "Storia";
    }
}

$attualita = new Attuality("Attualità");
echo $attualita->getMyCategory();

$basket = new Sport("Sport");
echo $basket->getMyCategory();

$portinaia = new Gossip("Gossip");
echo $portinaia->getMyCategory();

$storia = new History("Storia");
echo $storia->getMyCategory();

?>
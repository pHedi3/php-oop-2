<?php 

class EShop {

    private $name;

    private $address;

    private $products  = [];

    private $user = [];

    private $userPremium = [];

    public function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function addUser(User $var) {
        $this->user[] = $var;
    }
    public function addUserPremium(PremiumUser $var) {
        $this->userPremium[] = $var;
    }

    public function removeProduct(Product $var) {
        $id = array_search($var, $this->products);
        unset($this->products[$id]);
        $this->products = array_values($this->products);
    }

    
}

// ---------------------------------------------

class Product {

    private $label;
    private $name;
    private $price;
    private $weight; 

    public function __construct(string $label, string $name, int $price) {
        $this->label = $label;
        $this->name = $name;
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }

}

Class TechProduct extends Product {

    private $needBattery;
    private $compatibility;
    private $os;

}

Class BeautyProduct extends Product {

    private $uses;
    private $composition;
}

// ---------------------------------------------

class User {

    private $nameUser;
    private $address;
    private $productS = [];
    private $Card;
    private $sconto = 0;

    public function __construct(string $name, string $address) {
        $this->nameUser = $name;
        $this->address = $address;
    }

    public function addCard(string $name, string $number, string $date) {
        $this->card = new Card($name, $number, $date);
    }

    public function addProduct(Product $var) {
        $this->productS[] = $var;
    }

    public function getSconto() {
        return $this->sconto;
    }

    public function getName() {
        return $this->nameUser;
    }


}

class PremiumUser {

    private $nameUser;
    private $addres;
    private $productS = [];
    private $card;
    private $sconto = 50;
    public function __construct(string $name, string $address) {
        $this->nameUser = $name;
        $this->address = $address;
    }

    public function addCard(string $name, string $number, string $date) {
        $this->card = new Card($name, $number, $date);
    }

    public function addProduct(Product $var) {
        $this->productS[] = $var;
    }

    public function getSconto() {
        return $this->sconto;
    }
    public function getName() {
        return $this->nameUser;
    }

}

// --------------------------------------------
class Card {
    private $name;
    private $number;
    private $prodoctS = [];
    private $expirationDate;
    public function __construct(string $name, string $number, string $date) {
        $this->name = $name;
        $this->number = $number;
        $this->expirationDate = $date;
    }
}

// ----------------------------------------------

$hooli = new EShop('Hooli', 'Via Parto in Tre');

$smartPhone = new TechProduct('iphone', 'iphon 12 pro', 1200);
$toyCar = new TechProduct('toy Car Power', 'extrem Car', 240);
$cream = new BeautyProduct('hand cream', 'levinel', 20);
$shampo = new BeautyProduct('shampo capelli grassi', 'paludon', 3);
$book = new Product('the dust', 'the triology of dust', 12);

$hooli->addProduct($smartPhone);
$hooli->addProduct($toyCar);
$hooli->addProduct($cream);
$hooli->addProduct($shampo);
$hooli->addProduct($book);

$gino = new User('Gino', 'Via Pollo Spennato');
$gastone = new PremiumUser('Gastone', 'Via Riccanza');

$hooli->addUser($gino);
$hooli->addUserPremium($gastone);

$gino->addCard('Gino', '20203030', '2020-08-9');
$gastone->addCard('Gastone', '007', '2040-12-23');

function buyProdoct($hooli, $who, $prodoct) {
    $hooli->removeProduct($prodoct);
    $who->addProduct($prodoct);
    $sconto = $who->getSconto();
    if ($sconto != 0) {
        $price = $prodoct->getPrice() * ($sconto / 100);
        echo $who->getName() . ' devi pagare ' . $price . ' anziche ' . $prodoct->getPrice();
    } else {

        echo $who->getName() . ' devi pagare '. $prodoct->getPrice();
    }

}
buyProdoct($hooli, $gino, $cream);
echo '<br>';
buyProdoct($hooli, $gastone, $smartPhone);

<?php 

class EShop {

    private $name;

    private $addres;

    private $prodoctAvailable = [];

    private $user = [];

    private $userPremium = [];

    public function __construct(string $name, string $adres) {
        $this->name = $name;
        $this->addres = $adres;
    }

    public function addProdoct(Product $prodoct) {
        $this->prodoctAvailable[] = $prodoct;
    }

    public function addUser(User $var) {
        $this->user[] = $var;
    }
    public function addUserPremium(PremiumUser $var) {
        $this->userPremium[] = $var;
    }

    public function removeProdoct(Product $var) {
        $id = array_search($var, $this->prodoctAvailable);
        unset($this->prodoctAvailable[$id]);
        $this->prodoctAvailable = array_values($this->prodoctAvailable);
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
        echo $this->price;
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
    private $addres;
    private $prodoctS = [];
    private $Card;
    protected $sconto = 0;

    public function __construct(string $name, string $adres) {
        $this->nameUser = $name;
        $this->addres = $adres;
    }

    public function addCard(string $name, string $number, string $date) {
        $this->card = new Card($name, $number, $date);
    }

    public function addProdoct(Product $var) {
        $this->prodoctS[] = $var;
    }


}

class PremiumUser {

    private $nameUser;
    private $addres;
    private $prodoctS = [];
    private $card;
    protected $sconto = 50;
    public function __construct(string $name, string $adres) {
        $this->nameUser = $name;
        $this->addres = $adres;
    }

    public function addCard(string $name, string $number, string $date) {
        $this->card = new Card($name, $number, $date);
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

$hooli->addProdoct($smartPhone);
$hooli->addProdoct($toyCar);
$hooli->addProdoct($cream);
$hooli->addProdoct($shampo);
$hooli->addProdoct($book);

$gino = new User('Gino', 'Via Pollo Spennato');
$gastone = new PremiumUser('Gastone', 'Via Riccanza');

$hooli->addUser($gino);
$hooli->addUserPremium($gastone);

$gino->addCard('Gino', '20203030', '2020-08-9');
$gastone->addCard('Gastone', '007', '2040-12-23');

function buyProdoct($hooli, $who, $prodoct) {
    $hooli->removeProdoct($prodoct);
    $who->addProdoct($prodoct);
    echo 'devi pagare ' . $prodoct->getPrice();
}
buyProdoct($hooli, $gino, $cream);

/*
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/
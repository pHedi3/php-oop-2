<?php 

class EShop {

    private $name;

    private $addres;

    private $prodoctAvailable;

    private $prodoctNotAvailable;

    private $user;

    private $userPremium;

    public function __construct(string $name, string $adres) {
        $this->name = $name;
        $this->addres = $adres;
    }

    
}

// ---------------------------------------------

class Product {

    private $label;
    private $name;
    private $price;
    private $weight; 

    public function __construct(string $label, string $name, string $price) {
        $this->label = $label;
        $this->name = $name;
        $this->price = $price;
    }

}

Class TechProduct extends Product {

    private $needBattery;
    private $compatibility;
    private $os;
    public function __construct(string $label, string $name, int $price, bool $bat ) {
        $this->label = $label;
        $this->name = $name;
        $this->price = $price;
        $this->needBattery = $but;
    }

}

Class BeautyProduct extends Product {

    private $uses;
    private $composition;
    public function __construct(string $label, string $name, int $price, string $use ) {
        $this->label = $label;
        $this->name = $name;
        $this->price = $price;
        $this->uses = $use;
    }
}

// ---------------------------------------------

class User {

    private $nameUser;
    private $addres;
    private $Card;
    protected $sconto = 0;

}

class PremiumUser {

    private $nameUser;
    private $addres;
    private $Card;
    protected $sconto = 50;


}

// ----------------------------------------------

$hooli = new EShop('Hooli', 'Via Parto in Tre');
var_dump($hooli);

$smartPhone = new TechProduct('iphone', 'iphon 12 pro', 1200, false);
$toyCar = new TechProduct('toy Car Power', 'extrem Car', 240, true);
$cream = new BeautyProduct('hand cream', 'levinel', 20, 'for hand and body');
$shampo = new BeautyProduct('shampo capelli grassi', 'paludon', 3, 'for hair');
$book = new Product('the dust', 'the triology of dust', 12)


/*
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/
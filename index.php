<?php 

class EShop {

    // mettiamo una lista di prodotti

}

// ---------------------------------------------

class Product {

}

Class TechProduct extends Product {

}

Class BeautyProduct extends Product {
    
}

// ---------------------------------------------

class User {

    public $sconto = 0;

}

class PremiumUser {

    // qui dentro potrebbe avere la definizione di una percentuale di 
    // sconto per ogni prodotto.
    public $sconto = 50;


}

// ----------------------------------------------


/*
1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto)
*/
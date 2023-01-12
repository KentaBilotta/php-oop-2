<?php

class RegisteredUser extends User {
    private string $username;
    private string $password;
    private int $discount = 20;

    public function __construct($username, $password) {
        // vado a prendere i dati utente
        // setto le variabili di istanza in base ai valori del database

        CreditCard::get('$id chiave esterna');

        parent::__construct('con tutti i dati presi dal database');
    }
}
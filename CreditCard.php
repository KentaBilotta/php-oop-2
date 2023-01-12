<?php 

class CreditCard {
    private string $id;
    private string $number;
    private int $expiryYear; 
    private int $expiryMonth;

    public function __construct($number, $expiryYear, $expiryMonth) {
        $this->number = $number;
        $this->expiry = $expiryYear;
        $this->expiryMonth = $expiryMonth;
    }

    public function pay($amount): bool {}
}
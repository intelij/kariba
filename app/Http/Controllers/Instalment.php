<?php

namespace App\Http\Controllers;

class Instalment {

    public $_amount, $_daysAfterFirstAdvance;

    public function __construct($amount, $daysafterfirstadvance) {
        $this->_amount = $amount;
        $this->_daysAfterFirstAdvance = $daysafterfirstadvance;
    }

    public function calculate($apr) {
        $divisor = pow(1+$apr, $this->daystoyears());

        $sum = $this->_amount / $divisor;

        return $sum;
    }

    private function daystoyears() {
        return $this->_daysAfterFirstAdvance / 365.25;
    }
}

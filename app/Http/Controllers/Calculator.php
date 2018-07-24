<?php

namespace App\Http\Controllers;

class Calculator {
    private $_advances = array(), $_payments = array();

    public function __construct($firstAdvance) {

        $this->_advances[] = new Instalment($firstAdvance, 0);
    }

    public function addInstalment($amount, $daysAfterFirstAdvance, $instalmentType = 'payment') {
        $instalment = new Instalment($amount, $daysAfterFirstAdvance);

        switch($instalmentType) {
            case 'payment':
                $this->_payments[] = $instalment;
                break;

            case 'advance':
                $this->_advances[] = $instalment;
                break;
        }
    }

    public function addRegularInstalments($amount, $numberOfInstalments, $instalmentFrequency, $daysAfterFirstAdvancefirstInstalment = 0) {
        $daysBetweenInstalments = $this->getDaysBetweenInstalments($instalmentFrequency);

        if ($daysAfterFirstAdvancefirstInstalment == 0) {
            $daysAfterFirstAdvancefirstInstalment == $daysBetweenInstalments;
        }

        for ($i = 0; $i < $numberOfInstalments; $i++) {
            $daysAfterFirstAdvance = $daysAfterFirstAdvancefirstInstalment + ($daysBetweenInstalments * $i);
            $this->_payments[] = new Instalment($amount, $daysAfterFirstAdvance);
        }
    }

    public function singlePayment($payment, $daysAfterFirstAdvance) {
        $base = ($payment / $this->_advances[0]->_amount);
        $exp = (365.25 / $daysAfterFirstAdvance);
        $apr = round((pow($base, $exp)-1)*100, 2, PHP_ROUND_HALF_UP);
        return $apr; //round(100 * pow($base, $exp)-1, 2, PHP_ROUND_HALF_UP); //$exp; //pow($base, $exp)-1; //number_format($apr, 2);
    }

    public function Calculate($guess = 0) {
        $rateToTry = $guess / 100;
        $difference = 1;
        $amountToAdd = 0.0001;

        while($difference != 0) {
            // Calculate advances
            $advances = $this->_advances;
            $advances_calc = array();
            foreach($advances as $advance) {
                $advances_calc[] = $advance->calculate($rateToTry);
            }
            $advances_calc = array_sum($advances_calc);

            // Calculate payments
            $payments = $this->_payments;
            $payments_calc = array();
            foreach($payments as $payment) {
                $payments_calc[] = $payment->calculate($rateToTry);
            }
            $payments_calc = array_sum($payments_calc);

            $difference = $payments_calc - $advances_calc;

            if ($difference <= 0.0000001 && $difference >= 0.0000001) {
                break;
            } else if ($difference > 0) {
                $amountToAdd = $amountToAdd * 2;
                $rateToTry = $rateToTry + $amountToAdd;
            } else {
                $amountToAdd = $amountToAdd / 2;
                $rateToTry = $rateToTry - $amountToAdd;
            }
        }

        return number_format(round($rateToTry * 100, 1, PHP_ROUND_HALF_UP), 2);
    }

    private function getDaysBetweenInstalments($instalmentFrequency) {
        switch($instalmentFrequency) {
            case 'daily':
                return 1;

            case 'weekly':
                return 7;

            case 'fortnightly':
                return 14;

            case 'fourweekly':
                return 28;

            case 'monthly':
                return 365.25 / 12;

            case 'quarterly':
                return 365.25 / 4;

            case 'annually':
                return 365.25;
        }

        return 1;
    }
}
<?php

require_once('Customer.php');
require_once('FrequentRenterPoints.php');

class RentalCalculator {


    public function calculateRentals($rentals) {
        $results_arr = [];
        
        foreach ($rentals as $rental) {
            $thisAmount = 0;

            switch($rental->movie()->priceCode()) {
                case Categories::REGULAR:
                    $thisAmount += 2;
                    if ($rental->daysRented() > 2) {
                        $thisAmount += ($rental->daysRented() - 2) * 1.5;
                    }
                    break;
                case Categories::NEW_RELEASE:
                    $thisAmount += $rental->daysRented() * 3;
                    break;
                case Categories::CHILDRENS:
                    $thisAmount += 1.5;
                    if ($rental->daysRented() > 3) {
                        $thisAmount += ($rental->daysRented() - 3) * 1.5;
                    }
                    break;
            }

            $totalAmount += $thisAmount;

            $frequentRenterPoints = FrequestRenterPoints::calculatePoints($rental->movie()->priceCode(), $rental->daysRented());

            $results_arr .= "\t" . str_pad($rental->movie()->name(), 30, ' ', STR_PAD_RIGHT) . "\t" . $thisAmount . PHP_EOL;
        }

        return $results_arr;
    }
    
}
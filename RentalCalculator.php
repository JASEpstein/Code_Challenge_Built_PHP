<?php

require_once('Customer.php');
require_once('FrequentRenterPoints.php');

class RentalCalculator {

    /**
     * @var int
     */
    public $rentalCharge;

    public function calculateRentals($rentals) {
        $results = [];
        //$results['rentals'] = [];
        
        foreach ($rentals as $rental) {
            $thisAmount = 0;
            $frequentPoints = 0;

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

            // Calculates the frequent renter points
            
            $frequentPoints += FrequestRenterPoints::calculatePoints($rental->movie()->priceCode(), $rental->daysRented());

            // $results['rentals'] .=
            // $results['rentals'][] = [
            //     'name' => $rental->movie()->name(),
            //     'rentalAmount' => $thisAmount,
            //     'frequentPoints' => $frequentPoints,
            // ];

            // $results['']

            $results['rentals'] .= "\t" . str_pad($rental->movie()->name(), 30, ' ', STR_PAD_RIGHT) . "\t" . $thisAmount . PHP_EOL;


            // Need to return array with total amount, per rental amount, frequent points
        }

        $results['totalAmount'] = $totalAmount;

        $results['frequentPoints'] = $frequentPoints;

        return $results;
    }
    
}
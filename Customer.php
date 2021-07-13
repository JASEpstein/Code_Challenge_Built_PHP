<?php

require_once('FrequentRenterPoints.php');
require_once('RentalCalculator.php');

class Customer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    public $rentalCharge;

    /**
     * @var Rental[]
     */
    public $rentals;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->rentals = [];
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        $this->rentals[] = $rental;
    }

    /**
     * @return array
     */
    public function getRentals()
    {
        return $this->$rentals;
    }

    /**
     * @return string
     */
    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;

        $result = 'Rental Record for ' . $this->name() . PHP_EOL;

        $result .= RentalCalculator::calculateRentals($this->rentals);

        $result .= 'Amount owed is ' . $totalAmount . PHP_EOL;
        $result .= 'You earned ' . $frequentRenterPoints . ' frequent renter points' . PHP_EOL;

        return $result;
    }

    public function htmlStatement() 
    {
        include('./Template.php');
        // return <<<HTML
        //     <html>
        //     <h1>Rental Record for <em>{$this->name()}</em></h1>
        //     <ul>
        //         {gettype($this)}
        //         <li>Back to the Future - 3</li>
        //         <li>Office Space - 3.5</li>
        //         <li>The Big Lebowski - 15</li>
        //     <ul>
        //     <p>Amount owed is <em>21.5</em>
        //     <p>You earned <em>4</em> frequent renter points</p>
        //     </html>
        // HTML;
    // VERY IMPORTANT - Don't indent or otherwise format Line 83 or it will break
    }
}
?>
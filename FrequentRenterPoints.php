<?php

require_once('Categories.php');

class FrequestRenterPoints {
    
    /**
     * @var int
     */
    public $pointsTotal;

    /**
     * @param string
     * @param int
     */
    public function calculatePoints($priceCode, $daysRented) 
    {
        $pointsTotal++;
        if ( $priceCode === Categories::NEW_RELEASE && $daysRented > 1) {
            $pointsTotal++;
        }
        return $pointsTotal;
    }

}
?>
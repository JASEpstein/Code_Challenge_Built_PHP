<?php

require_once('Movie.php');
require_once('Rental.php');
require_once('Customer.php');
require_once('Categories.php');

$rental1 = new Rental(
    new Movie(
        'Back to the Future',
        Categories::CHILDRENS
    ), 4
);

$rental2 = new Rental(
    new Movie(
        'Office Space',
        Categories::REGULAR
    ), 3
);

$rental3 = new Rental(
    new Movie(
        'The Big Lebowski',
        Categories::NEW_RELEASE
    ), 5
);

$customer = new Customer('Joe Schmoe');

$customer->addRental($rental1);
$customer->addRental($rental2);
$customer->addRental($rental3);

echo $customer->statement();

echo $customer->htmlStatement();

?>
<html>
    <head>
    </head>
    <body>
        <h1>Rental Record for <em><?php echo $this->name() ?></em></h1>
        <ul>
            <?php
                foreach ($this->rentals as $rental) {
                    echo "\t <li>" . str_pad($rental->movie()->name(), 30, ' ', STR_PAD_RIGHT) . "\t" . $rental->$rentalCharge . "</li>" . PHP_EOL;
                }
            ?>
        <ul>
        <p>Amount owed is <em><?php echo $this->$amountOwed ?></em>
        <p>You earned <em><?php echo $this->$frequentRenterPoints ?></em> frequent renter points</p>
    </body>
</html>
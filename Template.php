<html>
    <head>
    </head>
    <body>
        <h1>Rental Record for <em><?php echo $Customer->getRentals() ?></em></h1>

        <!-- <h1>Rental Record for <em><?php echo Customer::name() ?></em></h1> -->
        <ul>
            <?php
                foreach(Customer::getRentals() as $X) {

                // foreach ($customer->$rentals as $rental) {
                    echo $X; //"<li>".$rental->movie()->name()." - ".$rental->$amountOwed."</li>";
                }
            ?>
        <ul>
        <p>Amount owed is <em>21.5</em>
        <p>You earned <em>4</em> frequent renter points</p>
    </body>
</html>
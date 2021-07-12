<html>
    <head>
    </head>
    <body>
        <h1>Rental Record for <em><?php echo $this->name() ?></em></h1>
        <ul>
            <?php
                //echo var_dump(get_object_vars($this));
                $vars = get_object_vars($this);
                echo gettype(get_class_vars($this));
                // foreach (Customer::$rentals as $rental) {
                //     echo $X; //"<li>".$rental->movie()->name()." - ".$rental->$amountOwed."</li>";
                // }
            ?>
        <ul>
        <p>Amount owed is <em>21.5</em>
        <p>You earned <em>4</em> frequent renter points</p>
    </body>
</html>
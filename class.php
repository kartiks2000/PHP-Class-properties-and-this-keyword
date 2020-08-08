<?php

    class Car {

        var $wheels = 4;
        var $color = "blue";

        function carname() {
            $this->wheels = 10;
        }

    }

    // Instantiating Class
    $x = new Car();

    echo $x->wheels . "<br>";
    
    $x->carname();

    echo $x->wheels;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<div>Hello World</div>";
    echo "<div>GoodBye World</div>";

    // Variables
    $a = 5;
    echo $a;

    // String Interpolation
    echo "<div>I have $a things</div>";
    echo '<div>I have $a things</div>';

    // Number
    // Integer
    $b = 15;
    // Float
    $b = 0.576;
    $b = 10;

    // String
    $name = "Yerguy2";

    // Boolean
    $ison = true; 



    // Math
    //PEMDAS
    echo (5 - 4) *2;

    // Concatenation 
    echo "<div>$b + $a = ".($a+$b)."</div>";

    ?>

    <hr>
    <div>This is my name</div>
    
    <?php
    
    $firstname = "Ting";
    $lastname = "Lin";
    $fullname = "$firstname $lastname";

    echo $fullname;

    ?>

    <hr>

    <?php

    // Superglobal
    // ?name=Joey
    echo "<a href='?name=Joey'>Link to Joey</a>";
    if (isset($_GET['name'])) {
        echo "<div>My name is {$_GET['name']}</div>";
    }

    // ?name=Joey&type=textarea
    if (isset($_GET['name']) && isset($_GET['type'])) {
        echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
    }

    ?>

    <hr>

    <?php

    // Array    
    $colors = array("red", "green", "blue");
    echo $colors[2];
    echo "<br>$colors[0]<br>$colors[1]<br>$colors[2]";

    echo count($colors);

    ?>

    <div style="color:<?= $colors[1] ?>">
        This text is green
    </div>

    <hr>

    <?php

    // Associative Array
    $colorsAssociative = [
        "red" => "#f00",
        "green" => "#0f0",
        "blue" => "#00f"
    ];

    echo $colorsAssociative['green'];

    ?>

    <hr>



    <?php

    // Casting
    $a = "123";
    $c = "$a";
    $d = $c*1;

    $colorsObject = (object) $colorsAssociative;

    // echo $colorsObject;

    // Array Index Notation
    echo $colors[0] . "<br>";
    echo $colorsAssociative['red'] . "<br>";
    echo $colorsAssociative[$colors[0]] . "<br>";

    // Object Property Notation
    echo $colorsObject->red . "<br>";
    echo $colorsObject->{$colors[0]} . "<br>";

    ?>

    <hr>

    <?php

    print_r($colors);
    echo "<hr>";
    print_r($colorsAssociative);
    echo "<hr>";
    echo "<pre>", print_r($colorsObject), "</pre>";

    // Function
    function print_p($v) {
        echo "<pre>", print_r($v), "</pre>";
    }

    print_p($_GET);

    ?>

</body>
</html>

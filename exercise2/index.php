<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Payment Methods</title>
</head>
<body>
<?php
     require_once(__DIR__ . '/classes/ABA.php');
     require_once(__DIR__ . '/classes/Wing.php');
     require_once(__DIR__ . '/classes/Pipay.php');

    echo "<h2>CS 262 Week 4 Assignment</h2>";
    echo "<h4>Name: Pong Panhavath Pech</h2>";

    $paymentMethod =
    [
       new ABA("Item 1", 1, 5),
       new Wing("Item 2", 2, 3),
       new ABA("Item 3", 4, 1),
       new ABA("Item 4", 5, 1),
       new Pipay("Item 5", 6, 1),
       new ABA("Item 6",10, 1),
       new Wing("Item 7",15, 1),
       new Wing("Item 8",2, 1)
    ];

    //display only ABA
    function displaySalesABA($paymentMethod){
        echo '<table border="1">';

            foreach ($paymentMethod as $method)
            {
                if(get_class($method) == 'ABA'){
                    echo '<tr>';
                    echo '<td>' . $method->getItem() . '</td>';
                    echo '<td>' . get_class($method) . '</td>';
                    echo '<td>' . $method->getSale() . '</td>';
                echo '</tr>';
              }   
            } 
            echo '</table>';
    }
    
    echo "<h3>Number of sales by ABA method:</h3>";
    displaySalesABA($paymentMethod);

    //display Wing and Pipay
    function displaySalesWingPipay($paymentMethod){
        echo '<table border="1">';

            foreach ($paymentMethod as $method)
            {
                if(get_class($method) == 'Wing' || get_class($method) == 'Pipay'){
                    echo '<tr>';
                    echo '<td>' . $method->getItem() . '</td>';
                    echo '<td>' . get_class($method) . '</td>';
                    echo '<td>' . $method->getSale() . '</td>';
                    echo '</tr>';
                }
            }    
            echo '</table>';
    }

    echo "<h3>Number of sales by PiPay and Wing method: </h3>";
    displaySalesWingPipay($paymentMethod);

    //display all table
    function display($paymentMethod)
    {
        echo '<table border="1">';
 
        foreach ($paymentMethod as $method) 
        {
            echo '<tr>';
            echo '<td>' . $method->getItem() . '</td>';
            echo '<td>' . get_class($method) . '</td>';
            echo '<td>' . $method->getSale() . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    //Display the array sorting in discending order
    echo "<h3>Number of sales ordering by biggest total amount:</h3>";
    $clone = $paymentMethod;
    usort($clone, function ($item1, $item2)
    {
        return $item2->getSale() <=> $item1->getSale();
    });
    display($clone);
    ?>
    </body>
    </html>
    

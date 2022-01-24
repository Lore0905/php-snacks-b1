<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $random_number = [];
    while(count($random_number) < 15) {
        $single_random_number = rand(1, 15);
        if (!in_array($single_random_number, $random_number)){
            $random_number[] = $single_random_number;
        }
    }
    var_dump($random_number);

?>







<!-- snack1 -->
<!-- Creiamo un array contenente le partite di basket di 
un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $calendar = [
        $match_uno = [
            'Home_Team' => 'Milano',
            'Home_Team_points' => 70,
            'Away_Team' => 'Sassari',
            'Away_Team_points' => 96,
        ],
        $match_due = [
            'Home_Team' => 'Bologna',
            'Home_Team_points' => 89,
            'Away_Team' => 'Pesaro',
            'Away_Team_points' => 52,
        ],
        $match_tre = [
            'Home_Team' => 'Benetton Treviso',
            'Home_Team_points' => 84,
            'Away_Team' => 'Reyer Venezia',
            'Away_Team_points' => 96,
        ],
        $match_quattro = [
            'Home_Team' => 'Cantù',
            'Home_Team_points' => 87,
            'Away_Team' => 'Brindisi',
            'Away_Team_points' => 78,
        ],
        $match_cinque = [
            'Home_Team' => 'Varese',
            'Home_Team_points' => 110,
            'Away_Team' => 'Cremona',
            'Away_Team_points' => 105,
        ],
        $match_sei = [
            'Home_Team' => 'Trento',
            'Home_Team_points' => 89,
            'Away_Team' => 'Brescia',
            'Away_Team_points' => 100,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calendar</h1>

    <?php for ($i = 0; $i < count($calendar); $i++) {?>
        
        <?php 
        $this_team = $calendar[$i];  
        // var_dump($this_team);
        ?>

        <div> 
            <?php echo $this_team['Home_Team']?> -
            <?php echo $this_team['Away_Team']?> |
            <?php echo $this_team['Home_Team_points']?> -
            <?php echo $this_team['Away_Team_points']?> 

        </div>


    <?php } ?>
    
</body>
</html>




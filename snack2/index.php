<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail 
contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $convalidator_name = 'Accesso Negato';
    $convalidator_mail = 'Accesso Negato';
    $convalidator_age = 'Accesso Negato';
?>

<div>
    <?php
    $name = $_GET['name'];
    echo $name;
    ?>
    <?php if(strlen($name) > 3){ ?>
        <span>ok</span>
        <?php $convalidator_name = 'Accesso Riuscito' ?>
    <?php }; ?>
    
</div>

<div>
    <?php
    $mail = $_GET['mail'];
    echo $mail;
    $mail_convalidate_at = strpos($mail,'@');
    $mail_convalidate_dot = strpos($mail,'.');
    ?>
    <?php if($mail_convalidate_at !== false && $mail_convalidate_dot !== false){ ?>
        <span>ok</span>
        <?php $convalidator_mail = 'Accesso Riuscito' ?>
    <?php }; ?>
</div>

<div>
    <?php
    $age = $_GET['age'];
    echo $age;
    ?>
    <?php if(is_numeric($age)){ ?>
        <span>ok</span>
        <?php $convalidator_age = 'Accesso Riuscito' ?>
    <?php }; ?>
</div>

<?php if( ($convalidator_name === 'Accesso Riuscito') && ($convalidator_mail === 'Accesso Riuscito') && ($convalidator_age === 'Accesso Riuscito') ){?>
    <div>Accesso Riuscito</div>
<?php } else {
    echo 'i parametri inseriti non sono corretti';
}?>







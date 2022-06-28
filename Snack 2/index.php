<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
 $name = isset($_GET["name"]) ? $_GET["name"] : ``;
 $mail = $_GET["mail"] ?? ``;
 $age  = $_GET["age"] ?? ``;

 $position_chiocciola = strpos($mail, `@`) ;

//  condizione
if(strlen($name) > 3 //  condizione su lunghezza  nome 
 && $position_chiocciola && strpos($mail, `.`, $position_chiocciola)  //  verifica email 
 && is_numeric($age) ) // verifica che age sia un numero 
 {
 echo `Accesso riuscito`;
 } else{
    echo `Accesso Negato`;
}
 
//  condizione su lunghezza  nome 
 strlen($name) > 3;

//  verifica email 
$position_chiocciola = strpos($mail, `@`) ;
$position_chiocciola && strpos($mail, `.`, $position_chiocciola);

// verifica che age sia un numero 
is_numeric($age);




?>

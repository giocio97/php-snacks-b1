<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?=
if((strlen($_GET["name"]) > 3) && (isset($_GET["mail"]) && (is_numeric($_GET["age"])))){
    
    $mail = $_GET["mail"];
    $name = $_GET["name"];
    $age = $_GET["age"];
    
    if ($position_chiocciola !== false && strpos($mail, ".", $position_chiocciola) !== false){
        $result="Accesso riuscito";
    } 

} else{
    $result="Accesso negato";
}



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
  <h1>Accesso</h1>
  <span>
    <?= $result ?>
</span>
</body>
</html>
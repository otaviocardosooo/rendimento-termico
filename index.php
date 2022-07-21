<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.csss">
</head>
<body>
       
<?php
if (isset ( $_POST['Q1']) ) {
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $T = $_POST['T'];
    if ($Q1 != "" && $Q2 != "" ) {        
        $nq = 1-($Q2/$Q1);
        echo "O  rendimento dessa máquina será de: ".$nq; 
    } elseif ($T != "" && $Q1 != "" ) {
       $nt = ($T/$Q1);
       echo "O  rendimento dessa máquina será de: ".$nt; 
    } elseif ($T == "" && $Q1 != ""&& $Q2 != ""  ) {
        $nq12 = ($Q1-$Q2)/$Q1;
        echo "O  rendimento dessa máquina será de: ".$nQ12; 
     };
}
?>

<h1>Rendimento de uma máquina térmica</h1>
<form action="index.php" method="post">
    <ul>
        <li>
            <label for="Q1">Q1</label>
            <input type="number" name="Q1" id="Q1">
        </li>
        <li>
            <label for="Q2">Q2</label>
            <input type="number" name="Q2" id="Q2">
        </li>
        <li>
            <label for="T">T</label>
            <input type="number" name="T" id="T">
        </li>
        <input id= "Cadastrar" type="submit" value="Cadastrar">
    </ul>
</form>

</body>
</html>
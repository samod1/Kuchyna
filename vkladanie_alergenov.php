<head>
    <title>Vkladanie alergenov</title>
</head>
<?php
$conn="";
include "config.php";

include "menu.php";
include "citaj_alerg.php";
echo "<h3>Pridaj novy Alergen</h3>";
include "add_alerg.php";

if($_GET["uloz"]=="ano")
{
    $idAle=$_GET["idA"];
    $nazovAle=$_GET["nazovA"];
    $skratkaAle=$_GET["skratkaA"];

    $query="INSERT INTO Alergeny (idAlerg,nazovAlerg,skratka) VALUES (?,?,?);";
    $stmt= mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"iss",$idAle,$nazovAle,$skratkaAle);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

}
mysqli_close($conn);
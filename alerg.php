<?php
$conn="";
include "config.php";

if ($_GET["idAlerg"] != "")
{
    $query="SELECT idAlerg, nazovAlerg, skratka FROM Alergeny WHERE idAlerg=".$_GET["idAlerg"];
    $result=mysqli_query($conn,$query);

    if(!$result)
    {
        echo "chyba pri vytvarani mysqli dotazu";
    }
    $nazvoslovie="";
    while ($row=mysqli_fetch_assoc($result))
    {
        echo "<h3>".$row["idAlerg"] ." ".$row["nazovAlerg"]."</h3>";
        $nazvoslovie=$row["skratka"];
    }

}
else
{
    echo"Prepac";
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Alergen <?php echo $nazvoslovie; ?></title>
</head>
</html>

<html lang="sk-SK">

<?php
$conn="";
include_once "config.php";

if ($_GET["idObed"] != "" && $_GET["edituj"] == "ano") {

    $query = "select nazov,cena from Obed where idObed=" . $_GET["idObed"];
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $idp = $_GET["idObed"];
        $nazovp = $row["nazov"];
        $cenap = $row["cena"];

        echo $idp . " ";
        echo $nazovp;
        echo " " . $cenap;
    }

    include "obedform.php";
}



?>
</body>
</html>

<?php
$conn="";
include "config.php";

$query="SELECT idAlerg,nazovAlerg,skratka from Alergeny";
$result=mysqli_query($conn,$query);
if(!$result)
{
    echo "chyba v mysqli dotaze";
    exit;
}
?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<h3>Citaj vsetky vlozene Alergeny</h3>
<table>
    <tr>
        <th>cislo alergenu</th>
        <th>nazov alergenu</th>
        <th>skratka alergenu</th>
    </tr>
    <?php

            while ($row=mysqli_fetch_assoc($result))
    {?>
            <tr>
            <td><? echo $row["idAlerg"];?></td>
            <td><? echo $row["nazovAlerg"];?></td>
            <td><? echo $row["skratka"];?></td>
            </tr>
    <?
    }
    ?>

</table>

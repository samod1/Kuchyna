<?php
$conn="";
include "config.php";
?>

<form action="vkladanie_alergenov.php" method="get">

    <label>Cislo alergenu je vacsinou 1-14</label>
    <input type="number" name="idA" placeholder="1" min="1" max="14"> <br>

    <label>Nazov Alergenu</label>
    <input type="text" name="nazovA"> <br>

    <label>skratka Alergenu</label>
    <input type="text" name="skratkaA"> <br>

    <input type="submit" value="Uloz alergen">
    <input type="hidden" name="uloz" value="ano">
</form>


<?php
    mysqli_close();
?>
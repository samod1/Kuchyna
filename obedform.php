<form action="vlozobed.php" method="GET">
    <input name="idObed" type="hidden" value="<?echo $idp;?>">
    <label for="nazov">Nazov</label>
    <input type="text" name="nazov" required autofocus><br>

    <label for="cena">Cena</label>
    <input type="text" name="cena" required autofocus><br>
    <label for="alerg">Alergeny</label>
        <select name="alerg">
            <?php
            $queryAlerg="SELECT idAlerg,nazovAlerg FROM Alergeny";
            $resultAlerg=mysqli_query($conn,$queryAlerg);
            while ($rowAlerg=mysqli_fetch_assoc($resultAlerg))
            {
                ?>
                <option value="<?echo $rowAlerg["idAlerg"];?>"><? echo $rowAlerg["nazovAlerg"];?></option>
            <?}?>
        </select>
    <br>
    <input type="submit" value="Uloz obed">
    <input type="hidden" name="uloz" value="ano">
</form>
<html>
<head>
    <title>Vloz obedy</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
$conn="";
include "config.php";


include "menu.php";


    $query="SELECT Obed.idObed ,Obed.nazov,Obed.cena, Alergeny.nazovAlerg, Obed.idAlerg from Obed LEFT JOIN Alergeny  on Obed.idAlerg = Alergeny.idAlerg";
    $result=mysqli_query($conn,$query);

    if(!$result)
    {
        echo"Chyba pri vytvarani MySQLi dotazu";
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


<table id="obed">
    <tr id="obed">
        <th>id</th>
        <th>Nazov</th>
        <th>Alergeny</th>
        <th>Cena</th>
        <th colspan="2">Akcia</th>
    </tr>


<?php
        while($row=mysqli_fetch_assoc($result))
        { ?>


                <td>
                   <b><?php echo $row["idObed"]; ?></b>
                </td>
                <td>
                    <?php echo $row["nazov"];?>
                </td>
                <td>
                    <?php echo $row["nazovAlerg"];?>
                </td>
                <td>
                    <?php echo $row["cena"]."€";?>
                </td>
                <td>
                    <a href="edituj.php?idObed=<?php echo $row["idObed"]; ?>&edituj=ano">Zadaj novy obed</a>
                </td>
                <td>
                    <a href="alerg.php?idAlerg=<?php echo $row["idAlerg"]?>">Alergeny</a>
                </td>
            </tr>

            <?php } ?>
</table>

<?php
if($_GET["uloz"]=="ano")
{
    $id=$_GET["idObed"];
    $nazov=$_GET["nazov"];
    $cena=$_GET["cena"];
    $alerg=$_GET["alerg"];

    $query="UPDATE Obed SET nazov= ?, idAlerg= ?, cena= ? where idObed = ?";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"siii",$nazov,$alerg, $cena, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_commit($conn);

}
mysqli_close($conn);


?>



</body>
</html>


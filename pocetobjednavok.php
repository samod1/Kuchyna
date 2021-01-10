

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pocet objednavok</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    </body>


    <?php
    include "menu.php";
    function obed($idobed)
    {
        $conn="";
        include "config.php";
        $nazov="";
        $query ="SELECT Obed.nazov FROM Obed LEFT JOIN Student on Student.idObed = Obed.idObed where Obed.idObed=".$idobed;
        $result =mysqli_query($conn,$query);
        $pocetObedov = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result))
        {
            $nazov=$row["nazov"];
        }
        echo $nazov ," je objdenanych <b>".$pocetObedov,"</b> <br>";


    }

    obed(1);
    obed(2);
    obed(3);
    obed(4);


    ?>
    <footer>
        <div class="footer">
            <p class="footer"><span>&copy;Samuel Domin 2020 - <?php echo date("Y"); ?></span></p>
        </div>
    </footer>
</html>

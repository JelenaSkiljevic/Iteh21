<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td,th{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $proizvodi = array(
        array(
            'id'=>1,
            'naziv'=>"Laptop",
            'cena'=>800
            
        ),
        array(
            'id'=>2,
            'naziv'=>"Mis",
            'cena'=>20
            
        ),
        array(
            'id'=>3,
            'naziv'=>"Slusalice",
            'cena'=>100
            
        )
        );
    ?>
    <p>Vasa korpa sadrzi: broj_proizvoda</p>
    <a href="?vidi_korpu">Vidi korpu</a>
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proizvodi as $pr): ?>
            <tr>
                <td><?php echo $pr["naziv"]; ?></td>
                <td><?php echo $pr["cena"];?></td>
                <td>
                    <form action="" method="POST">
                        <intput type="hidden" name="id" value="<?php echo $pr["id"]; ?>">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <!--<?php
        if(isset($_POST["id"])){
            echo "Poslat je POST zahtev";
            echo "Poslat je id:".$_POST["id"];
        }
        if(isset($_GET["id"])){
            echo "Poslat je GET zahtev";
            echo "Poslat je id:".$_GET["id"];
        }
    ?> -->
</body>
</html>
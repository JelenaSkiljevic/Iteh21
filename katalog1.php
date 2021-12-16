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

    <p>Vaša korpa sadrži: <?php echo count($_SESSION["korpa"]); ?> proizvoda</p>
    <a href="?vidi_korpu">Vidi korpu</a>
    <table border="1">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proizvodi as $pr):?>
            <tr>
                <td><?php echo $pr["naziv"];?></td>
                <td><?php echo $pr["cena"];?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $pr["id"];?>">
                        <input type="submit" name="submit" value="Kupi">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>

</body>
</html>
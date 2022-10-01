<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kutyák</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand navbar-primary bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Listázás</a></li>
            <li class="nav-item"><a class="nav-link" href="felvetel.php">Felvétel</a></li>
        </ul>
    </nav>
    <main class="container">
        <h1>Kutyák listázása</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>Fajta</th>
                    <th>Kor</th>
                    <th>Nem</th>
                    <th>Szín</th>
            </thead>
            <tbody>
                <?php
                $file = fopen("adatok.csv", "r");
                $i = 0;
                while ($sor = fgets($file)) {
                    $i++;
                    $adatok = explode(";", $sor);
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $adatok[0] ?></td>
                        <td><?php echo $adatok[1] ?></td>
                        <td><?php echo $adatok[2] ?></td>
                        <td><?php echo $adatok[3] ?></td>
                        <td><?php echo $adatok[4] ?></td>
                    </tr>
                    <?php
                }
                fclose($file);
                ?>
            </tbody>
            <tfoot>
                    <th>#</th>
                    <th>Név</th>
                    <th>Fajta</th>
                    <th>Kor</th>
                    <th>Nem</th>
                    <th>Szín</th>
            </tfoot>
        </table>
    </main>


</body>
</html>
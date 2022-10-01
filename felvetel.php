<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kutyák felvétele</title>
    
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
        <h1>Kutyák felvétele</h1>
        
        <?php if (isset($_REQUEST['submit_btn'])) : ?>
            <?php if (count($_POST) < 6) : ?>
                    <?php echo '<div class="alert alert-danger" role="alert">Hiba!'; ?>
                    <?php if (!isset($_POST['nev']) || empty($_POST['nev'])) : ?>
                    <?php echo '<br>Név megadása kötelező!'; ?>
                    <?php endif; ?>
                    <?php if (!isset($_POST['fajta']) || empty($_POST['fajta'])) : ?>
                    <?php echo '<br>Fajta megadása kötelező!'; ?>
                    <?php endif; ?>
                    <?php if (!isset($_POST['kor']) || empty($_POST['kor'])) : ?>
                    <?php echo '<br>Kor megadása kötelező!'; ?>
                    <?php endif; ?>
                    <?php if (!isset($_POST['nem']) || empty($_POST['nem'])) : ?>
                    <?php echo '<br>Nem megadása kötelező!'; ?>
                    <?php endif; ?>
                    <?php if (!isset($_POST['szin']) || empty($_POST['szin'])) : ?>
                    <?php echo '<br>Szín megadása kötelező!'; ?>
                    <?php echo '</div>'; ?>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("adatok.csv", 'a');
                    $nev = $_POST['nev'];
                    $fajta = "";
                    switch ($_POST['fajta']){
                        case "golden":
                            $fajta = "Golden retriever";
                            break;
                        case "labrador":
                            $fajta = "Labrador";
                            break;
                        case "spaniel":
                            $fajta = "Spániel";
                            break;
                        case "tibeti":
                            $fajta = "Tibeti terrier";
                            break;
                        case "csivava":
                            $fajta = "Csivava";
                            break;
                    }
                    $kor = $_POST['kor'];
                    $nem = "";
                    switch ($_POST['nem']) {
                        case "him":
                            $nem = "Hím";
                            break;
                        case "nosteny":
                            $nem = "Nőstény";
                            break;
                    } 
                    $szin = "";
                    switch ($_POST['szin']) {
                        case "fekete":
                            $szin = "Fekete";
                            break;
                        case "feher":
                            $szin = "Fehér";
                            break;
                        case "barna":
                            $szin = "Barna";
                            break;
                        case "szurke":
                            $szin = "Szürke";
                            break;
                        case "tobbszinu":
                            $szin = "Többszínű";
                            break;
                    }
                    $sor = "$nev;$fajta;$kor;$nem;$szin". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                    echo '<div class="alert alert-success" role="alert">Sikeres felvétel!</div>'
                ?>
            <?php endif; ?>
        <?php endif; ?>

        <form method="POST" name="felvetel" id="felvetel">
            <div class="mb-3">
                <label class="form-label" for="nev_input">Név:</label>
                <input class="form-control" type="text" name="nev" id="nev_input" placeholder="Név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="fajta_input">Fajta:</label>
                <select class="form-select" name="fajta" id="fajta_input">
                    <option value=""></option>
                    <option value="golden">Golden retriever</option>
                    <option value="labrador">Labrador</option>
                    <option value="spaniel">Spániel</option>
                    <option value="tibeti">Tibeti terrier</option>
                    <option value="csivava">Csivava</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="kor_input">Kor:</label>
                <input class="form-control" type="number" name="kor" id="kor_input">
            </div>
            <div class="mb-3">
                <label class="form-label radio_label checkbox_label">Nem:</label>
                <div>
                    <input class="form-check-input" type="radio" name="nem" id="him_input" value="him" >
                    <label class="form-check-label radio_label" for="him_input">Hím</label>
                    <input class="form-check-input" type="radio" name="nem" id="nonemu_input" value="nonemu">
                    <label class="form-check-label radio_label" for="nosteny_input">Nőstény</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="szin_input">Szín:</label>
                <select class="form-select" name="szin" id="szin_input">
                    <option value=""></option>
                    <option value="fekete">Fekete</option>
                    <option value="feher">Fehér</option>
                    <option value="barna">Barna</option>
                    <option value="szurke">Szürke</option>
                    <option value="tobbszinu">Többszínű</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="submit_btn">Elküld</button>
        </form>
    </main>
</body>
</html>
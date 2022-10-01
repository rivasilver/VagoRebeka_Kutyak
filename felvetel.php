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
        
        <form method="POST" name="felvetel" id="felvetel">
            <div class="mb-3">
                <label class="form-label" for="nev_input">Név:</label>
                <input class="form-control" type="text" name="nev" id="nev_input" placeholder="Név" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="fajta_input">Fajta:</label>
                <select class="form-select" name="fajta" id="fajta_input" required>
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
                <input class="form-control" type="number" name="kor" id="kor_input" required>
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
                <select class="form-select" name="szin" id="szin_input" required>
                    <option value=""></option>
                    <option value="fekete">Fekete</option>
                    <option value="feher">Fehér</option>
                    <option value="barna">Barna</option>
                    <option value="szurke">Szürke</option>
                    <option value="tobbszinu">Többszínű</option>
                </select>
            </div>
            <button type="reset" class="btn btn-outline-danger">Űrlap alaphelyzetbe</button>
            <button type="submit" class="btn btn-outline-primary">Elküld</button>
        </form>
    
    </main>
    
</body>
</html>
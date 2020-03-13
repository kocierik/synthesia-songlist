<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <form action="http://localhost/php/insertauthor.php" method="POST">
        <div class="rowtitle">
            <span>Aggiungi autore</span>
        </div>
        <div class="row">
            <div class="row__label">
                <span> Nome</span>
            </div>
            <div class="row__input">
                <input type="text" name="name_nome" required placeholder="Inserisci il nome" />
            </div>
        </div>
        <div class="row">
            <div class="row__label">
                <span> Cognome</span>
            </div>
            <div class="row__input">
                <input type="text" name="name_cognome" placeholder="Inserisci il cognome" />
            </div>
        </div>
        <div class="row">
            <input class="submit" type="submit" value="Submit" />
        </div>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <form action="http://localhost/php/insertsong.php" method="POST">
        <div class="rowtitle">
            <span>Aggiungi canzone</span>
        </div>
        <div class="row">
            <div class="row__label">
                <span> Autore</span>
            </div>
            <div class="row__input">
                <select name="name_author" class="select" required>
                    <?php
                    $sql = "SELECT * FROM Authors";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_array()) {
                        echo '
                 <option value="' . $row["id"] . '"> ' . $row["name"] . " " . $row["surname"] . ' </option> ';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="row__label">
                <span> Titolo</span>
            </div>
            <div class="row__input">
                <input type="text" name="name_title" id="id_title" required placeholder="Inserisci il titolo" />
            </div>
        </div>
        <div class="row">
            <div class="row__label">
                <span> Youtube</span>
            </div>
            <div class="row__input">
                <input type="text" name="name_youtube" id="id_youtube" required placeholder="Inserisci il link youtube" />
            </div>
        </div>
        <div class="row">
            <input class="submit" type="submit" value="Submit" />
        </div>
    </form>
</body>

</html>
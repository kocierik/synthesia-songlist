<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
</head>

<body>
    <div class="button signin">
        <a href="#popup2"> <input class="addclick signin" type="button" value="Sign in" /></a>
        <div id="popup2" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <form action="/php/register.php" method="POST">
                    <div class="rowtitle">
                        <h2>Sign in</h2>
                    </div>
                    <div class="row">
                        <div class="row__label">
                            <span> Nome:</span>
                        </div>
                        <div class="row__input">
                            <input type="text" name="name_nome" required placeholder="Inserisci il nome" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="row__label">
                            <span> Cognome:</span>
                        </div>
                        <div class="row__input">
                            <input type="text" name="name_cognome" required placeholder="Inserisci il cognome" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="row__label">
                            <span> Email:</span>
                        </div>
                        <div class="row__input">
                            <input type="email" name="name_email" required placeholder="Inserisci la email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="row__label">
                            <span> Password:</span>
                        </div>
                        <div class="row__input">
                            <input type="password" name="name_password" required placeholder="Inserisci la password" />
                        </div>
                    </div>
                    <div class="row">
                        <input class="submit" type="submit" value="Submit" />
                    </div>
            </div>
            </form>
</body>

</html>
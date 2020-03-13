<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>

<body>
    <div class="button login">
        <a href="#popup1"> <input class="addclick login" type="button" value="Login" /></a>
        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <form action="/php/login.php" method="POST">
                    <div class="rowtitle">
                        <h2>Login</h2>
                    </div>
                    <div class="row">
                        <div class="row__label">
                            <span> Email:</span>
                        </div>
                        <div class="row__input">
                            <input type="text" name="name_email" required placeholder="Indirizzo e-mail" />
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
                </form>
            </div>
        </div>
</body>

</html>
<!doctype html>
<html lang="fr">

<head>
    <title>TP1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>



<body>
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal">TP1 - Joé Erny</p>
    </header>

    <div class="container" style="text-align: center; margin: auto; margin-left: auto;margin-right: auto;  display: flex; justify-content: center;">
        <form class="needs-validation" method="post" onsubmit="verifyPasswords()">
            <div class="row g-2">
                <div class="col-sm-6">
                    Prénom : <input type="text" name="prenom" value="" />
                </div>

                <div class="col-sm-6">
                    Nom : <input type="text" name="nom" value="" />
                </div>
                <div class="col-sm-6">
                    <p>Civilité :</p>
                    <input type="radio" id="mr" name="civilite" value="mr">
                    <label for="mr">Monsieur</label>
                    <input type="radio" id="mme" name="civilite" value="mme">
                    <label for="mme">Madame</label>
                    <input type="radio" id="autre" name="civilite" value="autre" checked>
                    <label for="autre">Autre</label>
                </div>
                <div class="col-sm-6">
                    Mot de passe : <input id="pwd1" type="password" name="passe" value="" />
                </div>
                <div class="col-sm-6">
                    Valider le mot de passe : <input id="pwd2" type="password" name="passe" value="" />
                </div>
                <div class="col-sm-6">
                    Code postal : <input type="text" name="nom" value="" />
                </div>
                <div class="col-sm-6">
                    <input type="submit" value="Envoyer le formulaire">
                </div>
            </div>
        </form>


    </div>
</body>

</html>
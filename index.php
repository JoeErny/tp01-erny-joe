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
        <div class="col-md-6 col-lg-6" style="margin-top: 4%">
            <form class="needs-validation" method="post" onsubmit="verifyPasswords()">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label">Prénom</label>
                        <input class="form-control" type="text" name="prenom" value="" />
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" value="" />
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Civilité</label>
                        <select class="form-select" id="civ" required>
                            <option>Homme</option>
                            <option>Femme</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Code postal : </label>
                        <input type="text" name="nom" class="form-control" value="" minlength="5" maxlength="5" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Mot de passe : </label>
                        <input id="pwd1" type="password" class="form-control" name="passe" minlength="8" maxlength="20" value="" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Valider le mot de passe : </label>
                        <input id="pwd2" type="password" class="form-control" name="passe" minlength="8" maxlength="20" value="" />
                    </div>

                    <div class="col-sm-6">
                        <input type="submit" class="btn-lg btn-primary" value="Envoyer le formulaire">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
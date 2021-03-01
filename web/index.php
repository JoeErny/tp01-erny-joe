<!doctype html>
<html lang="fr">

<head>
    <title>TP1 - Joé Erny</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <h1>Formulaire :</h1>
    <form>
        <div class="input-group mb-3">
            Prénom : <input type="text" name="prenom" value="" />
        </div>
        <div class="input-group mb-3">
            Nom : <input type="text" name="nom" value="" />
        </div>
        <div class="input-group mb-3">
            <p>Civilité :</p>
            <input type="radio" id="mr" name="civilite" value="mr">
            <label for="mr">Monsieur</label>
            <input type="radio" id="mme" name="civilite" value="mme">
            <label for="mme">Madame</label>
            <input type="radio" id="autre" name="civilite" value="autre" checked>
            <label for="autre">Autre</label>
        </div>
        <div class="input-group mb-3">
            Mot de passe : <input id="pwd1" type="password" name="passe" value="" />
        </div class="input-group mb-3">
        <div>
            Valider le mot de passe : <input id="pwd1" type="password" name="passe" value="" />
        </div>
        <div class="input-group mb-3">
            Code postal : <input type="text" name="nom" value="" />
        </div>

    </form>
</body>

</html>
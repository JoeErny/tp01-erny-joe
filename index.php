<!doctype html>
<html lang="fr">

<head>
    <title>TP1 - Joé Erny</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
</head>

<body>
    <h1>Formulaire :</h1>
    <form class="needs-validation" method="post" onsubmit="verifyPasswords()">
        <div>
            Prénom : <input type="text" name="prenom" value="" />
        </div>
        <div>
            Nom : <input type="text" name="nom" value="" />
        </div>
        <div>
            <p>Civilité :</p>
            <input type="radio" id="mr" name="civilite" value="mr">
            <label for="mr">Monsieur</label>
            <input type="radio" id="mme" name="civilite" value="mme">
            <label for="mme">Madame</label>
            <input type="radio" id="autre" name="civilite" value="autre" checked>
            <label for="autre">Autre</label>
        </div>
        <div>
            Mot de passe : <input id="pwd1" type="password" name="passe" value="" />
        </div>
        <div>
            Valider le mot de passe : <input id="pwd2" type="password" name="passe" value="" />
        </div>
        <div>
            Code postal : <input type="text" name="nom" value="" />
        </div>
        <div>
            <input type="submit" value="Envoyer le formulaire">
        </div>
    </form>
</body>

</html>
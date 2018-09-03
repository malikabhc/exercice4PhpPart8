<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4/8</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="login">Identifiant</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" />
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Mot de passe"/>
            <input type="submit" name="submit" value="Valider">
        </form>
        <?php
        // si le cookie pseudo ne contient pas de pseudo
        if (empty($_COOKIE['login'])) { ?>
            <p>Pseudo non défini</p>  
        <?php } else { ?>
            <p>Votre pseudo : <?= $_COOKIE['login']; ?></p>
        <?php } ?>
        <?php
        // si le cookie ne contient pas de mot de passe
        if (empty($_COOKIE['password'])) {
            ?>
            <p>Mot de passe non défini</p>
        <?php } else { ?>
            <p>Votre mot de passe : <?= $_COOKIE['password']; ?></p>
<?php } ?>
    </body>
</html>

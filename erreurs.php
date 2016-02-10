<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page de présentation</title>
</head>

<body>
    <h1>Ma présentation</h1>
    
   <?php include "variables.php"; ?>

    <p>
        <?php
        echo "Bonjour, je m\'appelle $prenom et je suis en $classe."
        ?>
        <!-- Un commentaire -->
        <br>
        <?php echo 'Je connais ' . $nbLangages . ' langages de programmation';
        ?>
    </p>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <h1> <?php echo "Vos informations ont bien étaient reçues" ?></h1>

    <ul>
        <li> <?php echo "Nom:" . " " . $_POST["nom"] ?> </li>
        <li> <?php echo "Prénom:" . " " . $_POST["prenom"] ?> </li>
        <li> <?php echo "Email:" . " " . $_POST["mail"] ?> </li>
        <li> <?php echo "Téléphone:" . " " . $_POST["tel"] ?> </li>
        <li> <?php echo "Message:" . " " . $_POST["message"] ?> </li>
    </ul>

    <?php if ($_POST["nom"] === "BUGS") { ?>

        <p> <?php echo "BUNNY" ?> </p>
        <?php http_response_code(404); ?>
    <?php } ?>

</body>

</html>
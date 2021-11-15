<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link href="../decor/style.css" rel="stylesheet">
</head>

<body id="global">
<div class="container">



    <!-- inclusion de l entête du site -->
    <?php include_once('../includes/header.php'); ?>
    <br>
    <br>
    <h1><?php include_once('../includes/titre_body.php'); ?></h1>



    <h2>Contactez nous</h2>
    <form>
        <div class=" ">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
            <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
        </div>
        <div class=" ">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
        </div>
        <button type="submit" class=" ">Envoyer</button>
    </form>
    <br />
</div>


    <!-- inclusion du bas de page du site -->
    <?php include_once('../includes/pied_de_page.php'); ?>
</body>
</html>


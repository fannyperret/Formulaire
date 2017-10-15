<?php

$destinataire ='fannyperretlombard@gmail.com'; // my email adress
$copie = 'oui'; // copy for user



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Page</title>
</head>
<body>

<h2>Success, Well done!</h2>

<div class="form">
    <p>Hi, <strong><?php echo htmlspecialchars($_POST['user_name']); ?></strong></p>
    <p>Your phone is <strong><?php echo htmlspecialchars($_POST['user_phone']); ?></strong></p>
    <p>Your email is <strong><?php echo htmlspecialchars($_POST['user_email']); ?></strong></p>
    <p>You are from <strong><?php echo htmlspecialchars($_POST['user_country']); ?></strong></p>
    <p>Your message : <strong><?php echo htmlspecialchars($_POST['user_message']); ?></strong></p>
</div>

</body>
</html>
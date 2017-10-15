<?php var_dump($_GET);

if($_POST)
{
//not empty
//at least 2 characters long

$errors = array();

//start validation
    if(empty($_POST['name']))
    {
        $errors['name1'] = "Your name cannot be empty";
    }
    if(strlen($_POST['name']) < 2){
        $errors['name2'] = "Your name must be at least 2 characters long";
    }

    if(empty($_POST['phone']))
    {
        $errors['phone1'] = "Phone cannot be empty";
    }
    if(empty($_POST['email']))
    {
        $errors['email1'] = "Email cannot be empty";
    }
    if(empty($_POST['country']))
    {
        $errors['country1'] = "Country cannot be empty";
    }
    if(empty($_POST['message']))
    {
        $errors['message1'] = "Message cannot be empty";
    }

    //hacerlo para todas las paginas

//check errors
if(count($errors) == 0)
{
    //redirect to success page
    header("Location: success.php");
    exit();
}
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formulaire.css">
    <title>PHP FORMULAIRE</title>
</head>
<body>

<div class="title">
    <h1>Mon premier formulaire</h1>
</div>

    <form action="success.php" method="post">
        <div>
            <label for="name">Name : </label>
            <input type="text" name="user_name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required/>
        </div>
        <div>
            <label for="phone">Phone : </label>
            <input type="number" name="user_phone" id="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" required/>
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="email" name="user_email" id="email" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required/>
        </div>
        <div>
            <label for="country">Country : </label>
            <input list="countries" name="user_country" id="country" value="<?php if(isset($_POST['country'])) echo $_POST['country']; ?>" required>
            <datalist id="countries">
                <option value="France">
                <option value="Spain">
                <option value="England">
                <option value="Italy">
                <option value="Mexico">
            </datalist>
        </div>
        <div>
            <label for="message">Message : </label>
            <textarea id="message" name="user_message" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>" required ></textarea>
        </div>
        <div class="button">
            <button type="submit">Send your message</button>
        </div>
    </form>

</body>
</html>




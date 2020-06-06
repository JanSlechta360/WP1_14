<?php

$submit = filter_input(INPUT_POST, 'submit');
$email = filter_input(INPUT_POST, 'email');
$gender = filter_input(INPUT_POST, 'gender');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP1-14</title>
</head>
      <body>
<?php

    if(isset($submit)) {
        
?> 

    <h2>Formular byl odeslan</h2>
    Email: <?= $email ?></br>
    Pohlavi: <?= $gender ?>

<?php
    } else { 
?>
    <form action="index.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <h2>Pohlavi</h2>
        <input type="radio" name="gender" value="male" id="gender-male">
        <label for="gender-male">Muz</label>
        </br>

        <input type="radio" name="gender" value="female" id="gender-female">
        <label for="gender-female">Zena</label>
        </br>

        <input type="radio" name="gender" value="other" id="gender-other">
        <label for="gender-other">Nespecifikovano</label>
        </br>

        <input type="submit" name="submit" value="Odeslat">
    </form>

   <h2>Stranka byla nactena bez formulare</h2>

<?php
}
?>

      </body>
</html>
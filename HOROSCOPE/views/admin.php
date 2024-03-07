<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choix</title>
</head>
<body>
    <form action="" method="post">
    <?php foreach($signe as $k => $v):?>
        <label for="<?=$k?>"><?=$k?>:</label><br>
        <input type="text" id="login" name="<?=$k?>" value="<?=$v?>"><br>

        <?php endforeach?>
        <input type="submit" value="valider">
</form>
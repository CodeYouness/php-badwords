<?php
$text = 'Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura,
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!';
$banword = $_GET['ban'];
$length = strlen($text);

$string = str_replace($banword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ban Word</title>
</head>

<body>
    <main>
        <div>
            <p>
                <?php echo $string; ?>
            </p>
            <p>
                lenght: <?php echo $string; ?>
            </p>
        </div>
        <div>
            <form action="./index.php" method="get">
                <input type="text" name="ban" id="ban">
                <button type="submit">Send</button>
            </form>
        </div>
    </main>
</body>

</html>
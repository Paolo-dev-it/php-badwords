<?php 

    $paragrafo = 'F1 moved to an all-new car concept for 2022, spearheaded by ground effect aerodynamics, overhauled bodywork and bigger tyres, while sticking with ultra-efficient 1.6-litre turbo-hybrid power units. One of the primary goals was to generate closer racing and increase overtaking opportunities, with Ferrari driver Sainz  who claimed his first pole position and race victory this year  highlighting that these boxes have been ticked.';

    $titoloPagina = 'PHP Badwords';

    $titolo = 'Primo titolo in PHP';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titoloPagina ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $titolo ?></h1>

    <p> <?php echo $paragrafo ?></p>

    <p> La lunghezza del paragrafo è <?php echo strlen($paragrafo) ?> caratteri </p>

    <form action="" method="GET">

        <label for="">Parola da sostituire</label>
        <input type="text" name='cambiaParola' placeholder="Inserisci la parola da censurare">
        <button>Cambia</button>

        <p> <?php echo str_replace($_GET['cambiaParola'], '***', $paragrafo) ?></p>

        <p> La nuova lunghezza del paragrafo è <?php echo ( strlen(str_replace($_GET['cambiaParola'], '***', $paragrafo))) ?> caratteri </p>

    </form>

</body>
</html>
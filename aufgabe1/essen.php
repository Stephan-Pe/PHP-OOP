<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $abendessen = $_GET["abendessen"];

    switch ($abendessen) {
        case "pizza":
            echo "Du hast Pizza bestellt";
            break;
        case "salat":
            echo "Du hast Salat bestellt lecker";
            break;
        default:
            echo "Wer nix bestellt hat bekommt Spaghetti!<br>";
    }

    $farben = array("red", "green", "blue", "yellow");
    foreach ($farben as $farbe) {
        echo $farbe . " <br>";
    }
    $fehlfarben = ["rosa", "grau", "lila", "pink"];
    foreach ($fehlfarben as $fehlfarbe) {
        echo $fehlfarbe . " <br>";
    }


    ?>
</body>

</html>
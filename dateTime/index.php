<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        date_default_timezone_set("Europe/Berlin");

        //Datentime Objekte erzeugen (Jahr-Monat-Tag)
        $datum1 = new DateTime('1963-04-24'); //Geburtsdatum
        $datum2 = new DateTime(date('Y')+ +date('m')+ +date('d')); //Aktuelles Datum

        $interval = $datum2->diff($datum1);
        //Das Ergebnis wird formatiert. %Y gibt die Jahre an (4stellig) %m die Monate und %d die Tage
        //Wenn wir die Tage durch 7 teilen und abrunden, erhalten wir die Anzahl der Wochen
        $wochen = floor($interval->format('%d') / 7);

        //Die restlichen Tage, die nicht mehr eine ganze Woche bilden können (<7) sollen ebenfalls angezeigt werden
        $tage = ($interval->format('%d') % 7);

        //Output
        echo $interval->format("%Y Jahre %m Monate $wochen Wochen $tage Tage");

        echo "<br>";
        echo "<br>";

        // float not Integer
        // $time = microtime();

        // echo $time;

        // converting time to string

        $dateFormate1 = "09th October 2020";
        $dateFormate2 = "09 Oct. 2020 17:30";
        $dateFormate3 = "2020/10/09";

        echo strtotime($dateFormate3);
        echo "<br>";

        if ($dateFormate1 == -1) {
            echo("The time was not converted");
            
        }
        else {
            echo("Time is: " . strtotime($dateFormate1));
            echo "<br>";
        }
        // converting time to string

        echo date("H:i");

        echo "<br>";

        echo date('l jS \of F Y h:i:s A');

        $geburtsTag = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")-57);

        echo $geburtsTag

    ?>
    
</body>
</html>
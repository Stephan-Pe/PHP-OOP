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

        //Create DateTime objects (year-month-day)
        $datum1 = new DateTime('1963-04-24'); //birthdate
        $datum2 = new DateTime(date('Y')+ +date('m')+ +date('d')); //current date

        $interval = $datum2->diff($datum1);
        //The result is formatted. % Y specifies the years (4 digits)% m the months and% d the days
        //If we divide and round the days by 7, we get the number of weeks
        $wochen = floor($interval->format('%d') / 7);

        //The remaining days, which can no longer form a whole week (<7) should also be displayed
        $tage = ($interval->format('%d') % 7);

        //Output
        echo "As times go by!<br>";
        echo $interval->format("%Y Jahre %m Monate $wochen Wochen $tage Tage");

        echo "<br>";
        echo "<br>";

        // displays a float not Integer
        $time = microtime();
        echo "This is a float!<br>";
        echo $time;

        echo "<br>";
        echo "<br>";

        // converting time to string

        $dateFormate1 = "09th October 2020";
        $dateFormate2 = "09 Oct. 2020 17:30";
        $dateFormate3 = "2020/10/09";

        echo "Timestamp!<br>";
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

        $today = mktime(0, 0, 0, date("m"),   date("d"),   date("Y"));

        echo $today

    ?>
    
</body>
</html>
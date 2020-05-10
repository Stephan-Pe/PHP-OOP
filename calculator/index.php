<?php
// Type declaration has to be followed or throws error!
// And makes Error easier to read because range of Error is specific
declare(strict_types=1);
include 'includes/classAutoloader.inc.php';
include 'includes/calc.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Calculator</title>
</head>

<body>
    <div class="texasinstruments">
        <p>Calculator TX 01</p>
        <!--set action to processing PHP file-->
        <form action="" method="post">
            <label class="resultWin">
                <span>
                    <?php
                    if (isset($calc)) {
                        try {
                            echo "<h2>" . $calc->calculator() . "</h2>";
                        } catch (TypeError $e) {
                            echo "Error!: " . $e->getMessage();
                        } 
                    }
                    ?>
                </span>
            </label>
            <input type="number" name="num1" placeholder="First number">
            <select name="operator" id="">
                <option value="add">Addition</option>
                <option value="sub">Substraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>

        </form>
    </div>




    <script src="js/app.js"></script>

</body>

</html>
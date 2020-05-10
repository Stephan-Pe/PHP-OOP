# PHP Object Oriented Programming

## Themes so far...

## Simple PHP Calculator with Autoloader function.
- to perform the result inside the index Page I had to place the try and catch block inside the form and make a regular include on ``include 'includes/calc.inc.php';``.
- otherwise you can include the nesessary files by setting the ``strpos`` stringposition with an if else statement.
### Thanks to my Mentor Stefan Baur helping me on my way

## Date Time Objekt

- dokumentation on [php.net](https://www.php.net/manual/de/datetime.add.php)
- set the default timezone ``date_default_timezone_set("Europe/Berlin");`` where you need to.
- [Time Zone Abbreviations](https://www.timeanddate.com/time/zones/)

Alternativ procedural PHP or regular PHP


- //    ScopeResolutionOperator self::$userAge = $newUA;
- //    declare(strict_types =1); __construct(string $operator, int $num1, int $num2)
- //    $calc = new Calc($oper, (int)$num1, (int)$num2);
-       namespace  // 

```

        <?php
        namespace User;

        class User {
            private $name;
            private $lastname;
        ?>
```
-       spl_autoload_register // makes life easier ;-)
```
        <?php
            include 'includes/class-autoload.inc.php';
        ?>
```


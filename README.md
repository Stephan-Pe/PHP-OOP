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

## database connection
- 3 Examples of database connection, dbconn folder with dbh.inc.php witch is an mysqli connection with a class private and a protected method
- the dbc folder with  db.php witch is a PDO with a static method, A property declared as static cannot be accessed with an instantiated class object. You can access the method
- and the another dbc with pdo.dbconn.php witch ist private with a protected method you can extend ``class Something extends Dbh`` to.

## use classes 

- PHP: Scope Resolution Operator (::)
- [w3resource](https://www.w3resource.com/php/classes-objects/php-object-oriented-programming.php#ScopeResolution)
In PHP, the scope resolution operator is also called Paamayim Nekudotayim which means "double colon" or "double dot twice" in Hebrew. The double colon (::), is a token which allows access to static, constant, and overridden properties or methods of a class. (Text from w3resource)
- you see examples on ``return self`` in a getter method and in the dbc folder in a static method




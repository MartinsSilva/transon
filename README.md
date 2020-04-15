<p align="center">
    <br><br>
    <img src="#" height="100"/>
    <h1 align="center">transon PHP Class</h1>
    <br>
    <br><br><br>
</p>


# transon
transon is a PHP mini class for converting MySQL data into JSON fast and quickly.


```bash
$ git clone  https://github.com/MartinsSilva/transon.git
```

This will download transon in your project directory.

## Basic Usage
This is a simple demmonstration of transon's simplicity.
After  download 'transon', create an _index.php_ file.

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

// Instantiate transon and Database
$prequel = new \Prequel\Prequel;
$database = new \Prequel\database\Database;

//initializes and configures the database
$database->connect("host", "user", "password", "your database");

//takes all the data from the table
$data = $database->findAll("your table");

//converts your data returned from the table in simple JSON from a transon method
$jsonEncode = $prequel->convert_json($data);

//shows the data on the screen
print_r($jsonEncode);


```

You may quickly test this using the built-in PHP server:
```bash
$ php -S localhost:8000
```

# Working with other methods

Prequel has two more methods for conversion of data in JSON. The first was what we use in the above example, the other two are these: 

1. *convert_json_object*: converts your data to JSON objects 
2. *convert_json_array*: converts your data to a JSON array 

Use whatever answers you have at the moment. 

enjoy 😊😁😁👍
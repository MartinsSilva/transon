<p align="center">
    <br><br>
    <img src="#" height="100"/>
    <h1 align="center">Prequel PHP Manager</h1>
    <br>
    <br><br><br>
</p>


[![Latest Stable Version](https://poser.pugx.org/leafs/leaf/v/stable)](https://packagist.org/packages/leafs/leaf)
[![Total Downloads](https://poser.pugx.org/leafs/leaf/downloads)](https://packagist.org/packages/leafs/leaf)
[![License](https://poser.pugx.org/leafs/leaf/license)](https://packagist.org/packages/leafs/leaf)


# Prequel
Prequel is a PHP mini manager for converting MySQL data into JSON fast and quickly.

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install Prequel.

```bash
$ composer require prequels/prequel
```

This will install Prequel in your project directory.

## Basic Usage
This is a simple demmonstration of Prequel's simplicity.
After [installing](#installation) Prequel, create an _index.php_ file.

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

// Instantiate Prequel and Database
$prequel = new \Prequel\Prequel;
$database = new \Prequel\database\Database;

//initializes and configures the database
$database->connect("host", "user", "password", "your database");

//takes all the data from the table
$data = $database->findAll("your table");

//converts your data returned from the table in simple JSON from a Prequel method
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
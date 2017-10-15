<?php
require_once 'vendor/autoload.php';

use Php\Classes\Magic\Main;
use Php\Classes\Repositories\Repository;
use Php\Classes\Data;

//Naujas objektas ir reikšmė perduodama konstruktoriui
$objektas = new Main('Konstruktorius');

//To String
echo $objektas . "<br>";

//Get
echo $objektas->text . "<br>";

//Set
$objektas->text = "Set metodas";
$objektas->var = "4";
echo $objektas->text . " " . $objektas->var . "<br>";

//SetState
eval('$b = ' . var_export($objektas, true) . ';');
echo $b . "<br>";

//Debug info
var_dump(new Main(5));
echo "<br>";

//Call
$objektas->metodas(1, 2, 3);

//Call static
Main::metodas(1, 2, 3);

//IsSet
var_dump(isset($objektas->text));
echo "<br>";


//UnSet
unset($objektas->text);
var_dump(isset($objektas->text));
echo "<br>";

//Invoke
$objektas();


//Autoloadinim'as #1
$repository = new Repository();
echo $repository->var . "<br>";

//Autoloadinim'as #2
$data = new Data();

foreach ($data->important_data as $var) {
    echo $var . "<br>";
}










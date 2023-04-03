<?php
require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/../src/Marguerite.php';
// require '../vendor/gipetto/cowsay/src/Carcases/Cow.php';

use Cowsay\Marguerite;

$vache= new Marguerite();
$message = 'Bonjour tout le monde !';
$messagemargerite = $vache->speak($message);

echo $messagemargerite;
echo $vache;
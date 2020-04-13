<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new Hello();

echo '<h1>' . $hello->talk() . '</h1><br>';
echo '<h2>' . $hello->comment() . '</h2>';
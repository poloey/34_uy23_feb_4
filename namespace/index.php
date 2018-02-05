<?php 

require 'Arafat.php';
require 'Arif.php';
require 'Towhid.php';

use Arafat\People;
use Arif\People as People2;
use Towhid\People as People3;

$obj = new People2();
echo $obj->name;
<?php

require_once 'Waiter.php';
require_once 'Table.php';


// Créer une instance de Waiter
$waiter = new Waiter();

$table1 = new Table(1, $waiter);
$table2 = new Table(2, $waiter);
$table2 = new Table(3, $waiter);
$table2 = new Table(4, $waiter);
// $table2 = new Table(5, $waiter);


// Faire servir des tables au serveur
$waiter->serve($table1);
$waiter->serve($table2);
$waiter->serve($table3);
$waiter->serve($table4);


// Faire relâcher une table du serveur
$waiter->release($table2);

?>
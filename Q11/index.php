<?php

	require_once 'Vehicle.php';
	require_once 'Technician.php';

	// a.
	$vA = new Vehicle('BGBG');
	var_dump($vA, '');
	$vB = new Vehicle('WHOUAH');
	var_dump($vB, '');
	
	// b.
	$paul = new Technician('Paul');
	var_dump($paul, '');
	$juliette = new Technician('Juliette');
	var_dump($juliette, '');
	$jalila = new Technician('Jalila');
	var_dump($jalila, '');

	// c.
	// $vA->setTechnicians([$paul, $juliette]);
	var_dump($vA, '');
	// $vB->setTechnicians([$jalila]);
	var_dump($vB, '');

	// d.
	// $vB->setTechnicians([$paul]);
	var_dump($vB,'');
	var_dump($vA, '');

	$paul->addVehicle($vA);
	$jalila->addVehicle($vA);
	$juliette->addVehicle($vB);

	var_dump($paul->getName());
	var_dump($juliette->getVehicles());
	var_dump($jalila->getName());
	var_dump($paul->getVehicles());
	var_dump($vA->getRegisterNumber());
	var_dump($vB->getTechnicians());
	var_dump($vB->getRegisterNumber());
	var_dump($vA->getTechnicians());

	

	// Instanciation d'un objet Technician
	// $technician = new Technician('George');

	// Instanciation d'un objet Vehicle
	// $vehicle = new Vehicle('DQ 282 SJ');

	// Association du technicien au véhicule
	// $vehicle->setTechnicians([$technician]);

	// Affichage du véhicule et du technicien associé
	// echo $vehicle;

?>
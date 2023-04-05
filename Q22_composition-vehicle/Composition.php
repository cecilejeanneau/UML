<?php

	/**
	 * Summary of Chassis
	 */
	class Chassis {
		// Le code du Chassis
	}
  
	 /**
	  * Summary of Engine
	  */
	class Engine {
		// Le code du Engine
	}
  
	/**
	 * Summary of Vehicle
	 */
	class Vehicle {
		/**
		 * Summary of chassis
		 * @var
		 */
		private $chassis;
		/**
		 * Summary of engine
		 * @var
		 */
		private $engine;
		
		/**
		 * Summary of __construct
		 * @param Chassis $chassis
		 * @param Engine $engine
		 */
		public function __construct(Chassis $chassis, Engine $engine) {
		$this->chassis = $chassis;
		$this->engine = $engine;
		}
		
		/**
		 * Summary of getChassis
		 * @return Chassis
		 */
		public function getChassis(): Chassis {
		return $this->chassis;
		}
		
		/**
		 * Summary of getEngine
		 * @return Engine
		 */
		public function getEngine(): Engine {
		return $this->engine;
		}
		
		/**
		 * Summary of __destruct
		 */
		public function __destruct() {
			unset($this->chassis);
			unset($this->engine);
		}
	}
	
	// Instanciation des composants
	$chassis = new Chassis();
	$engine = new Engine();
	
	// Instanciation du véhicule avec les composants
	$vehicle = new Vehicle($chassis, $engine);
	
	// Utilisation du véhicule
	
	// Destruction du véhicule qui entraîne la destruction des composants
	unset($vehicle);

?>
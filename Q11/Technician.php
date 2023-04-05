<?php

	/**
	 * Summary of Technician
	 */
	class Technician {
	/**
	 * Summary of name
	 * @var string
	 * @var array 
	 */
		private string $name;
		private $vehicles = [];

		/**
		 * Summary of __construct
		 * @param mixed $name
		 */
		public function __construct(string $name) {
			$this->name = $name;
		}

		/**
		 * Summary of getName
		 * @return string
		 */
		public function getName(): string {
			return $this->name;
		}

		/**
		 * Summary of addVehicle
		 * @param Vehicle $vehicle
		 * @return void
		 */
		public function addVehicle(Vehicle $vehicle): void {
			$this->vehicles[] = $vehicle;
		}

		/**
		 * Summary of removeVehicle
		 * @param Vehicle $vehicle
		 * @return void
		 */
		public function removeVehicle(Vehicle $vehicle): void {
			$key = array_search($vehicle, $this->vehicles, true);
			if ($key !== false) {
				unset($this->vehicles[$key]);
			}
		}

		/**
		 * Summary of getVehicles
		 * @return array<Vehicle>
		 */
		public function getVehicles(): array {
			return $this->vehicles;
		}

		/**
		 * Summary of setVehicles
		 * @param mixed $vechicles
		 * @return void
		 */
		public function setVehicles(array $vehicles): void {
			$this->vehicles = $vehicles;
		}

	}
?>
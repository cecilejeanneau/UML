<?php

	/**
	 * Summary of Vehicle
	 */
	class Vehicle {

		/**
		 * Summary of registerNumber
		 * @var string
		 */
		private string $registerNumber;

		/**
		 * Summary of technician
		 * @var Technician
		 */
		// private ?Technician $technician;

		// /**
		//  * Summary of __construct
		//  * @param string $registerNumber
		//  */
		// public function __construct(string $registerNumber, private ?Technician $technician = null) {
		// 	$this->registerNumber = $registerNumber;
		// 	$this->technician = $technician;
		// }
		/**
		 * Summary of __construct
		 * @param string $registerNumber
		 */
		public function __construct(string $registerNumber, private ? array $technicians = []) {
			$this->registerNumber = $registerNumber;
			$this->technicians = $technicians;
		}
		

		// /**
		//  * Summary of getTechnician
		//  * @return Technician
		//  */
		// public function getTechnician(): ?Technician {
		// 	return $this->technicians;
		// }
		
		
		/**
		 * Summary of getTechnicians
		 * @return array
		 */
		public function getTechnicians(): array {
			return $this->technicians;
		}

		// /**
		//  * Summary of setTechnician
		//  * @param mixed $technicians
		//  * @return void
		//  */
		// public function setTechnicians(array $technicians): void {
		// 	$this->technicians = $technicians;
		// }

		/**
		 * Summary of addTechnician
		 * @param Technician $technician
		 * @return void
		 */
		public function addTechnician(Technician $technician): void
		{
			$this->technicians[] = $technician;
		}

		/**
		 * Summary of removeTechnician
		 * @param Technician $technician
		 * @return void
		 */
		public function removeTechnician(Technician $technician): void
		{
			$key = array_search($technician, $this->technicians, true);
			if ($key !== false) {
				unset($this->technicians[$key]);
			}
		}

		/**
		 * Summary of registerNumber
		 * @return string
		 */
		public function getRegisterNumber(): string {
			return $this->registerNumber;
		}
		
		// /**
		//  * Summary of registerNumber
		//  * @param string $registerNumber Summary of registerNumber
		//  * @return self
		//  */
		// public function setRegisterNumber(string $registerNumber): self {
		// 	$this->registerNumber = $registerNumber;
		// 	return $this;
		// }

		// /**
		//  * Summary of __toString
		//  * @return string
		//  */
		// public function __toString(): string
		// {
		// 	$string = "Je suis le véhicule immatriculé {$this->registerNumber}";
		// 	if (count($this->technicians) > 0) {
		// 		$string .= " et mes techniciens sont :";
		// 		foreach ($this->technicians as $technician) {
		// 			$string .= " {$technician->getName()}";
		// 		}
		// 	} else {
		// 		$string .= " et je n'ai pas de technicien.";
		// 	}
		// 	return $string;
		// }
}
?>
<?php

	/**
	 * Summary of Technician
	 */
	class Technician {

		/**
		 * Summary of subordinates
		 * @var array
		 */
		private $subordinates = [];

		/**
		 * Summary of superior
		 * @var
		 */
		private $superior = null;


		/**
		 * Summary of __construct
		 * @param ?Technician $superior
		 * @return void
		 */
		public function __construct(?Technician $superior) {
			$this->superior = $superior;
		}

		/**
		 * Summary of getSuperior
		 * @return Technician
		 */
		public function getSuperior(): Technician {
			return $this->superior;
		}

		/**
		 * Summary of setSuperior
		 * @param ?Technician $superior
		 * @return void
		 */
		public function setSuperior(?Technician $superior): void {
			if ($superior !== null) {
				$this->superior->addSubordinate($this);
				// throw new Exception("A technician is supposed to have only one superior");
			}
			if ($this->superior !== null) {
				$this->superior->removeSubordinate($this);
				// throw new Exception("A technician is supposed to have only one superior");
			}
			if ($superior === $this) {
				throw new Exception("A technician is not supposed to be his own subordinate");
			}
			$this->superior = $superior;
		}

		/**
		 * Summary of addSubordinate
		 * @param Technician $subordinate
		 * @return void
		 */
		public function addSubordinate(Technician $subordinate): void {
			$this->subordinates[] = $subordinate;
		}

		/**
		 * Summary of removeSubordinate
		 * @param Technician $subordinate
		 * @return void
		 */
		public function removeSubordinate(Technician $subordinate): void {
			$index = array_search($subordinate, $this->subordinates, true);
			if ($index !== false) {
				array_splice($this->subordinates, $index, 1);
			}
		}

		/**
		 * Summary of getSubordinates
		 * @return array<Technician>
		 */
		public function getSubordinates(): array {
			return $this->subordinates;
		}

		/**
		 * Summary of isSuperiorOf
		 * @param Technician $subordinate
		 * @return bool
		 */
		public function isSuperiorOf(Technician $subordinate): bool {
			return $subordinate->getSuperior() === $this;
		}
	}

?>
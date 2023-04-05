<?php

/**
 * The Superior class represents a technician who has one or more subordinates.
 */
	class Superior {

		/**
		 * The array of subordinates.
		 * @var array
		 */
		private $subordinates = [];

		/**
		 * Adds a subordinate to the subordinates array.
		 * @param Subordinate $subordinate
		 * @throws Exception if the given subordinate already has a superior or if the subordinate is the same as the superior.
		 * @return void
		 */
		public function addSubordinate(Subordinate $subordinate): void {
			if ($subordinate->getSuperior() !== null) {
				throw new Exception("The given subordinate already has a superior.");
			}
			if ($subordinate === $this) {
				throw new Exception("A subordinate cannot be its own superior.");
			}
			$this->subordinates[] = $subordinate;
			$subordinate->setSuperior($this);
		}

		/**
		 * Removes a subordinate from the subordinates array.
		 * @param Subordinate $subordinate
		 * @return void
		 */
		public function removeSubordinate(Subordinate $subordinate): void {
			$index = array_search($subordinate, $this->subordinates, true);
			if ($index !== false) {
				array_splice($this->subordinates, $index, 1);
				$subordinate->setSuperior(null);
			}
		}

		/**
		 * Returns the array of subordinates.
		 * @return array
		 */
		public function getSubordinates(): array {
			return $this->subordinates;
		}
	}

?>
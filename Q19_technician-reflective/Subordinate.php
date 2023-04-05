<?php

	/**
	 * The Subordinate class represents a technician who has one superior.
	 */
	class Subordinate {

		/**
		 * The superior of this subordinate.
		 * @var Superior|null
		 */
		private $superior = null;

		/**
		 * Returns the superior of this subordinate.
		 * @return Superior|null
		 */
		public function getSuperior(): ?Superior {
			return $this->superior;
		}

		// /**
		// * Method allowing to retrieve the superior of the subordinate
		// * @return Superior|null The superior of the subordinate
		// */
		// public function getSuperior(): ?Superior
		// {
		// return $this->superior;
		// }

		/**
		 * Sets the superior of this subordinate.
		 * @param Superior|null $superior
		 * @throws Exception if the given superior is the same as this subordinate or if this subordinate already has a superior.
		 * @return void
		 */
		public function setSuperior(?Superior $superior): void {
			if ($superior === $this) {
				throw new Exception("A subordinate cannot be its own superior.");
			}
			if ($this->superior !== null) {
				$this->superior->removeSubordinate($this);
			}
			$this->superior = $superior;
			if ($this->superior !== null) {
				$this->superior->addSubordinate($this);
			}
		}

	}

?>
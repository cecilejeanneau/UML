<?php

	/**
	 * Summary of Player
	 */
	class Player {

		/**
		 * Summary of name
		 * @var
		 */
		private $name;
		
		/**
		 * Summary of team
		 * @var
		 */
		private $team;

		/**
		 * Summary of __construct
		 * @param mixed $name
		 */
		public function __construct($name) {
			$this->name = $name;
			$this->team = null;
		}

		/**
		 * Summary of getTeam
		 * @return Team
		 */
		public function getTeam() {
			return $this->team;
		}

		/**
		 * Summary of setTeam
		 * @param Team|null $team
		 * @return void
		 */
		public function setTeam(Team $team = null) {
			if ($team !== $this->team) {
				if ($this->team !== null) {
					$this->team->removePlayer($this);
				}
				$this->team = $team;
				if ($team !== null) {
					$team->addPlayer($this);
				}
			}
		}
	}

?>
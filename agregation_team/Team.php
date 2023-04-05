<?php
	
// Team est agrégation de Player avec une cardinalité de 0..6 Player et Player a 0..1 Team, relation bidirectionnelle. 

	/**
	 * Summary of Team
	 */
	class Team {
		/**
		 * Summary of name
		 * @var
		 */
		private $name;
  /**
   * Summary of players
   * @var
   */
		private $players;

		/**
		 * Summary of __construct
		 * @param mixed $name
		 */
		public function __construct($name) {
			$this->name = $name;
			$this->players = array();
		}

		/**
		 * Summary of addPlayer
		 * @param Player $player
		 * @throws Exception
		 * @return void
		 */
		public function addPlayer(Player $player) {
			if (count($this->players) < 6) {
				$this->players[] = $player;
				$player->setTeam($this);
			} else {
				throw new Exception("The team is already full.");
			}
		}

		/**
		 * Summary of removePlayer
		 * @param Player $player
		 * @return void
		 */
		public function removePlayer(Player $player) {
			$index = array_search($player, $this->players);
			if ($index !== false) {
				unset($this->players[$index]);
				$player->setTeam(null);
			}
		}

		/**
		 * Summary of getPlayers
		 * @return array<Player>
		 */
		public function getPlayers() {
			return $this->players;
		}
	}

?>
<?php

/**
 * Summary of Waiter
 */
class Waiter {
    /**
     * Summary of tables
     * @var array $tables
     */
    private $tables = [];

    /**
     * Summary of serve
     * @param Table $table
     * @throws Exception
     * @return void
     */
    public function serve(Table $table): void {
        if (count($this->tables) < 4) {
            $this->tables[] = $table;
			$table->addWaiter($this);
        } else {
            throw new Exception("Pas plus de 4 tables par serveur !");
        }
    }

    /**
     * Summary of release
     * @param Table $table
     * @return void
     */
    public function release(Table $table): void {
        $index = array_search($table, $this->tables);
        if ($index !== false) {
            array_splice($this->tables, $index, 1);
			$table->removeWaiter($this);
        }
    }
}

?>
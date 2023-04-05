<?php

/**
 * Summary of Table
 */
class Table {
    /**
     * Summary of number
     * @var int $number
     */
    private int $number;

	/**
     * Summary of number
     * @var array $waiters
     */
    private array $waiters = [];

    /**
     * Summary of __construct
     * @param int $number
	//  * @param Waiter $waiter
     */
    public function __construct(int $number) {
        $this->number = $number;
        // $this->waiter = $waiter;
    }

    /**
     * Summary of getNumber
     * @return int
     */
    public function getNumber(): int {
        return $this->number;
    }

	// /**
    //  * Summary of getNumber
    //  * @return int
    //  */
    // public function getWaiter(): Waiter {
    //     return $this->waiter;
    // }

	/**
     * Summary of getNumber
     * @return void
	 * @param ?Waiter $waiter
     */
    public function addWaiter(?Waiter $waiter): void {
        if (!in_array($waiter, $this->waiters)) {
            $this->waiters[] = $waiter;
        }
    }

	/**
     * Summary of getNumber
     * @return void
	 * @param ?Waiter $waiter
     */
    public function removeWaiter(Waiter $waiter): void {
        $index = array_search($waiter, $this->waiters);
        if ($index !== false) {
            array_splice($this->waiters, $index, 1);
        }
    }

	
    /**
     * Summary of getWaiter
     * @return array
     */
    public function getWaiters() {
        return $this->waiters;
    }

}

?>
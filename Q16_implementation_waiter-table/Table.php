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
     * @var Waiter $waiter
     */
    private Waiter $waiter;

    /**
     * Summary of __construct
     * @param int $number
	 * @param Waiter $waiter
     */
    public function __construct(int $number, Waiter $waiter) {
        $this->number = $number;
        $this->waiter = $waiter;
    }

    /**
     * Summary of getNumber
     * @return int
     */
    public function getNumber(): int {
        return $this->number;
    }

	/**
     * Summary of getNumber
     * @return int
     */
    public function getWaiter(): Waiter {
        return $this->waiter;
    }

}

?>
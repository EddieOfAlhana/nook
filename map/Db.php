<?php

class Db
{
	protected static $instance;
	protected $connection;

	protected function __construct() {
		$this->connection = new mysqli('localhost', 'nook', 'TBfUjhXhD2GYr84c', 'nookofeurope');
	}

	public static function getInstance()
	{
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function saveStake($stake) {
		$stakeArray = (array)$stake;
		$this->storeArray($stakeArray, 'excel_stake', $this->connection); 	
	}

        protected function storeArray (&$data, $table)
	{
	        $cols = '`'. implode('`, `', array_keys($data)).'`';
		foreach (array_values($data) as $value) {
		    isset($vals) ? $vals .= ',' : $vals = '';
		    $vals .= '\''.$this->connection->real_escape_string($value).'\'';
		}
	        $this->connection->real_query('INSERT INTO '.$table.' ('.$cols.') VALUES ('.$vals.')');
	}

	public function truncate ($table) 
	{
		$this->connection->real_query('TRUNCATE TABLE ' . $table  . ';');
	}

	public function getStakes() {
		$result = $this->connection->query('SELECT * FROM excel_stake');
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}


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

    public function saveZone($zone) 
    {
        $zoneArray = (array)$zone;
        $this->storeArray($zoneArray, 'excel_zone', $this->connection);
    }

	public function truncate ($table) 
	{
		$this->connection->real_query('TRUNCATE TABLE ' . $table  . ';');
	}

	public function getStakes(array $type, array $country) {
        if(!in_array('stake', $type)) {
            return [];
        }
        $countries = [];
        if (in_array('hu', $country)) {
            $countries[] = '"Magyarország"';
        }
        if (in_array('cr', $country)) {
            $countries[] = '"Horvátország"'; 
        }
        $result = $this->connection->query('SELECT * FROM excel_stake WHERE country IN ('. implode(', ', $countries) . ')');
		return $result->fetch_all(MYSQLI_ASSOC);
	}

    public function getZones(array $type, array $country) {
        if(!in_array('zone', $type)) {
            return [];
        }
        $countries = [];
        if (in_array('hu', $country)) {
            $countries[] = '"Magyarország"';
        }
        if (in_array('cr', $country)) {
            $countries[] = '"Horvátország"'; 
        }

        $result = $this->connection->query('SELECT * FROM excel_zone WHERE country IN ('. implode(', ', $countries) . ')');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}


<?php

/**
	* Prequel Core Database
	*
*/

namespace Prequel\database;

class Database
{
	protected $connection;

	/**
		* Connect to database
		* 
		* @param string $host: Host Name
		* @param string $user: Database username
		* @param string $password: Database password
		* @param string $databaseName: Database name
	*/
	public function connect($host, $user, $password, $databaseName)
	{
		try {
			
			$connection = mysqli_connect($host, $user, $password, $databaseName);
			$this->connection = $connection;

			return $connection;
			
		} catch (Exception $error) {
			print_r($error);
		}
	}

	/**
		* MYSQLI Query
		* 
		* @param string $table: table of database
		* @param string $items: fields of tables
	*/
	public function findAll(string $table, string $items = "*")
	{
		$query = $this->connection->query("SELECT $items FROM $table");
		return mysqli_fetch_all($query, MYSQLI_ASSOC);
	}
}

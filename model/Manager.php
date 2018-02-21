<?php


class Manager
{
	public $db;
	protected function dbConnect()
	{
		include ('config.php');
		$array = 'config.php';
		$host = $config['hostname'];
		$dbname = $config['dbname'];
		$username = $config['username'];
		$password = $config['password'];
			
		
		$db = new \PDO ('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password);
		return $db;
	}
}

?>
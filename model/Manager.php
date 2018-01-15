<?php


class Manager
{
	public $db;
	protected function dbConnect()
	{
		
		$file_to_parse = "config.ini";
		$array = parse_ini_file($file_to_parse);
		$host = $array['hostname'];
		$dbname = $array['dbname'];
		$username = $array['username'];
		$password = $array['password'];
			
		
		$db = new \PDO ('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password);
		return $db;
	}
}

?>
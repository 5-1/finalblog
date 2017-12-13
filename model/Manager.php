<?php


class Manager
{
	public $db;

	protected function dbConnect()
	{
		$db = new \PDO ('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '');
		return $db;
	}
}

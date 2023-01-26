<?php
class DbConnect{
	private static $db;

	public static function getDb()
	{
		return DbConnect::$db;
	}

	public static function init()
	{
		try {
			// le nom de l'host c'est le nom du server dans DockerCompose
			self::$db= new PDO ( 'mysql:host=server-mysql;dbname=test;charset=utf8', "root", "test");
		}
		catch (Exception $e)
		{
			die('Erreur :'. $e->getMessage());
		}
	}
}
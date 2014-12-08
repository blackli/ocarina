<?php
namespace Ocarina\Key;

class Mvc
{
	private function __construct($config) { }

	public static function get($confFile)
	{
		return new self($config);
	}

	public static function open($namespace)
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		$c = new \Example\Controller\Home();
		$c->actionDefault();
	}
}

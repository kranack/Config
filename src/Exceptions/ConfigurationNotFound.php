<?php

namespace kranack\Config\Exceptions;

use Exception;

class ConfigurationNotFound extends Exception
{

	public function __construct()
	{
		parent::__construct('Configuration file not found', 1);
	}

}
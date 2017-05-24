<?php

class Extensiones extends Database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function obtener_id($mime_extension)
	{
		return ORM::for_table('extensiones')->select('id')->where('mime', $mime_extension)->find_array();
	}
}

?>

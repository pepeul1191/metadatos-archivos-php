<?php

class Archivos extends Database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function guardar($nombre, $descripcion, $nombre_generado, $carpeta, $extension_id)
	{
		$archivos = ORM::for_table('archivos')->create();
		$archivos->set('nombre', $nombre);
		$archivos->set('descripcion', $descripcion);
		$archivos->set('nombre_generado', $nombre_generado);
    $archivos->set('carpeta', $carpeta);
		$archivos->set('extension_id', $extension_id);
		$archivos->save();

		return $archivos->id();
	}

  public function obtener_ruta($id)
  {
    return ORM::for_table('vw_carpeta_nombre_generado')->select('id')->select('ruta_documento')->where('id', $id)->find_array();
  }
}

?>

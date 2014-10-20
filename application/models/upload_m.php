<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_m extends CI_Models
{
	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function index()
	{
		//$this->load->model('upload_m');//Modelo de Base de Datos de Cestaticket
	}

	function set_data($excel)
	{
		$guardados=0;
		foreach ($excel as $row) {
			//Guardar en base de datos
			$data = array(
				"Id_empleado" => $row[1],
				"NominaCT"	=>	$row[3],
				"MontoCT"	=>	$row[4],
			);
			$this->db->insert('InfoCT',$data);
			$guardados=$guardados+1;
		}
		return $guardados;
	}
}

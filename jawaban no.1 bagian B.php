<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {
	parent::__construct();{
		}

	public function identitas() {  //nama function peson saya ganti identitas karena kalau memakai nama person akan sama dengan nama class.
		$person=array(
            'nama'=>$this->input->post('Budi'),
            'bodytemp'=>$this->input->post('bodytemp')
            );
	}

	public function sick() {
		if ($this->person->identitas('bodytemp') > 37){
			echo sakit;
		}
		elseif($this->person->identitas =< 37){
			echo tidak sakit;
		}
	}

	public function gotraining() {
		$training=array(
			'kendaraan'=>this->input->post('kendaraan')
		);
		switch ($training) {
			case "mobil":
			echo "Silahkan menggunakan mobil bila waktu berada pada pukul 06:00";
			break;
			case "motor":
			echo "Silahkan menggunakan motor bila waktu berada pada pukul 07:00"
			break;
			case "ojek":
			echo "Silahkan menggunakan ojek bila waktu sudah melebihi pukul 07:00"
			break;
			default :
			echo "Sedang sakit"

		}
	}


}
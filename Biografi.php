<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biografi extends CI_Controller {

	public function index(){
		echo "Hallo nama saya Kamini";
	}

	public function kuliah($jurusan,$semester){
	$this->index();
	echo "<br/>";
	echo "Saya jurusan : ".$jurusan."<br/> Semester : ".$semester;

	$uri ='<ol>';
	$uri.='<li>'.$this->uri->segment(1).'</li>';
	$uri.='<li>'.$this->uri->segment(2).'</li>';
	$uri.='<li>'.$this->uri->segment(3).'</li>';
	$uri.='<li>'.$this->uri->segment(4).'</li>';
	echo $uri;
	}
}
?>
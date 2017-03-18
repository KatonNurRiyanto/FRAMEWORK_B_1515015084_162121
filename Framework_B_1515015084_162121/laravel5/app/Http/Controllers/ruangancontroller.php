<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal(){
		return "Hello dari ruangancontroller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$ruangan = new Ruangan();
		$ruangan->title = "Ruangan A";
		$ruangan->save();
		return "Data Ruangan dengan nama {$ruangan->title} telah disimpan";
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal(){
		return "Hello dari matakuliahcontroller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$matakuliah = new Matakuliah();
		$matakuliah->title = "Framework";
		$matakuliah->keterangan = "Pemrograman Framework";
		$matakuliah->save();
		return "Data matakuliah dengan nama {$matakuliah->title} telah disimpan";
	}
}

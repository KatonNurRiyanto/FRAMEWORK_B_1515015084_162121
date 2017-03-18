<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
     public function awal(){
		return "Hello dari jadwal_matakuliahcontroller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$jadwal_matakuliah = new Jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa_id = 1;
		$jadwal_matakuliah->ruangan_id = 1;
		$jadwal_matakuliah->disen_matakuliah_id = 1;
		$jadwal_matakuliah->save();
		return "Data jadwal matakuliah telah disimpan";
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
		return "Hello dari mahasiswacontroller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$ruangan = new mahasiswa();
		$mahasiswa->nama = "Katon Nur Riyanto";
		$mahasiswa->nim = "1515015084";
		$mahasiswa->alamat = "perum temindung indah";
		$mahasiswa->pengguna_id = 3;
		$mahasiswa->save();
		return "Data mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
	}
}

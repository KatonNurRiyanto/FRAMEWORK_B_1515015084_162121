<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal(){
		return "Hello dari DosenController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$dosen = new Dosen();
		$dosen->nama = "Katon Nur Riyanto";
		$dosen->nip = "1515015084";
		$dosen->alamat = "perum temindung indah";
		$dosen->pengguna_id = 3;
		$dosen->save();
		return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
	}
}

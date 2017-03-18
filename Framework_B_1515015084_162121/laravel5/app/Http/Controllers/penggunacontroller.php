<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class penggunacontroller extends Controller
{
    public function awal()
	{
		return "hello dari penggunacontroller";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna->username = 'katon nur riyanto';
		$pengguna->password = '1515015084';
		$pengguna->save();
		return "data dengan username{$pengguna->username} telah disimpan";
	}
}

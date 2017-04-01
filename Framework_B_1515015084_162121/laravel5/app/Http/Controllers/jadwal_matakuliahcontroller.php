<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_matakuliah;

class Jadwal_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Jadwal_matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$jadwal_matakuliah = new Jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 1;
    	$jadwal_matakuliah->ruangan_id = 1;
    	$jadwal_matakuliah->dosen_matakuliah_id = 1;
    	$jadwal_matakuliah->save();
    	return "Data Jadwal matakuliah telah disimpan";
}

public function jadwal_kulmhs() {
	$jadwal = jadwal_matakuliah::find(1);  //untuk menampilkan semua data datanya
	echo "nama Mahasiswa :" .$jadwal->mahasiswa->nama;
	echo "<br>";
	echo " Berada Di Kelas :" .$jadwal->ruangan->title;
} 
}
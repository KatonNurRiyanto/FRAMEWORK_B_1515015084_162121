<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalMatakuliah extends Model
{
    protected $table = 'jadwalkuliah';// mendeklarasikan tabel jadwal_matakuliah
	//protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
	 protected $guarded = ['id'];// mengabaikan atribut id pada saat melakikan insert/update

    public function dosenmatkul(){ // fungsi dengan nama dosen_matakuliah
    	return $this->belongsTo(dosenmatkul::class);// memberikan nilai return dari fungsi belongsTo yang merelasikan dosenmatkul dengan banyak jadwal_Matakuliah
    } 

    public function ruangann(){  // fungsi dengan nama ruangann
		return $this->belongsTo(ruangann::class); // memberikan nilai return dari fungsi belongsTo yang mrelasikan ruangann dengan banyak jadwal_matakuliah
    }

    public function mahasiswa(){ // fungsi dengan nama mahasiswa
    	return $this->belongsTo(mahasiswa::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan banyak jadwalMatakuliah dengan mahasiswa
    }
}

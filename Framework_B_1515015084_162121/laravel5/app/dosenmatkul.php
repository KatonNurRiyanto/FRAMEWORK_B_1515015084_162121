<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatkul extends Model
{
    protected $table = 'dosenmatkul'; //mendefinisikan nama tabel dosenmatkul
    // protected $fillable = ['dosen_id','matakuliah_id'];
    protected $guarded =['id'];//mengabaikan aribut id pada saat melakukan insert/delete oleh eloquent
    public function dosen(){ // sebuah fungsi dosen

    	return $this->belongsTo(dosen::class); //memberikan nilai return dari fungsi belongsTo yang  merelasikan model dosen dengan model dosen_matakuliah

    }

    public function matkul(){ //fungsi matakuliah
    	return $this->belongsTo(matkul::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model dosen_matakuliah dengan model matakuliah
    }

    
    public function jadwalMatakuliah(){ //fungsi jadwal_matakuliah
    	return $this->hasMany(jadwalMatakuliah::class); //memberikan nilai return dari fungsi hasMany yang merelasikan model dosen_matakuliah dengan banyak model jadwal_matakuliah dengan foreign key dosen_matakuliah_id
    }
}

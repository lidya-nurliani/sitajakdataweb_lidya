<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dafken extends Model
{
    use HasFactory;
    protected $table = "dafken";
    protected $fillable = [ 'nama_pemegang', 'merk_kendaraan', 'jenis_kendaraan', 'no_polisi', 
    'no_mesin', 'no_rangka', 'tahun', 'harga_perolehan', 'sumber_dana', 'keterangan','foto_fisik'];
}

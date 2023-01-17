<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayarselanjutnya extends Model
{
    use HasFactory;
    protected $table = 'bayarselanjutnya';
    protected $primarykey = "id";
    protected $fillable = ['unit_kerja','dafken_id', 'tgl_bayar_selanjutnya', 'pemegang', 'keterangan','foto_stnk'];

    public function dafken() {
        return $this->belongsTo(Dafken::class, 'dafken_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blmbayar extends Model
{
    use HasFactory;
    protected $table = 'blmbayar';
    protected $primarykey = "id";
    protected $fillable = ['unit_kerja','dafken_id', 'tgl_bayar_selanjutnya', 'pemegang', 'keterangan'];

    public function dafken() {
        return $this->belongsTo(Dafken::class, 'dafken_id');
    }
    
}

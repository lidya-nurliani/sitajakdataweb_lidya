<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayarpajak extends Model
{
    use HasFactory;
    protected $table = 'bayarpajak';
    protected $primarykey = "id";
    protected $fillable = ['unit_kerja','dafken_id', 'pembayaran_pajak', 'tgl_bayar', 'pemegang', 'keterangan', 'foto_stnk'];

    public function dafken() {
        return $this->belongsTo(Dafken::class, 'dafken_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaruanplat extends Model
{
    use HasFactory;
    protected $table = 'perbaruanplat';
    protected $primarykey = "id";
    protected $fillable = ['dafken_id', 'pergantian_plat', 'masa_berganti', 'status'];

    public function dafken() {
        return $this->belongsTo(Dafken::class, 'dafken_id');
    }

}

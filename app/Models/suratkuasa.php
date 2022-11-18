<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratkuasa extends Model
{
    use HasFactory;
    protected $table = 'suratkuasa';
    protected $primarykey = "id";
    protected $fillable = ['dafken_id'];

    public function dafken() {
        return $this->belongsTo(Dafken::class, 'dafken_id');
    }
}

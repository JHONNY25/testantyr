<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'municipio_id',
    ];

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}

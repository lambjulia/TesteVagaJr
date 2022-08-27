<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    
    protected $fillable = [ 'nome_pais', 'sigla'];
    protected $primaryKey = 'id';

    public function estados()
    {
        return $this->hasMany(Estados::class);
    }
}

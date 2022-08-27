<?php

namespace App\Models;

use App\Paises;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{

    protected $fillable = [ 'nome_estado', 'id_pais'];
    protected $primaryKey = 'id';

    public function paises()
    {
        return $this->belongsTo(Paises::class);
    }

    public function cidades()
    {
        return $this->hasMany(Cidades::class);
    }

     
}

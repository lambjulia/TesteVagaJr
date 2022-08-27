<?php

namespace App\Models;

use App\Estados;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{

    protected $fillable = [ 'nome_cidade', 'id_estado'];
    protected $primaryKey = 'id';


    public function estados()
    {
        return $this->belongsTo(Estados::class);
    }
}

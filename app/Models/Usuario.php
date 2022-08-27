<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permissoes;

class Usuario extends Model
{
    protected $fillable = ['nome', 'telefone', 'data_cadastro'];
    protected $primaryKey = 'id';

    public function permissoes()
    {
        return $this->hasOne(Permissoes::class);
    }
}

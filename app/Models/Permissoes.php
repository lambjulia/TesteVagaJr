<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Permissoes extends Model
{
    protected $fillable = [ 'nivel'];
    protected $primaryKey = 'id';

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}

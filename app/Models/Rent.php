<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $table = 'rent';

    protected $fillable = [
        'id_usuario', 'valor_total', 'data_inicial', 'data_final', 'id_veiculo'
    ];

}

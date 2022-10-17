<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Agency extends Model
{
    use HasFactory , Notifiable;

    protected $table = "agency";

    protected $fillable = [
        'descricao',
        'endereco',
        'cidade',
    ];

}

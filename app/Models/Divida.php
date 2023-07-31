<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divida extends Model
{
    use HasFactory;
    protected $fillable = ['data_do_debito','valor_da_divida','data_de_vencimento','valor_do_acordo','fornecedor'];

    public function cliente ()
    {
        return $this->belongsTo(Cliente::class);
    }
}

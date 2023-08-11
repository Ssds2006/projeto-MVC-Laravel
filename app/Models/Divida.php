<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divida extends Model
{
    use SoftDeletes;
    protected $table = 'dividas';

    use HasFactory;
    protected $fillable = [
        'cliente_id', 'fornecedor_id', 'data_do_debito', 'valor_da_divida', 'data_de_vencimento', 'valor_do_acordo', 'status'
    ];

    public function cliente ()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id'); // 'fornecedor_id' é a chave estrangeira na tabela de dívidas
    }
}

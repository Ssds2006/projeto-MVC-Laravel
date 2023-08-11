<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'uf', 'email'];

    public function dividas()
    {
        return $this->hasMany(Divida::class, 'fornecedor_id'); // 'fornecedor_id' é a chave estrangeira na tabela de dívidas
    }
}

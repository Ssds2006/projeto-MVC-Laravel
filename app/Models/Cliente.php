<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome','cpf','telefone'];
    //protected $with = ['dividas'];

    public function dividas()
    {
        return $this->hasMany(Divida::class, 'cliente_id');
    }

    protected static function booted ()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder){
            $queryBuilder->orderBy('nome');
            //$queryBuilder->orderBy('nome', 'desc');
        } );
    }

    // QUERY PARA COLOCAR SOMENTE CLIENTE OOU USUÁRIO ATIVO
    //public function scopeActive(Builder $query){
    //    return $query-where('active', true);
    //}
}



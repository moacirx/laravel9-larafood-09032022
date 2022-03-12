<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable  = ['nome', 'endereco', 'bairro', 'cidade', 'uf', 'cep', 'cpf', 'telefone' ];

    public function search($filter = null)
    {
        $results = $this->where('nome', 'LIKE', "%{$filter}%")
                        ->orWhere('endereco', 'LIKE', "%{$filter}%")
                        ->paginate(3);

        return $results;
    }


}

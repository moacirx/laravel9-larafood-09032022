<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable  = ['nome', 'endereco', 'bairro', 'cidade', 'uf', 'cep', 'cpf', 'telefone'];

    public function search($filter = null)
    {
        $results = $this->where('nome', 'LIKE', "%{$filter}%")
            ->orWhere('endereco', 'LIKE', "%{$filter}%")
            ->paginate(3);

        return $results;
    }

    public function buscaGeral($filters = null)
    {
        if ( in_array('Marcos1', $filters))
           dd($filters);

           if(array_key_exists("busca_nome", $filters))
           dd($filters);

        $filtering = array();
        $conta = 0;
        foreach ($filters as $chave => $filter) {
            //  echo $chave . '-' . $filter . '<br>';
            if ($chave == "busca_nome") {
                $campo = 'nome';
                $value = $filter;
            }
            if ($chave == "busca_endereco") {
                $campo = 'endereco';
                $value = $filter;
            }
            if ($conta == 0) {
                $var =  "where ('$campo', 'LIKE' ,  '%{$filter}%')";
            }

            if ($conta > 0) {
                $var .=  "->orwhere ('$campo', 'LIKE' ,  '%{$filter}%')";
            }

            // echo $var;
            $conta += 1;




            // if($chave="busca_nome")
            // array_push($filtering, $filter);
        }

        // echo $var;
        //  dd($var);
    //  $results = ('$this->'.$var.'->paginate(3);');
    //  $results = $results;
        //  echo $results;


        $results = $this->where('nome', 'LIKE', "%{$filters['busca_nome']}%")
            ->orWhere('endereco', 'LIKE', "%{$filters['busca_endereco']}%")
            ->paginate(3);
        //     //  echo $filters['busca_nome'];
        // echo $results;
//          print_r($results);
//   dd($results);
        return $results;
    }
}

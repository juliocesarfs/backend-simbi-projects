<?php

namespace App\Domain\Project\ProjectRouanet\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRouanet extends Model
{
    const ID = 'id_projeto';
    const NAME = 'nome';
    const UF = 'uf';
    const COUNTY = 'municipio';
    const CAPTURED_VALUE = 'valor_captado';
    const APPROVED_VALUE = 'valor_aprovado';
    const SUMMARY = 'resumo';

    protected $table = 'tb_projeto_rouanet_teste';

    protected $primaryKey = self::ID;

    public static function fullField(string $field): string
    {
        return self::tableName() . '.' . $field;
    }

    public static function tableName(): string
    {
        return (new static)->getTable();
    }
}

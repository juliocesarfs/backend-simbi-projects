<?php

namespace App\Domain\Project\ProjectRouanet\Traits;

use App\Domain\Project\ProjectRouanet\Models\ProjectRouanet;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

trait ProjectRouanetTrait
{
    public function queryProjectRouanetDataBase(): Builder
    {
        return DB::table(ProjectRouanet::tableName())
            ->select(
                ProjectRouanet::fullField(ProjectRouanet::ID),
                ProjectRouanet::fullField(ProjectRouanet::NAME),
                ProjectRouanet::fullField(ProjectRouanet::UF),
                ProjectRouanet::fullField(ProjectRouanet::COUNTY),
                ProjectRouanet::fullField(ProjectRouanet::CAPTURED_VALUE),
                ProjectRouanet::fullField(ProjectRouanet::APPROVED_VALUE),
                ProjectRouanet::fullField(ProjectRouanet::SUMMARY),
            );
    }
}

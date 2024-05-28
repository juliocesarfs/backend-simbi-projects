<?php

namespace App\Domain\Project\ProjectRouanet\Repositories;

use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetRepositoryInterface;
use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;
use App\Domain\Project\ProjectRouanet\Traits\ProjectRouanetTrait;

class ProjectRouanetRepository implements ProjectRouanetRepositoryInterface
{

    use ProjectRouanetTrait;

    public function __construct()
    {
    }
    public function list(ListProjectRouanetDTO $listProjectRouanetDTO)
    {
        $sql = $this->queryProjectRouanetDataBase();

        if ($listProjectRouanetDTO->limit != null) {
            $sql->limit($listProjectRouanetDTO->limit);
            $sql->offset($listProjectRouanetDTO->page);
        }

        return $sql->get();
    }
}

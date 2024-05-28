<?php

namespace App\Domain\Project\ProjectRouanet\Contracts;

use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;

interface ProjectRouanetRepositoryInterface
{
    public function list(ListProjectRouanetDTO $listProjectRouanetDTO);
}

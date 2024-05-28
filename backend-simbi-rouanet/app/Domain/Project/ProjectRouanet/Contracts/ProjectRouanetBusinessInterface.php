<?php

namespace App\Domain\Project\ProjectRouanet\Contracts;

use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;
use App\Domain\Project\ProjectRouanet\Models\ProjectRouanet;

interface ProjectRouanetBusinessInterface
{
    public function list(ListProjectRouanetDTO $listProjectRouanetDTO);
}

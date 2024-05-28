<?php

namespace App\Domain\Project\ProjectRouanet\Business;

use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetBusinessInterface;
use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetRepositoryInterface;
use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;
use App\Domain\Project\ProjectRouanet\Traits\ValidateTrait;

class ProjectRouanetBusiness implements ProjectRouanetBusinessInterface
{

    use ValidateTrait;

    public function __construct(private ProjectRouanetRepositoryInterface $projectRouanetRepository)
    {
    }

    public function list(ListProjectRouanetDTO $listProjectRouanetDTO)
    {

        // TO DO validators
        $this->validateQueryParams($listProjectRouanetDTO);

        // $listProjectRouanetDTO->page *= $listProjectRouanetDTO->limit;

        $data = $this->projectRouanetRepository->list($listProjectRouanetDTO);

        return $data;
    }
}

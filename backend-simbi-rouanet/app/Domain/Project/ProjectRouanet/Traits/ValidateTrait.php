<?php

namespace App\Domain\Project\ProjectRouanet\Traits;

use App\Application\Enums\SystemMessageEnum;
use App\Exceptions\SystemException;
use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;
use Symfony\Component\HttpFoundation\Response;

trait ValidateTrait
{

    public function validateQueryParams(ListProjectRouanetDTO $listProjectRouanetDTO): void
    {
        if (!$this->isQueryParamValid($listProjectRouanetDTO)) {
            throw new SystemException(SystemMessageEnum::PROJECT_ROUANET_INVALID_QUERY_PARAMS, Response::HTTP_BAD_REQUEST);
        }

        $listProjectRouanetDTO->page = $listProjectRouanetDTO->page ?? 0;

        if ($listProjectRouanetDTO->limit != null) {
            $listProjectRouanetDTO->page *= $listProjectRouanetDTO->limit;
        }
    }

    public function isQueryParamValid(ListProjectRouanetDTO $listProjectRouanetDTO): bool
    {
        if ($listProjectRouanetDTO->page < 0 || $listProjectRouanetDTO->limit < 0) {
            return false;
        }
        return true;
    }
}

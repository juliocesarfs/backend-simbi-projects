<?php

namespace App\Domain\Project\ProjectRouanet\Providers;

use App\Abstracts\ServiceProviderAbstract;
use App\Domain\Project\ProjectRouanet\Business\ProjectRouanetBusiness;
use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetBusinessInterface;
use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetRepositoryInterface;
use App\Domain\Project\ProjectRouanet\Repositories\ProjectRouanetRepository;

class ProjectRouanetProvider extends ServiceProviderAbstract
{
    public array $bindings = [
        ProjectRouanetRepositoryInterface::class => ProjectRouanetRepository::class,
    ];

    public function getBusinessAbstract(): string
    {
        return ProjectRouanetBusinessInterface::class;
    }

    public function getBusinessConcrete(): string
    {
        return ProjectRouanetBusiness::class;
    }
}

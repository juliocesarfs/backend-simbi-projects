<?php

namespace App\Domain\Project\ProjectRouanet\DTO;

class ListProjectRouanetDTO
{
    public string|null $page;
    public string|null $limit;

    public function __construct(string|null $page, string|null $limit)
    {
        $this->page = $page;
        $this->limit = $limit;
    }
}

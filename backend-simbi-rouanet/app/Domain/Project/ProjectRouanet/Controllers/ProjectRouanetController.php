<?php

namespace App\Domain\Project\ProjectRouanet\Controllers;

use App\Domain\Project\ProjectRouanet\Contracts\ProjectRouanetBusinessInterface;
use App\Domain\Project\ProjectRouanet\DTO\ListProjectRouanetDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Attributes as OA;

#[
    OA\Info(version: "1.0.0", description: "Projetos Rouanet API", title: "Projetos Rouanet API Documentation"),
    OA\Server(url: 'http://localhost:8080', description: "server local"),
]
class ProjectRouanetController extends Controller
{
    public function __construct(private ProjectRouanetBusinessInterface $projectRouanetBusiness)
    {
    }

    #[OA\Get(
        path: "/api/project/rouanet",
        summary: "Listar todos os Projetos Rouanet com paginação opcional",
        parameters: [
            new OA\Parameter(
                name: "page",
                in: "query",
                required: false,
                description: "número da página",
                schema: new OA\Schema(type: "integer", default: 0)
            ),
            new OA\Parameter(
                name: "limit",
                in: "query",
                required: false,
                description: "itens por página",
                schema: new OA\Schema(type: "integer", nullable: true)
            ),
        ],
        responses: [
            new OA\Response(response: Response::HTTP_OK, description: "Projetos retornados com sucesso"),
            new OA\Response(response: Response::HTTP_BAD_REQUEST, description: "Parametros inválidos"),
            new OA\Response(response: Response::HTTP_INTERNAL_SERVER_ERROR, description: "Erro interno no servidor"),
        ]
    )]
    public function list(Request $request): JsonResponse
    {

        $listProjectRouanetDTO = new ListProjectRouanetDTO(
            $request->query->get('page'),
            $request->query->get('limit'),
        );


        $projects = $this->projectRouanetBusiness->list($listProjectRouanetDTO);
        return response()->json($projects, Response::HTTP_OK);
    }
}

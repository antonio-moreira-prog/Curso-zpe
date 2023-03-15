<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculo\CriarCurriculoRequest;
use App\Models\Curriculo\Curriculo;

class ListarCurriculosController extends Controller
{
    private $curriculos;
    public function __construct(Curriculo $curriculos)
    {
        $this->curriculos = $curriculos;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(CriarCurriculoRequest $request)
    {
        $curriculos = $this->curriculos->get();
        return response() -> json ($curriculos, 200);
    }
}

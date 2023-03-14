<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Curriculo\Curriculo;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class CriarCurriculoController extends Controller
{
    private $curriculo;
    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $curriculo = $this->curriculo->create($request->only([
                'first_name',
                'last_name',
                'email',
                'confirmado'
            ]));
        }catch (Exception $e){
            return response() -> json($e ->getMessage());
        }
        return $request->all();
    }
}

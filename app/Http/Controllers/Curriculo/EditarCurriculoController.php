<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculo\EditarCurriculoRequest;
use App\Models\Curriculo\Curriculo;
use Illuminate\Http\Request;

class EditarCurriculoController extends Controller
{
    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(EditarCurriculoRequest $request, $id)
    {
        try {
            $curriculo = $this->curriculo->findOrFail($id);
        $curriculo->update($request->only([
            'first_name',
            'last_name',
            'email',
            'confirmado'
        ]));
        return response() -> json($curriculo, 200);
    }catch (Exception $e){
        return response() -> json($e ->getMessage());
    }
        return $request->all();
    }
}

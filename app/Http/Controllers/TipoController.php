<?php

namespace App\Http\Controllers;

use App\DataTables\TipoDataTable;
use App\Http\Requests\CreateTipoRequest;
use App\Http\Requests\UpdateTipoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Tipos')->only('show');
        $this->middleware('permission:Crear Tipos')->only(['create','store']);
        $this->middleware('permission:Editar Tipos')->only(['edit','update']);
        $this->middleware('permission:Eliminar Tipos')->only('destroy');
    }
    /**
     * Display a listing of the Tipo.
     */
    public function index(TipoDataTable $tipoDataTable)
    {
    return $tipoDataTable->render('tipos.index');
    }


    /**
     * Show the form for creating a new Tipo.
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created Tipo in storage.
     */
    public function store(CreateTipoRequest $request)
    {
        $input = $request->all();

        /** @var Tipo $tipo */
        $tipo = Tipo::create($input);

        flash()->success('Tipo guardado.');

        return redirect(route('tipos.index'));
    }

    /**
     * Display the specified Tipo.
     */
    public function show($id)
    {
        /** @var Tipo $tipo */
        $tipo = Tipo::find($id);

        if (empty($tipo)) {
            flash()->error('Tipo no encontrado');

            return redirect(route('tipos.index'));
        }

        return view('tipos.show')->with('tipo', $tipo);
    }

    /**
     * Show the form for editing the specified Tipo.
     */
    public function edit($id)
    {
        /** @var Tipo $tipo */
        $tipo = Tipo::find($id);

        if (empty($tipo)) {
            flash()->error('Tipo no encontrado');

            return redirect(route('tipos.index'));
        }

        return view('tipos.edit')->with('tipo', $tipo);
    }

    /**
     * Update the specified Tipo in storage.
     */
    public function update($id, UpdateTipoRequest $request)
    {
        /** @var Tipo $tipo */
        $tipo = Tipo::find($id);

        if (empty($tipo)) {
            flash()->error('Tipo no encontrado');

            return redirect(route('tipos.index'));
        }

        $tipo->fill($request->all());
        $tipo->save();

        flash()->success('Tipo actualizado.');

        return redirect(route('tipos.index'));
    }

    /**
     * Remove the specified Tipo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Tipo $tipo */
        $tipo = Tipo::find($id);

        if (empty($tipo)) {
            flash()->error('Tipo no encontrado');

            return redirect(route('tipos.index'));
        }

        $tipo->delete();

        flash()->success('Tipo eliminado.');

        return redirect(route('tipos.index'));
    }
}

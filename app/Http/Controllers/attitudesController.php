<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAttitudeRequest;
use App\Http\Requests\UpdateAttitudeRequest;
use App\Models\Attitude;
use Illuminate\Support\Facades\DB;

class attitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attitudes = Attitude::all();
        return view('attitudes.index', ['attitudes'=> $attitudes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttitudeRequest $request)
    {
        try {
            DB::beginTransaction();
            Attitude::create([
                'name' => $request->validated()['nombre']
            ]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al guardar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attitudes.index')->with('success', 'Registro creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attitude $attitude)
    {
        return view('attitudes.edit',['attitude'=> $attitude]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttitudeRequest $request, Attitude $attitude)
    {
        try {
            DB::beginTransaction();
            $attitude->update(['name' => $request->validated()['nombre']]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al actualizar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attitudes.index')->with('success','Registro editado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attitude $attitude)
    {
        try {
            DB::beginTransaction();
            $attitude->delete();
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al eliminar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attitudes.index')->with('success','Registro eliminado correctamente');
    }
}

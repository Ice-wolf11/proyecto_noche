<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateAttendance_typesRequest;
use App\Http\Requests\StoreAttendance_typesRequest;
use App\Models\Attendance_type;
use Illuminate\Support\Facades\DB;
class attendance_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance_types = Attendance_type::all();
        return view('attendance_types.index', ['attendance_types'=> $attendance_types]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttendance_typesRequest $request)
    {
        //dd($request);
        try {
            DB::beginTransaction();
            Attendance_type::create([
                'name' => $request->validated()['nombre']
            ]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al guardar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attendance_types.index')->with('success', 'Registro creado correctamente');
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
    public function edit(Attendance_type $attendance_type)
    {
        return view('attendance_types.edit',['attendance_type'=> $attendance_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendance_typesRequest $request, Attendance_type $attendance_type)
    {
        try {
            DB::beginTransaction();
            $attendance_type->update(['name' => $request->validated()['nombre']]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al actualizar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attendance_types.index')->with('success','Registro editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance_type $attendance_type)
    {
        try {
            DB::beginTransaction();
            $attendance_type->delete();
            DB::commit();
        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Error al eliminar el registro: ' . $e->getMessage()]);
        }
        return redirect()->route('attendance_types.index')->with('success','Registro eliminado correctamente');
    }
}

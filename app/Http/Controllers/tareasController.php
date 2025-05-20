<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tareasModel;
use Validator;

class tareasController extends Controller
{
    public function index()
    {
        $tareas = tareasModel::all();

        $data = [
            'tareas' => $tareas,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function one($id)
    {
        $tarea = tareasModel::find($id);

        if (!$tarea) {
            $data = [
                'message' => 'No se encontro registro',
                'status' => 200
            ];

            return response()->json($data, 200);
        }

        $data = [
            'tareas' => $tarea,
            'status' => 200
        ];

        return response()->json($data, 200);

    }

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'departamento' => 'required',
            'cantidad' => 'required'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'No se pudo crear el registro',
                'errors' => $validator->errors(),
                'status' => 500
            ];
            return response()->json($data, 200);
        }

        $tarea = tareasModel::create([
            'nombreTarea' => $request->nombre,
            'idDepartamentoFK' => $request->departamento,
            'cantidadPersonal' => $request->cantidad,
        ]);

        if (!$tarea) {
            $data = [
                'message' => 'No se pudo crear el registro',
                'status' => 500
            ];

            return response()->json($data, 500);
        }

        $data = [
            'tareas' => $tarea,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function patch(Request $request, $id)
    {
        $tarea = tareasModel::find($id);

        if (!$tarea) {
            $data = [
                'message' => 'No se pudo encontrar el; registro a actualizar',
                'status' => 500
            ];

            return response()->json($data, 500);
        }

        if ($request->has('nombre')) {
            $tarea->nombreTarea = $request->nombre;
        }
        if ($request->has('departamento')) {
            $tarea->idDepartamentoFK = $request->departamento;
        }
        if ($request->has('cantidad')) {
            $tarea->cantidadPersonal = $request->cantidad;
        }

        $tarea->save();

        $data = [
            'message' => 'Actualizado correctamente',
            'tareas' => $tarea,
            'status' => 200
        ];

        return response()->json($data, 200);

    }

    public function delete($id)
    {
        $tarea = tareasModel::find($id);
        if (!$tarea) {
            $data = [
                'message' => 'No se encontro registro',
                'status' => 200
            ];

            return response()->json($data, 200);
        }

        $tarea->delete();

        $data = [
                'message' => 'Estudiante eliminado',
                'status' => 200
            ];

            return response()->json($data, 200);


    }
}

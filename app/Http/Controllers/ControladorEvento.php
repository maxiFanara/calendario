<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class ControladorEvento extends Controller
{
    public function verMes(){
        return view('mes');
    }

    public function verSemana(){
        return view('semana');
    }

    public function verDia(){
        return view('dia');
    }


    public function listar()
    {
        $eventos = Evento::all('id', 'titulo as title', 'inicio as start', 'fin as end');
        return response()->json($eventos);
    }

    public function crear(Request $solicitud)
    {
        $evento = Evento::create($solicitud->all());
        $evento->inicio = $solicitud->inicio . 'T' . $solicitud->horaInicio;
        $evento->fin = $solicitud->fin . 'T' . $solicitud->horaFin;
        $evento->save();
        return view('mes');
    }

    public function actualizar(Request $solicitud, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->titulo = $solicitud->titulo;
        $evento->descripcion = $solicitud->descripcion;
        $evento->inicio = $solicitud->inicio . 'T' . $solicitud->horaInicio;
        $evento->fin = $solicitud->fin . 'T' . $solicitud->horaFin;
        $evento->save();
        return view('mes');
    }

    public function eliminar($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return view('mes');
    }

    public function nuevoEvento(){
        return view('calendario');
    }

    public function verEvento($id){
        $evento = Evento::findOrFail($id);
        $inicio = substr($evento->inicio, 0,10);
        $fin = substr($evento->fin, 0,10);
        $hInicio = substr($evento->inicio, 11,5);
        $hFin = substr($evento->fin, 11,5);
        return view('calendario', compact('evento', 'inicio', 'fin', 'hInicio', 'hFin'));
    }
}


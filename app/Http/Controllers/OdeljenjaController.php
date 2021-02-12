<?php

namespace App\Http\Controllers;

use App\Models\Lekar;
use App\Models\Odeljenje;
use Illuminate\Http\Request;

class OdeljenjaController extends Controller
{
    public function all()
    {
        $odeljenja = Odeljenje::all();

        return view('bolnica', [
            'odeljenja' => $odeljenja
        ]);

    }

    public function view($id)
    {
        $odeljenje = Odeljenje::findOrFail($id);
        $lekari = Lekar::all();
        $niz = [];
        foreach ($lekari as $lekar) {
            if ($lekar->odeljenje_id == $id) {
                $niz[count($niz)] = $lekar;
            }
        }
        $odeljenje->lekari = $niz;
        return view('odeljenje', ['odeljenje' => $odeljenje]);

    }

    public function save(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'naziv' => 'required|min:2',
            'oblast' => 'required|min:2',
            'opis' => 'required|min:2',
            'url' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Sva polja su obavezna"], 400);
        }
        $odeljenje = Odeljenje::create($request->all());
        return response()->json($odeljenje, 201);
    }

    public function delete(Request $request, $id)
    {
        $odeljenje = Odeljenje::find($id);

        if (is_null($odeljenje)) {
            return response()->json(["message" => "Ne postoji odeljenje"], 404);
        }

        $odeljenje->delete();
        return response()->json(null, 204);
    }

    public function getAll()
    {
        $odeljenja = Odeljenje::all();
        $lekari = Lekar::all();
        foreach ($odeljenja as $odeljenje) {
            $niz = [];
            foreach ($lekari as $lekar) {
                if ($lekar->odeljenje_id == $odeljenje->id) {
                    $niz[count($niz)] = $lekar;
                }
            }

            $odeljenje->lekari = $niz;
        }

        return response()->json($odeljenja, 200);
    }

    public function getById($id)
    {
        $odeljenje=Odeljenje::find($id);
        $lekari = Lekar::all();
        if (is_null($odeljenje)) {
            return response()->json(["message" => "Odeljenje doesn't exist"], 404);
        }
        $niz = [];
        foreach ($lekari as $lekar) {
            if ($lekar->odeljenje_id == $id) {
                $niz[count($niz)] = $lekar;
            }
        }

        $odeljenje->lekari = $niz;
        return response()->json($odeljenje,200);
    }
}

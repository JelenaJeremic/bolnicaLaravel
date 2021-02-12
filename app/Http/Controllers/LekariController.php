<?php

namespace App\Http\Controllers;

use App\Models\Lekar;
use App\Models\Zakazivanje;
use Illuminate\Http\Request;

class LekariController extends Controller
{

    public function view($id){

        $pieces = explode("/", url()->current());
        $lekar= Lekar::findOrFail($pieces[count($pieces)-1]);
        return view('lekar',['lekar'=>$lekar]);

    }
    public function getAll(){
        $lekari=Lekar::all();
        $zakazivanja=Zakazivanje::all();
        foreach ($lekari as $lekar) {
            $niz=[];
            foreach ($zakazivanja as $zakazivanje) {
                if ($zakazivanje->lekar_id == $lekar->id){
                    $niz[count($niz)]=$zakazivanje;
                }
            }

            $lekar->zakazivanja=$niz;
        }

        return response()->json($lekari,200);

    }
    public function getById($id){
        $lekar=Lekar::find($id);
        $zakazivanja=Zakazivanje::all();
        if(is_null($lekar)){
            return response()->json(["message"=>"Ne postoji lekar"],404);
        }
        $niz=[];
        foreach ($zakazivanja as $zakazivanje) {
            if ($zakazivanje->lekar_id == $id){
                $niz[count($niz)]=$zakazivanje;
            }
        }

        $lekar->zakazivanja=$niz;

        return response()->json($lekar,200);
    }
    public function save(Request $request){

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'ime'=>'required|min:2',
            'prezime'=>'required|min:2',
            'zvanje'=>'required|min:2',
            'biografija'=>'required|min:2',
            'iskustvo'=>'required|min:2',
            'specijalnost'=>'required|min:2',
            'obrazovanje'=>'required|min:2',
            'slika'=>'required|min:2',
            'odeljenje_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $lekar= Lekar::create($request->all());
        return response()->json($lekar, 201);
    }
    public function delete(Request $request, $id){
        $lekar= Lekar::find($id);

        if(is_null($lekar)){
            return response()->json(["message"=>"Ne postoji lekar"],404);
        }
        $lekar->delete();
        return response()->json(null,204);
    }
}

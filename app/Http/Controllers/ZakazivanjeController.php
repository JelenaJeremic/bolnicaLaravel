<?php

namespace App\Http\Controllers;

use App\Models\Zakazivanje;
use Illuminate\Http\Request;

class ZakazivanjeController extends Controller
{
    public function create(Request $request){
        $zakazivanje= new Zakazivanje();
        $zakazivanje->ime=$request->ime;
        $zakazivanje->prezime=$request->prezime;
        $zakazivanje->opis_problema=$request->opis_problema;
        $zakazivanje->datum=$request->datum;
        $zakazivanje->lekar_id=$request->lekar_id;
        $zakazivanje->save();
        return redirect('/'.$request->id);
    }
    public function getAll(){
        return response()->json(Zakazivanje::all(),200);

    }
    public function getById($id){
        $zakazivanje=Zakazivanje::find($id);
        if(is_null($zakazivanje)){
            return response()->json(["message"=>"Zakazivanje ne postoji"],404);
        }
        return response()->json($zakazivanje,200);
    }
    public function save(Request $request){

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'ime'=>'required|min:2',
            'prezime'=>'required|min:2',
            'opis_problema'=>'required',
            'datum'=>'required',
            'lekar_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna "],400);
        }
        $zakazivanje= Zakazivanje::create($request->all());
        return response()->json($zakazivanje, 201);
    }
    public function delete(Request $request, $id){
        $zakazivanje= Zakazivanje::find($id);

        if(is_null($zakazivanje)){
            return response()->json(["message"=>"Zakazivanje ne postoji"],404);
        }
        $zakazivanje->delete();
        return response()->json(null,204);
    }
}

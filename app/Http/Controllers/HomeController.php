<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Data::all();
        //$data = Data::where('cedula','1038409862');
        //$users = User::whereIn('id', array(1, 2, 3))->get();
        $data = Data::whereIn('cedula',['1079932480'])->get();
        //$data = Data::whereExists('cedula','1079932480')->get();
        if(!$data->isEmpty()){
            dd($data[0]->nombre);
        }
        else{
            dd($data);
        }
        return view('home');
    }
    public function consultar_cedula(Request $request){
        dd($request);
        $data = Data::whereIn('cedula',[$request->documento])->get();
        if(!$data->isEmpty()){
            return $data[0];
        }
        else{
            return 'El documento' . $request->documento . 'no esta autorizado';
        }
    }
    public function consultar_nit(Request $request){
        $data = Data::whereIn('nit',[$request->nit])->get();
        if(!$data->isEmpty()){
            return $data[0];
        }
        else{
            return 'El documento' . $request->nit . 'no esta autorizado';
        }
    }
}

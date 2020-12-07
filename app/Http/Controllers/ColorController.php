<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public $rules = [
        'color' => ['required','string']
    ];

    public function index(Request $request)
    {

        $rows = Color::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.colores.index', compact('rows'));
    }

    public function edit(Color $model){

        return view('catalogos.colores.edit',compact('model'));
    }

    public function add(){
        return view('catalogos.colores.add');
    }

    public function store(Request $request){
        $campos=$this->validate($request,$this->rules);
        $model=Color::query()->create($campos);
        return redirect()->route('color');
    }

    public function update(Color $model,Request $request){
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('color');
    }

    public function destroy(Color $model){
        $model->delete();
        return redirect()->route('color');
    }
   
}

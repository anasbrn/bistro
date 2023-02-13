<?php

namespace App\Http\Controllers;

use App\Models\Plates;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function index() {
        return view('Plates', [
            'Plates' => Plates::all()
        ]);
    }

    public function create() {
        return view('Plate.create');
    }

    public function store(Request $request) {
        // return $request->input('category');
        $plate = new Plates() ;

        $plate->plateName = $request->input('name');
        $plate->description = $request->input('description');
        $plate->category = $request->input('category');
        $plate->image = $request->input('img');

        $plate->save();
        return redirect('plates') ;
    }

    public function edit($id) {
        // $plate = Plates::find($id);

        return view('plate.edit', ['plate' => Plates::find($id)]);
    }

    public function update(Request $request, $id) {
        $plate = Plates::find($id);

        $plate->plateName = $request->input('name');
        $plate->description = $request->input('description');
        $plate->category = $request->input('category');
        $plate->image = $request->input('img');

        $plate->save() ;
        return redirect('plates') ;

    }

    public function destroy(Request $request, $id) {
        $plate = Plates::find($id);

        $plate->delete();
        return redirect('plates') ;
    }
    
}

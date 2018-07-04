<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orbituary;
use App\Http\Resources\OrbituaryResource;


class OrbituaryController extends Controller
{
    
    public function index()
    {
      return OrbituaryResource::collection(Orbituary::paginate(10));
    }


    public function store(Request $request)
    {
    	  $orbituary = $request->isMethod('put') ? Orbituary::findOrFail($request->id) : new Orbituary;
	     
	      $orbituary->id = $request->input('id');
	      $orbituary->name = $request->input('name');
          $orbituary->date_of_burial = $request->input('date_of_burial');
	      $orbituary->details = $request->input('details');
	      $orbituary->photo = $request->input('photo');
          $orbituary->map_photo = $request->input('map_photo');
          $orbituary->euology_photo = $request->input('euology_photo');
	      
	      if($orbituary->save()) {

	      return new OrbituaryResource($orbituary);

	      }
    }

    public function show($id)
    {
        $orbituary = Orbituary::findOrfail($id);
        return new OrbituaryResource($orbituary);
    }


    public function destroy($id)
    {
    	$orbituary = Orbituary::findOrfail($id);
    	if($orbituary->delete()){
    		return new OrbituaryResource($orbituary);
    	}
    }
    
}

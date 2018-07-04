<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memorial;
use App\Http\Resources\MemorialResource;


class MemorialController extends Controller
{
    
    public function index()
    {
      return MemorialResource::collection(Memorial::paginate(10));
    }


    public function store(Request $request)
    {
    	  $memorial = $request->isMethod('put') ? Memorial::findOrFail($request->id) : new Memorial;
	     
	      $memorial->id = $request->input('id');
	      $memorial->name = $request->input('name');
          $memorial->date_of_death = $request->input('date_of_death');
	      $memorial->details = $request->input('details');
	      $memorial->photo = $request->input('photo');
	      
	      if($memorial->save()) {

	      return new MemorialResource($memorial);

	      }
    }

    public function show($id)
    {
        $memorial = Memorial::findOrfail($id);
        return new MemorialResource($memorial);
    }


    public function destroy($id)
    {
    	$memorial = Memorial::findOrfail($id);
    	if($memorial->delete()){
    		return new MemorialResource($memorial);
    	}
    }
    
}

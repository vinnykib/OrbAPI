<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appreciation;
use App\Http\Resources\AppreciationResource;


class AppreciationController extends Controller
{
    
    public function index()
    {
      return AppreciationResource::collection(Appreciation::paginate(10));
    }


    public function store(Request $request)
    {
    	  $appreciation = $request->isMethod('put') ? Appreciation::findOrFail($request->id) : new Appreciation;
	     
	      $appreciation->id = $request->input('id');
	      $appreciation->name = $request->input('name');
	      $appreciation->details = $request->input('details');
	      //$appreciation->photo = $request->input('photo');

          if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $destinationPath = public_path('/images');
            $imagePath = $destinationPath. "/".  $photoname;
            $photo->move($destinationPath, $photoname);
            $appreciation->photo = $photoname;
          }
	      
	      if($appreciation->save()) {

	      return new AppreciationResource($appreciation);

	      }
    }

    public function show($id)
    {
        $appreciation = Appreciation::findOrfail($id);
        return new AppreciationResource($appreciation);
    }


    public function destroy($id)
    {
    	$appreciation = Appreciation::findOrfail($id);
    	if($appreciation->delete()){
    		return new AppreciationResource($appreciation);
    	}
    }
    
}

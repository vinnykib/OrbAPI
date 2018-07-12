<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appreciation;
use App\Http\Resources\AppreciationResource;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AppreciationController extends Controller
{
    
    public function index()
    {
      return AppreciationResource::collection(Appreciation::paginate(10));
    }


    public function store(Request $request)
    {
        $photos = $request->file('photo');
        $extension = $photos->getClientOriginalExtension();
        Storage::disk('public')->put($photos->getFilename().'.'.$extension,  File::get($photos));

    	  $appreciation = $request->isMethod('put') ? Appreciation::findOrFail($request->id) : new Appreciation;
	     
	      $appreciation->id = $request->input('id');
	      $appreciation->name = $request->input('name');
	      $appreciation->details = $request->input('details');
	      //$appreciation->photo = $request->input('photo');

          $appreciation->photo = $photos->getFilename().'.'.$extension;

          
	      
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

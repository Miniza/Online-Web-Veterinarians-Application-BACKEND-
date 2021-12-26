<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pets;

class PetsController extends Controller
{
    public function index(){
        $pets = Pets::All();
        return response()->json([
            'status' => 200,
            'pets' =>$pets,
        ]);
    }
    public function store(Request $request)
    {
        $pets = new Pets;
        $pets->pname = $request->input('pname');
        $pets->pid = $request->input('pid');
        $pets->ptype = $request->input('ptype');
        $pets->pbreed = $request->input('pbreed');
        $pets->powner = $request->input('powner');
        $pets->oidnumber = $request->input('oidnumber');
        $pets->pdob = $request->input('pdob');
        $pets->save();

        return response()->json([
            'status' => 200,
            'message' => 'owner saved successfully',
        ]);
    }
    public function destroy($id){
        $pets = Pets::find($id);
        $pets->delete();

        return response()->json([
            'status' => 200,
            'message' => 'owner Deleted successfully',
        ]);

    }
}

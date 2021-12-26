<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::All();
        return response()->json([
            'status' => 200,
            'owners' =>$owners,
        ]);
    }
    public function store(Request $request)
    {
        $owner = new Owner;
        $owner->oname = $request->input('oname');
        $owner->osurname = $request->input('osurname');
        $owner->oidnumber = $request->input('oidnumber');
        $owner->ocellnum = $request->input('ocellnum');
        $owner->omail = $request->input('omail');
        $owner->opostal = $request->input('opostal');
        $owner->save();

        return response()->json([
            'status' => 200,
            'message' => 'owner saved successfully',
        ]);
    }
    public function destroy($id){
        $owner = Owner::find($id);
        $owner->delete();

        return response()->json([
            'status' => 200,
            'message' => 'owner Deleted successfully',
        ]);

    }
}

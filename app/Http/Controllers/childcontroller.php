<?php

namespace App\Http\Controllers;

use App\child;
use Illuminate\Http\Request;

class childcontroller extends Controller
{
    public function index(){
        $prog=child::paginate(10);

        return view('admin.child.child',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [


                'age'=>'required',



            ]);
        $test=new child();

        $test->age=$request->age;

        if($test->save()){
            session()->flash("success","Success Adding");
            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'age'=>'required',

            ]);
        $test=child::find($id);
        $test->age=$request->age;




        if($test->save()){


            session()->flash("success","Success Editing");
            return back();
        }

    }
    function delete($id){
        $test=child::find($id);
        $test->delete();
        return back();

    }
}

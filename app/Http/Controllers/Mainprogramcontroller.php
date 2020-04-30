<?php

namespace App\Http\Controllers;

use App\program;
use Alert;
use Illuminate\Http\Request;

class Mainprogramcontroller extends Controller
{
    public function index(){
        $prog=program::all();

        return view('admin.program.main_program',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',


            ]);
        $test=new program();

        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
         if ($request->file('image') != null) {
            $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img', $filname1);
            $test->img = $filname1;
        }

        if($test->save()){

            session()->flash("success","Success Adding");
            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',

            ]);
        $test=program::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
          if ($request->file('image') != null) {
            $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img', $filname1);
            $test->img = $filname1;
        }




        if($test->save()){

            session()->flash("success","Success Editing");

            return back();
        }

    }
    function delete($id){
        $test=program::find($id);
        $test->delete();
        return back();

    }
}

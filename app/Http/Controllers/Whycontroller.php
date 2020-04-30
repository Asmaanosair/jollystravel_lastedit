<?php

namespace App\Http\Controllers;

use App\why;
use Illuminate\Http\Request;

class Whycontroller extends Controller
{
    public function index(){
        $prog=why::all();

        return view('admin.whychoos.whychoose',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                'icon'=>'required',



            ]);
        $test=new why();

        $test->title_en=$request->name_en;
        $test->title_fr=$request->name_fr;
        $test->title_de=$request->name_de;
        $test->title_it=$request->name_it;
        $test->title_es=$request->name_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;
        $test->icon=$request->icon;

        if($test->save()){
            session()->flash("success","Success ");
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
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                'icon'=>'required',


            ]);


        $test=why::find($id);
        $test->title_en=$request->name_en;
        $test->title_fr=$request->name_fr;
        $test->title_de=$request->name_de;
        $test->title_it=$request->name_it;
        $test->title_es=$request->name_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;
        $test->icon=$request->icon;





        if($test->save()){


            session()->flash("success","Success Editing");
            return back();
        }

    }
    function delete($id){
        $test=why::find($id);
        $test->delete();
        return back();

    }
}

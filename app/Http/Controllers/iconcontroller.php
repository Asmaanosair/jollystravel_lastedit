<?php

namespace App\Http\Controllers;

use App\icon;
use Illuminate\Http\Request;

class iconcontroller extends Controller
{
    public function index()
    {
        return view('admin.icon.icon');
    }


    public function show()
    {
        $icon=icon::all();
        return view('admin.icon.show',['icon'=>$icon]);
    }
    function add(Request $request)
    {

        $this->validate($request,
            [

                'name_en' => 'required',
                'name_fr' => 'required',
                'name_de' => 'required',
                'name_es' => 'required',
                'name_it' => 'required',
                'image' => 'required',


            ]);
        $test = new icon();
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;
         if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->code=$filname1;
        }


        if ($test->save()) {
            session()->flash("success","Success Adding");


            return redirect('gs_admin/show_icon');
        }

    }



    function update(Request $request ,$id)
    {

        $this->validate($request,
            [

                'name_en' => 'required',
                'name_fr' => 'required',
                'name_de' => 'required',
                'name_es' => 'required',
                'name_it' => 'required',



            ]);
        $test =icon::find($id);
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->code=$filname1;
        }


        if ($test->save()) {
            session()->flash("success","Success Editing");

            return back();
        }

    }

    function delete($id)
    {
        $test = icon::find($id);
        $test->delete();
        return back();


    }
}

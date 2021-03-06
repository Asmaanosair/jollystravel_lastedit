<?php

namespace App\Http\Controllers;

use App\agb;
use Illuminate\Http\Request;

class agbcontroller extends Controller
{

    public function index($id)
    {
        $pro = agb::find($id);

        return view('admin.agb.agb', ['pro' => $pro]);
    }
    function update(Request $request, $id)
    {

        $this->validate($request,
            [

                'des_en' => 'required',
                'des_fr' => 'required',
                'des_de' => 'required',
                'des_es' => 'required',
                'des_it' => 'required',


            ]);
        $test = agb::find($id);

        $test->des_en = $request->des_en;
        $test->des_fr = $request->des_fr;
        $test->des_de = $request->des_de;
        $test->des_it = $request->des_it;
        $test->des_es = $request->des_es;


        if ($test->save()) {
            session()->flash("success","Success Editing");

            return back();

        }


    }
}

<?php

namespace App\Http\Controllers;

use App\faq2;
use Illuminate\Http\Request;

class Faqcontroller extends Controller
{
    public function index($id)
    {
        $pro = faq2::find($id);

        return view('admin.faq.faq', ['pro' => $pro]);
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
        $test = faq2::find($id);

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

<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'v1' => 'required|in:1,0',
            'v2' => 'required|in:1,0',
            'v3' => 'required|in:1,0',
            'v4' => 'required|in:1,0',
            'v5' => 'required|in:1,0',
            'v6' => 'required|in:1,0',
            'v7' => 'required|in:1,0',
            'v8' => 'required|in:1,0',
            'v9' => 'required|in:1,0',
            'v10' => 'required|in:1,0',
            'v11' => 'required|in:1,0',
            'v12' => 'required|in:1,0',
            'v13' => 'required|in:1,0',
            'v14' => 'required|in:1,0',
            'v15' => 'required|in:1,0',
            'v16' => 'required|in:1,0',
            'v17' => 'required|in:1,0',
            'v18' => 'required|in:1,0',
            'v19' => 'required|in:1,0',
            'v20' => 'required|in:1,0',
            'v21' => 'required|in:1,0',
        ]);

        $v1 = $request->v1;
        $v2 = $request->v2;
        $v3 = $request->v3;
        $v4 = $request->v4;
        $v5 = $request->v5;
        $v6 = $request->v6;
        $v7 = $request->v7;
        $v8 = $request->v8;
        $v9 = $request->v9;
        $v10 = $request->v10;
        $v11 = $request->v11;
        $v12 = $request->v12;
        $v13 = $request->v13;
        $v14 = $request->v14;
        $v15 = $request->v15;
        $v16 = $request->v16;
        $v17 = $request->v17;
        $v18 = $request->v18;
        $v19 = $request->v19;
        $v20 = $request->v20;
        $v21 = $request->v21;

        $v = $v1 + $v2 + $v3 + $v4 + $v5 + $v6 + $v7 + $v8 + $v9 + $v10 + $v11 + $v12 + $v13 + $v14 + $v15 + $v16 + $v17 + $v18 + $v19 + $v20 + $v21;

        $form = new Form();

        $form->ya=$v;
        $form->tidak=21-$v;

        if($v<8){
            $form->hasil="Rendah";
        }
        elseif($v>7 & $v<15){
            $form->hasil="Sedang";
        }
        elseif($v>14){
            $form->hasil="Tinggi";
        }
        $form->save();
        return view('/form/hasil',compact('form'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}

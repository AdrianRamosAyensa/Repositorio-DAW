<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::All();

        return view('study.index', ['studies' => $studies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('study.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $study = Study::Create($request->all());

        return redirect('/studies');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {


        return view('study.show', 
        [
            'study' => $study
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('study.edit', 
        [
            'study' => $study
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        $study->fill($request->all());

        $study->save();
        return redirect('/studies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

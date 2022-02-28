<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Study;

class StudyController extends Controller
{
    public function index(){
        $studies = Study::All();
        return $studies;
    }

    public function show($id){
        $study = Study::find($id);
        return $study;
    }

}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Moyekoli;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function tinda(){
        $student = Moyekoli::orderBy('id', 'DESC')->get();

        return response()->json($student);
    }
}

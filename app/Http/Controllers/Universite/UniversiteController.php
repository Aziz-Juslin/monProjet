<?php

namespace App\Http\Controllers\Universite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Info_ecole;
use App\Models\Info_unive;
use App\Models\Gestionnaire;

class UniversiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $infoUnive = Info_unive::where('user_id', Auth::user()->id)->get();
        return view(!$infoUnive == '' ?'universite.unive_ebandeli':'universite.index');
    }
}

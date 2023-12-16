<?php

namespace App\Http\Controllers;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\Auth;

class HomeController extends KamataNioso
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
    
    public function index()
    {
        return view('home', $this->Kamata($this->getUser(), $this->id));
    }

    
}

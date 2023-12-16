<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image_ecole;
use App\Models\Info_ecole;
use App\Models\Moyekoli;
use Illuminate\Support\Facades\DB;

class PubliqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ecoles(){
        return DB::table('image_ecoles')
                 ->join('users', 'image_ecoles.user_id', 'users.id')
                 ->orderBy('users.id', 'DESC');
    }
    public function index()
    {
        $ecoles = $this->ecoles()->get();
        $ecolesRecentes = $this->ecoles()->paginate(4);
        $categorieEcole = info_ecole::select('regime')->DISTINCT('regime')->get();
        return view('welcome', compact(
            'ecoles', 
            'ecolesRecentes',
            'categorieEcole',
        ));
    }

    public function ecole()
    {
        $ecoles = $this->ecoles()->get();
        $ecolesRecentes = $this->ecoles()->paginate(4);
        $categorieEcole = info_ecole::select('regime')->DISTINCT('regime')->get();
        return view('auth.ecole', compact(
            'ecoles', 
            'ecolesRecentes',
            'categorieEcole',
        ));
    }

    public function contact()
    {
        return view('auth.contact');
    }

    public function apropo()
    {
        return view('auth.apropo');
    }

    public function eleve()
    {
        $eleves = DB::table('kelasis')->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')->get();
        return view('auth.eleve', compact('eleves'));
    }

    public function voir_ecole($id)
    { 
        $ImageEcoles = DB::table('image_ecoles')
                    ->join('users', 'image_ecoles.user_id', 'users.id')
                    ->where('user_id', $id)->get();
        $infoEcoles = DB::table('info_ecoles')
                    ->join('users', 'info_ecoles.user_id', 'users.id')
                    ->where('user_id', $id)->get();
        return view('ecole.public.voir_ecole', compact(
            'ImageEcoles',
            'infoEcoles',
        ));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

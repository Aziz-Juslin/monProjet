<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\KamataNioso;
use App\Models\User;
use App\Models\Modalite;
use Carbon\Carbon;
use App\Models\Moyekoli;
use App\Models\Kelasi;
use App\Models\Frais;
use App\Models\Kumba;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ModaliteController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function modalité_frais(){
        return view('Finance.FraisScolaires.frais_scolaire', $this->Kamata($this->getUser(), $this->id));
    }

    public function modalite_fixe($slug){
        $cicle = $slug;
        return view('Finance.FraisScolaires.moda_maternelle', compact('cicle'), $this->Kamata($this->getUser(), $slug));
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
    public function store_modalite(Request $request)
    {
        $uso = Auth::user()->id;
        $use = User::find($uso);
        if(empty($request->input('franc')) && empty($request->input('dollar'))){
            Session()->flash('message','Vous devez entrer le montant !');
            return redirect()->back();
        }elseif(empty($request->input('annee'))){
            Session()->flash('message','Vous devez préciser année scolaire !');
            return redirect()->back();
        }
        elseif(! empty($request->input('franc')) && ! empty($request->input('dollar'))){
            Session()->flash('message',"Vous ne pouvez pas inserer  montants en Franc et Dollar");
            return redirect()->back();
        }
        else{
        $fina = new Modalite();
        $fina->classe = $request->input('classe');
        $fina->montant_franc = $request->input('franc');
        $fina->montant_dollar = $request->input('dollar');
        $fina->cycles = $request->input('cycle');
        $fina->annee_modalite = $request->input('annee');
        $use->modalite()->save($fina);
        Session()->flash('messages','Enregistrement est faite !');
        return redirect()->back();
        }
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

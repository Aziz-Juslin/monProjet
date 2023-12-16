<?php

namespace App\Http\Controllers\Ecole;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\gestionnaire;
use App\Models\Image_gestionnaire;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\Auth;

class GestionnaireController extends KamataNioso
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecole.gestionnaire',$this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_gestion(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'telephone' => 'required|string|min:10',
            'password' => 'required|string|min:6',
            'sexe' => 'required|string',
            'etat_civil' => 'required|string',
            'date_ne' => 'required|string',
            'qualification' => 'required|string',
            'role' => 'required|string',
            'photo_gestion' => 'required|file|mimes:jpg,jpeg,png,gif',
        ]);
        $gestion = new gestionnaire();
        $gestion->user_id = Auth::user()->id;
        $gestion->nom = ucfirst($request->name);
        $gestion->phone = ucfirst($request->telephone);
        $gestion->role = ucfirst($request->role);
        $gestion->sexe = ucfirst($request->sexe);
        $gestion->qualification = ucfirst($request->qualification);
        $gestion->etat_civil = ucfirst($request->etat_civil);
        $gestion->date_ne = ucfirst($request->date_ne);
        if($request->hasfile('photo_gestion')) {
        $file = $request->file('photo_gestion');
        $extension = $file->getClientOriginalExtension();
        $filename = time()  . '.'. $extension;
        $file->move('Dossier/images_gestionnaire/', $filename);
        $gestion->image = $filename;
        }
        $gestion->save();
        Session()->flash('messages', 'Enregistré');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     * //$foto->gestionnaire_id = $use;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ecole.show_gestionnaire', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('ecole.info_gestionnaire', $this->Kamata($this->getUser(), $this->id));
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

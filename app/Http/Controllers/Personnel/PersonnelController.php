<?php

namespace App\Http\Controllers\Personnel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Repository\KamataNioso;
use App\Models\User;
use App\Models\Personnel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonnelController extends KamataNioso
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personnel.personnel', $this->Kamata($this->getUser(), $this->id));
    }

    public function personnel()
    {
        return view('personnel.persone_principal', $this->Kamata($this->getUser(), $this->id));
    }

    public function personnel_fictif(){
        return view('personnel.personnel_fictif', $this->Kamata($this->getUser(), $this->id));
    }

    public function personnel_abandon(){
        return view('personnel.personnel_abandon', $this->Kamata($this->getUser(), $this->id));
    }

    public function personnel_photo($id){
        return view('personnel.photo_perso', $this->Kamata($this->getUser(), $id));
    }

    public function personnel_info($id){
        return view('personnel.info_perso', $this->Kamata($this->getUser(), $id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnel.ajout_personnel', $this->Kamata($this->getUser(), $this->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'post' => 'required|string',
            'prenom' => 'required|string',
            'telephone' => 'required|string|min:10',
            'date_ne' => 'required|string',
            'sexe' => 'required|string',
            'etat' => 'required|string',
            'adresse' => 'required|string',
            'fonction' => 'required|string',
            'qualification' => 'required|string',
            'photo_personnel' => 'file|mimes:jpeg,png,gif,jpg|max:2048',
        ]);
            $base = new Personnel();
               $base->nom = ucfirst($request->input('nom'));
               $base->post_nom = ucfirst($request->input('post'));
               $base->prenom = ucfirst($request->input('prenom'));
               $base->sexe = ucfirst($request->input('sexe'));
               $base->adresse = ucfirst($request->input('adresse'));
               $base->date_ne = $request->input('date_ne');
               $base->fonction = $request->input('fonction');
               $base->qualification = $request->input('qualification');
               $base->etat_civil = $request->input('etat');
               $base->phone = $request->input('telephone');
               $base->user_id = Auth::user()->id;
               $base->annee_scolaire = AnneeSco();
                if ($request->hasfile('photo_personnel')) {
                    $file = $request->file('photo_personnel');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time()  . '.'. $extension;
                    $file->move('uploads/image_personnel/', $filename);
                    $base->photo_personnel = $filename;
                }
                $base->save();
            
        Session()->flash('messages', "<strong>ucfirst($request->nom)</strong> est ajouté");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('personnel.voir_personnel', $this->Kamata($this->getUser(), $id));
    }

    public function active($id)
    {
        $act = 0;
        $getactives = Personnel::where('id', $id)->get();
        foreach($getactives as $getactive){
         if($getactive->active === 0) {
             Session()->flash('message','Personnel est déjà activé');
         }
         else{
             DB::table('personnels')->where('id', $id)->update([
                 'active' =>  '0',
             ]);
         }
        }
     return redirect()->back();
    }

    public function desactive($id)
    {
        $act = 1;
        $getactives = Personnel::where('id', $id)->get();
        foreach($getactives as $getactive){
         if($getactive->active === 1) {
            Session()->flash('message', 'Personnel est déjà désactivé');
         }
         else{
             DB::table('personnels')->where('id', $id)->update([
                 'active' =>  '1',
           ]);
         }
        }
      return redirect()->back();
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
        DB::table('personnels')
            ->where('id', $id)
            ->update([
            'nom' => $request->nom,
            'post_nom' => $request->post,
            'prenom' => $request->prenom,
            'date_ne' => $request->dat,
            'etat_civil' => $request->etat,
            'qualification' => $request->qualification,
            'adresse' => $request->adresse,
            'sexe' => $request->sexe,
            'phone' => $request->tel,
            'fonction' => $request->fonction,
        ]); 
        Session()->flash('messages', 'Votre modification est éffectuée');
        return redirect()->back();
    }

    public function update_photo_personnel(Request $request, $id){
        $request->validate([
            'photo_personnel' => 'required|file|mimes:jpeg,png,gif,svg,jpg|max:2048',
        ]);
        if ($request->hasfile('photo_personnel')) {
            $file = $request->file('photo_personnel');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('uploads/image_personnel/', $filename);
            DB::table('personnels')
                ->where('id', $id)
                ->update(['photo_personnel' => $filename]); 
        } 
        Session()->flash('messages', 'Votre photo a été modifiée');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('personnels')->where('id', $id)->delete();
        return redirect()->back();
    }
}

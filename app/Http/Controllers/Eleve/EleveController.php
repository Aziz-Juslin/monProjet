<?php

namespace App\Http\Controllers\Eleve;

use ecole;
use Carbon\Carbon;
use App\Models\User;
use App\Models\eleve;
use App\Models\Frais;
use App\Models\classe;
use App\Models\Kelasi;
use App\Models\Modalite;
use App\Models\Moyekoli;
use App\Models\AutreFrais;
use App\Models\image_eleve;
use Illuminate\Http\Request;
use App\Models\Photo_moyekoli;
use App\Repository\KamataNioso;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Cycle;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
use Illuminate\Contracts\Session\Session;

class EleveController extends KamataNioso
{
    private $mat = 'Maternelle';
    private $pri = 'Primaire';
    private $sec = 'Education-b';
    private $huma = 'Humanite';
    private $desactive = '1';
    private $dollar = 'dollar';
    private $franc = 'franc';
    private $active = '0';
    private $premierTri = '1èr Trimestre';
    private $deuxiemeTri = '2ème Trimestre';
    private $troisiemeTri = '3ème Trimestre';
    private $premierTra = '1èr Tranche';
    private $deuxiemeTra = '2ème Tranche';
    private $troisiemeTra = '3ème Tranche';
    private $tous = 'Tous';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eleve()
    {
        return view('Eleve.eleve', $this->Kamata($this->getUser(), $this->id));
    }

    public function eleve_quitter()
    {
        return view('Eleve.eleve_quitter', $this->Kamata($this->getUser(), $this->id));
    }
    // cette méthode ajoute le nouveau élève
    public function index()
    {
        return view('Eleve.ajout_eleve', $this->Kamata($this->getUser(), $this->id));
    }
    // cette méthode affiche les reçus de frais scolaires payé par l'élève
    public function eleve_recu($id){
            $recus = Frais::select('annee_frais')->where('moyekoli_id', $id)->DISTINCT('annee_frais')->get();
            $journalFraisEleve = Frais::where('moyekoli_id', $id)->DISTINCT('annee_frais')->get();
            return view('Eleve.eleve_recu', compact('recus'), $this->Kamata($this->getUser(), $id));
    }
    // cette affiche la recherche des reçus de frais scolaires
    public function luka_recu(Request $request, $id){
        $recus = Frais::select('annee_frais')->where('moyekoli_id', $id)->DISTINCT('annee_frais')->get();
        $reqe = $request->input('luka') == ''? Anneesco():$request->input('luka');
        $journalFraisEleve = Frais::where('moyekoli_id', $id)->where('annee_frais','LIKE',$reqe)->get();
        return view('Eleve.eleve_recu', compact('journalFraisEleve', 'recus'), $this->Kamata($this->getUser(), $id));
    }

    // cette affiche la recherche des reçus de frais scolaires par catégorie d'année
    public function luka_recu_annee($id, $annee_frais){
        $recus = Frais::select('annee_frais')->where('moyekoli_id', $id)->DISTINCT('annee_frais')->get();
        $journalFraisEleve = Frais::where('moyekoli_id', $id)->where('annee_frais', $annee_frais)->get();
        return view('Eleve.eleve_recu', compact('journalFraisEleve', 'recus'), $this->Kamata($this->getUser(), $id));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $q = $request->input('qbjnnknknk1047');
        $e1 =  DB::table('kelasis')
        ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
        ->where('user_id', Auth::user()->id)->orderBy('moyekolis.id', 'DESC')->get();
        $e2 =  DB::table('kelasis')
        ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
        ->where('user_id', Auth::user()->id)->where('nom', 'LIKE',$q)->get();
        $Eleves = $q != ''?$e2:$e1;
        return view('Eleve.liste_eleve', compact('Eleves'), $this->Kamata($this->getUser(), $this->id));
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
            'tel' => 'required|string|min:10',
            'dat' => 'required|string',
            'lieu' => 'required|string',
            'sexe' => 'required|string',
            'option' => 'required|string',
            'local' => 'required|string',
            'classe' => 'required|string',
            'adresse' => 'required|string',
            'cycle' => 'required|string',
            'photo_eleve' => 'file|mimes:jpeg,png,gif,svg,jpg|max:2048',
        ]);

            $uso = Auth::user()->id;
            $use = User::find($uso);
            $base = new Moyekoli();
               $base->nom = ucfirst($request->input('nom'));
               $base->post_nom = ucfirst($request->input('post'));
               $base->prenom = ucfirst($request->input('prenom'));
               $base->sexe = ucfirst($request->input('sexe'));
               $base->date_ne = $request->input('dat');
               $base->lieu = $request->input('lieu');
               $base->annee_scolaire = AnneeSco();
               $use->eleve()->save($base);
                if($base){
                $us = $base->pluck('id')->last();
                $eleve = Moyekoli::find($us);
                $id = new Kelasi();
                $id->classe = $request->input('classe');
                $id->cycle = $request->input('cycle');
                $id->local= $request->input('local');
                $id->option = $request->input('option');
                $id->phone = $request->input('tel');
                $id->adresse = $request->input('adresse');
                if ($request->hasfile('photo_eleve')) {
                    $file = $request->file('photo_eleve');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time()  . '.'. $extension;
                    $file->move('uploads/image_eleves/', $filename);
                    $id->photo_eleve = $filename;
                }
                $eleve->kelasi()->save($id);
            }
            Session()->flash('messages', "L'élève est ajouté");
            return redirect()->route('eleve_liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Cette méthode recupère les frais scolaires de modalité fixé pour l'élève
     public function FraisEleve($id, $moda){
        $eleves = DB::table('kelasis')
        ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
        ->where('moyekolis.id', $id)->where('user_id', Auth::user()->id)->get();
        foreach($eleves as $eleve){
                $classe = $eleve->classe;
                $cycle = $eleve->cycle;
        }
      return $FraisFixePourEleve = Modalite::where('classe', $classe)->where('cycles', $cycle)
                ->where('annee_modalite', $moda)
                ->where('user_id', Auth::user()->id)->get();
     }

     public function AnneeModa($id){
        $eleves = DB::table('kelasis')
        ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
        ->where('moyekolis.id', $id)->where('user_id', Auth::user()->id)->get();
        foreach($eleves as $eleve){
                $classe = $eleve->classe;
                $cycle = $eleve->cycle;
        }
      return $FraisFixePourEleve = Modalite::where('classe', $classe)->where('cycles', $cycle)
                ->where('user_id', Auth::user()->id)->get();
     }
    /**
    * cette méthode recupère des frais scolaires payé
    * */
     protected function frais( $anneeFrais, $id, $trimestre, $frais){
        return Frais::where('moyekoli_id', $id)
                    ->where('user_id', Auth::user()->id)
                    ->where('trimestre', $trimestre)
                    ->where('annee_frais', $anneeFrais)
                    ->sum($frais);
    }

/**
   * cette méthode recupère le montant de frais scolaires payé par
   *  l'élève pour le premier trimestre
   * */
    public function FraisPremierTPayeParEleveEnDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->premierTri, $this->dollar);
   }

   public function FraisPremierTPayeParEleveEnFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->premierTri, $this->franc);
    }
     /**
   * cette méthode recupère le montant de frais scolaires payé par
   *  l'élève pour le deuxième trimestre
   * */
    public function FraisDeuxiemeTPayeParEleveEnDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->deuxiemeTri, $this->dollar);
    }

    public function FraisDeuxiemeTPayeParEleveEnFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->deuxiemeTri, $this->franc);
     }
    /**
   * cette méthode recupère le montant de frais scolaires payé par
   *  l'élève pour le troisième trimestre
   * */
    public function FraisTroisiemeTPayeParEleveEnDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->troisiemeTri, $this->dollar);
    }

    public function FraisTroisiemeTPayeParEleveEnFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->troisiemeTri, $this->franc);
    }

    public function show(Request $request, $id)
    {
        $moda = $request->input('moda') == ''? AnneeSco():$request->input('moda');
        return view('Eleve.voir_eleve', [
            'FraisFixePourEleve' => $this->FraisEleve($id, $moda),
            'AnneeModalite' => $this->AnneeModa($id),
            'FraisPremierTPayeParEleveEnDollar' => $this->FraisPremierTPayeParEleveEnDollar($moda, $id),
            'FraisPremierTPayeParEleveEnFranc' => $this->FraisPremierTPayeParEleveEnFranc($moda, $id),
            'FraisDeuxiemeTPayeParEleveEnFranc' => $this->FraisDeuxiemeTPayeParEleveEnFranc($moda, $id),
            'FraisDeuxiemeTPayeParEleveEnDollar' => $this->FraisDeuxiemeTPayeParEleveEnDollar($moda, $id),
            'FraisTroisiemeTPayeParEleveEnFranc' => $this->FraisTroisiemeTPayeParEleveEnFranc($moda, $id),
            'FraisTroisiemeTPayeParEleveEnDollar' => $this->FraisTroisiemeTPayeParEleveEnDollar($moda, $id),
            'moda' => $moda,
        ], $this->Kamata($this->getUser(), $id));
    }

    public function eleve_photo($id)
    {
        return view('Eleve.photo_eleve', $this->Kamata($this->getUser(), $id));
    }

    public function deplace_eleve($id)
    {
        $ecoles = DB::table('image_ecoles')
                    ->join('users', 'image_ecoles.user_id', 'users.id')
                    ->where('users.id','!=', Auth::user()->id)->get();
        return view('Eleve.deplace_eleve', compact('ecoles'), $this->Kamata($this->getUser(), $id));
    }

    public function emplacement_eleve($id, $code_eleve)
    {
        DB::table('moyekolis')->where('code_eleve', $code_eleve)->update(['user_id' => $id]);
        Session()->flash('messages', "L'élève a quitté");
        return redirect()->route('eleve_liste');
    }

    public function eleve_info($id)
    {
        return view('Eleve.info_eleve', $this->Kamata($this->getUser(), $id));
    }
    //cette methode affcihe les frais scolaires terminer par timestre
    public function frais_eleve(Request $request, $id)
    {
        $moda = $request->input('moda') == ''? AnneeSco():$request->input('moda');
        return view('Eleve.frais.frais_eleve', [
            'FraisFixePourEleve' => $this->FraisEleve($id, $moda),
            'AnneeModalite' => $this->AnneeModa($id),
            'FraisPremierTPayeParEleveEnDollar' => $this->FraisPremierTPayeParEleveEnDollar($moda, $id),
            'FraisPremierTPayeParEleveEnFranc' => $this->FraisPremierTPayeParEleveEnFranc($moda, $id),
            'FraisDeuxiemeTPayeParEleveEnFranc' => $this->FraisDeuxiemeTPayeParEleveEnFranc($moda, $id),
            'FraisDeuxiemeTPayeParEleveEnDollar' => $this->FraisDeuxiemeTPayeParEleveEnDollar($moda, $id),
            'FraisTroisiemeTPayeParEleveEnFranc' => $this->FraisTroisiemeTPayeParEleveEnFranc($moda, $id),
            'FraisTroisiemeTPayeParEleveEnDollar' => $this->FraisTroisiemeTPayeParEleveEnDollar($moda, $id),
            'modas' => $moda,
        ], $this->Kamata($this->getUser(), $id));
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
        DB::table('moyekolis')
            ->where('id', $id)
            ->update([
            'nom' => $request->nom,
            'post_nom' => $request->post,
            'prenom' => $request->prenom,
            'date_ne' => $request->dat,
            'lieu' => $request->lieu,
            'sexe' => $request->sexe,
        ]);

        DB::table('kelasis')
        ->where('moyekoli_id', $id)
        ->update([
            'option' => $request->option,
            'phone' => $request->tel,
            'local' => $request->local,
            'classe' => $request->classe,
            'adresse' => $request->adresse,
            'cycle' => $request->cycle,
        ]);
        Session()->flash('messages', 'Modifier');
        return redirect()->back();
    }

    //------------------ LES METHODES DES AUTRES FRAIS-------------------------------
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette méthode affiche autres frais payé par les élèves
    public function autreFrais(Request $request, $id)
    {
        $req = $request->input('luka');
        $moyekoli = Moyekoli::where('id', $id)->get();
        $moyekolise = AutreFrais::where('moyekoli_id', $id)->where('anneesco', 'LIKE', $req)->get();
        $moyekolis = AutreFrais::where('moyekoli_id', $id)->orderBy('id', 'DESC')->get();
        $description = AutreFrais::where('moyekoli_id', $id)->DISTINCT('categorie')->get();
        return view('Eleve.frais.autre_frais',[
            'moyekoli'=> $moyekoli,
            'descriptions'=> $description,
            'moyekolis'=> $req == ''?$moyekolis:$moyekolise,
            'req' => $req,
        ], $this->Kamata($this->getUser(), $id));
    }
    // cette méthode affiche autre frais payé par l'élève par catégorie
    public function luka_autreFrais_par_categorie($id, $categorie)
    {
        $req = $categorie;
        $moyekoli = DB::table('autre_frais')
        ->join('moyekolis', 'moyekoli_id', 'moyekolis.id')
        ->select('moyekolis.id')
        ->where('autre_frais.moyekoli_id', $id)->get();
        $moyekolis = AutreFrais::where('id', $id)->where('categorie', $categorie)->get();
        $description = AutreFrais::where('moyekoli_id', $moyekoli)->DISTINCT('categorie')->get();
        return view('Eleve.frais.autre_frais',[
            'moyekoli'=> $moyekoli,
            'descriptions'=> $description,
            'moyekolis'=> $moyekolis,
            'req' => $req,
        ], $this->Kamata($this->getUser(), $id));
    }

    public function deleteautre($id){
        DB::table('autre_frais')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function updateAutreFrais($id){
        return '';
    }

    public function autre_frais_store(Request $request, $id){
        //verification de montant dont l'élève doit payé
        if(empty($request->input('franc')) && empty($request->input('dollar'))){
            Session()->flash('message','Préciser le montant à payer !');
            return redirect()->back();
        }
        else{
        if(!empty($request->input('franc')) && !empty($request->input('dollar'))){
            Session()->flash('message','Vous ne pouvez payer le deux montants');
            return redirect()->back();
        }
        else{
            $cate = AutreFrais::where('moyekoli_id', $id)->where('anneesco', AnneeSco())->value('categorie');
            $annee = AutreFrais::where('moyekoli_id', $id)->value('anneesco');
            if($cate == $request->input('categorie')&&$annee == $request->input('annee')){
                Session()->flash('message', "Vous avez déjà payé pour <strong>$cate</strong>");
                return redirect()->back();
            }else{
            $fina = new AutreFrais();
            $fina->categorie = $request->input('categorie');
            $fina->trimestre = $request->input('trimestre');
            $fina->franc = $request->input('franc');
            $fina->dollar = $request->input('dollar');
            $fina->anneesco = $request->input('annee');
            $fina->date_paye = carbon::now();
            $fina->moyekoli_id = $id;
            $fina->save();
            Session()->flash('messages','Votre Paiement a été fait');
            return redirect()->back();
            }

        }
      }
    }

//---------------------------- FIN -----------------------------------------------------------
    public function update_photo_eleve(Request $request, $id){
        $request->validate([
            'photo_eleve' => 'required|file|mimes:jpeg,png,gif,svg,jpg|max:2048',
        ]);
        if ($request->hasfile('photo_eleve')) {
            $file = $request->file('photo_eleve');
            $extension = $file->getClientOriginalExtension();
            $filename = time()  . '.'. $extension;
            $file->move('uploads/image_eleves/', $filename);
            DB::table('kelasis')
        ->where('moyekoli_id', $id)
        ->update([
            'photo_eleve' => $filename,
        ]);

        }
        Session()->flash('messages', 'Votre photo a été modifiée');
        return redirect()->back();
    }

    public function active($id)
    {
        $act = 0;
        $getactives = Moyekoli::where('id', $id)->get();
        foreach($getactives as $getactive){
         if($getactive->active === 0) {
             Session()->flash('message','L\'élève est déjà activé');
         }
         else{
             DB::table('moyekolis')->where('id', $id)->update([
                 'active' =>  '0',
             ]);
         }
        }
     return redirect()->back();
    }

    public function desactive($id)
    {
        $getactives = Moyekoli::where('id', $id)->get();
        foreach($getactives as $getactive){
         if($getactive->active === 1) {
            Session()->flash('message', 'L\'élève est déjà désactivé');
         }
         else{
             DB::table('moyekolis')->where('id', $id)->update([
                 'active' =>  '1',
           ]);
         }
        }
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('moyekolis')->where('id', $id)->delete();
        return redirect()->back();

    }
}

<?php

namespace App\Repository;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use  App\Models\Cycle;
use App\Models\Kelasi;
use App\Models\Frais;
use App\Models\Modalite;
use  App\Models\Option;
use  App\Models\Personnel;
use App\Models\Moyekoli;
use  App\Models\Info_ecole;
use Illuminate\Support\Str;
use  App\Models\Image_ecole;
use  App\Models\Images_user;
use Illuminate\Http\Request;
use  App\Models\gestionnaire;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class EcoleRepository extends Controller {

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

    public function __construct( )
    {

    }

    public  function getGestion($id){
        return User::where('from_to', $id)->get();
    }

    public  function getImageEcole($id){
        return Image_ecole::where('user_id', $id)->get();
    }
    public  function getPhotoAdmin($id){
        return Images_user::where('user_id', $id)->get();
    }

    public  function getAdmin($id){
        return Admin::where('user_id', $id)->get();
    }
    public  function getCycle($id){
        return Cycle::where('user_id', $id)
                    ->get();
    }

    public  function getOption($id){
        return Option::where('user_id', $id)->get();
    }

    public function getInfos(int $id){
        return Info_ecole::where('user_id', $id)->get();
    }

    //--------------------------recuperation des informations des élève----------------
    public function getEleve($id){
        return DB::table('kelasis')
                    ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                    ->where('user_id', $id)->orderBy('moyekolis.id', 'DESC')->get();
    }

    public function getEleveRecent($id){
        return DB::table('kelasis')
                    ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                    ->where('user_id', $id)->orderBy('moyekolis.id', 'DESC')->paginate(5);
    }

    public function getInfoEleve(){
        $moyekoli = Moyekoli::pluck('id')->last();
        $id = Moyekoli::find($moyekoli);
        return Kelasi::where('moyekoli_id', $id)->get();
    }

    public function VoirEleve($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('moyekolis.id', $id)
                ->where('user_id', $user)
                ->get();
    }

    public function VoirElevePhoto($user, $id){
        return DB::table('kelasis')
                    ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                    ->where('moyekolis.id', $id)
                    ->where('user_id', $user)
                    ->get();
    }

  /***
   * les informations concernant les cycles
   */
  public  function Cycles($user, $id){
    return Cycle::where('slug', $id)
                ->where('user_id', $user)
                ->get();
    }
     /** cette méthode recupère les élèves par cycle */
    public function EleveParCycle($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('cycle', $id)
                ->where('active', '0')
                ->where('user_id', $user)
                ->get();
    }



     /** cette méthode recupère les effectifs des élèves par cycle */
     public function EffectifParCycle($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('cycle', $id)
                ->where('user_id', $user)
                ->get();
    }
    /** cette méthode recupère les effectifs des élèves par option */
    public function EffectifParOption($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('option', $id)
                ->where('user_id', $user)
                ->get();
    }

    /** cette méthode recupère les élèves du sexe masculin par cycle */
    public function SexeMasculinParOption($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('option', $id)
                ->where('sexe', 'M')
                ->where('user_id', $user)
                ->get();
    }

      /** cette méthode recupère les élèves du sexe féminin */
      public function SexeFemininParOption($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('option', $id)
                ->where('sexe', 'F')
                ->where('user_id', $user)
                ->get();
    }
     /** cette méthode recupère les élèves du sexe masculin par cycle */
    public function SexeMasculin($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('cycle', $id)
                ->where('sexe', 'M')
                ->where('user_id', $user)
                ->get();
    }
     /** cette méthode recupère les élèves du sexe féminin */
    public function SexeFeminin($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('cycle', $id)
                ->where('sexe', 'F')
                ->where('user_id', $user)
                ->get();
    }
    /** cette méthode recupère les élèves abandons */
    public function EleveAbandonParOption($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('option', $id)
                ->where('active', '1')
                ->where('user_id', $user)
                ->get();
    }

    /** cette méthode recupère les élèves abandons */
    public function EleveAbandon($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('cycle', $id)
                ->where('active', '1')
                ->where('user_id', $user)
                ->get();
    }

    public function EleveQuitter($user){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('active', '1')
                ->where('user_id', $user)
                ->get();
    }
    /** archive pour les années des cycles */
    public function getArchiveCycle($user){
        return Moyekoli::select('annee_scolaire')->where('user_id', $user)->DISTINCT()->get();
    }
    /** cette méthode recupère les élèves par options */
    public function EleveParOption($user, $id){
        return DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('option', $id)
                ->where('active', '0')
                ->where('user_id', $user)
                ->get();
    }
    /***
     *  cette partie nous recupérons les données
     *  du personnel
     */

    /** cette méthode recupère tous le personnel */
     public function Personnels($user){
        return Personnel::where('user_id', $user)->get();
     }
     /** cette méthode recupère tous le personnel fictif*/
     public function Personnel_active($user){
        return Personnel::where('user_id', $user)->where('active', '0')->get();
     }
     /** cette méthode recupère tous le personnel quitté */
     public function Personnel_quitte($user){
        return Personnel::where('user_id', $user)->where('active', '1')->get();
     }

      /** cette méthode recupère tous le personnel quitté */
      public function PersonnelHomme($user){
        return Personnel::where('user_id', $user)->where('sexe', 'M')->get();
     }

      /** cette méthode recupère tous le personnel quitté */
      public function PersonnelFemme($user){
        return Personnel::where('user_id', $user)->where('sexe', 'F')->get();
     }

     public function PersonnelCategorie($user){
        return Personnel::where('user_id', $user)->DISTINCT('fonction')->get();
     }

     public function VoirPersonnel($user, $id){
        return Personnel::where('user_id', $user)->where('id', $id)->get();
     }

     /** cette méthode recupère les données de la finance */
     /**
       * cette méthode recupère les frais scolaires fixé pour
       *  les classes par cycle
       * */
      public function ModaFixe($user, $id){
            return Modalite::where('user_id', $user)->where('cycles', $id)->get();
      }
      /**
       * cette méthode recupère le montant de frais scolaires fixé pour
       *  l'élève
       * */

    protected function modaliteParTrimestre($id){
        $eleves = DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('moyekolis.id', $id)->where('user_id', Auth::user()->id)->get();
        foreach($eleves as $eleve){
                $classe = $eleve->classe;
                $cycle = $eleve->cycle;
        }
        return Modalite::where('classe', isset($classe))->where('cycles', isset($cycle))
                        ->where('annee_modalite', $annee_moda)
                        ->where('user_id', Auth::user()->id)->get();
    }

    public function FraisFixePourEleve($user, $id){
            return $this->modaliteParTrimestre($id);
    }

       public function journalFraisEleve($id, $user){
                return DB::table('moyekolis')
                ->join('frais', 'moyekolis.id', 'frais.moyekoli_id')
                ->where('moyekoli_id', $id)->orderBy('frais.id', 'DESC')->get();
       }

       public function journalFraisScolaireDuJour($id, $user){
        return DB::table('frais')
        ->join('moyekolis', 'frais.moyekoli_id', 'moyekolis.id')
        ->where('frais.user_id', $user)->orderBy('frais.id', 'DESC')->get();
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
    public function FraisPremierTTerminerDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->premierTri, $this->dollar);
   }

   public function FraisPremierTTerminerFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->premierTri, $this->franc);
    }
     /**
   * cette méthode recupère le montant de frais scolaires payé par
   *  l'élève pour le deuxième trimestre
   * */
    public function FraisDeuxiemeTTerminerDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->deuxiemeTri, $this->dollar);
    }

    public function FraisDeuxiemeTTerminerFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->deuxiemeTri, $this->franc);
     }
    /**
   * cette méthode recupère le montant de frais scolaires payé par
   *  l'élève pour le troisième trimestre
   * */
    public function FraisTroisiemeTTerminerDollar($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->troisiemeTri, $this->dollar);
    }

    public function FraisTroisiemeTTerminerFranc($anneeFrais, $id){
        return $this->frais($anneeFrais, $id, $this->troisiemeTri, $this->franc);
    }
       /**
       * cette méthode recupère les élèves qui ont terminé le frais scolaires
       * du prémier trimestre
       * */
      protected function modaliteP($id){
        $eleves = DB::table('kelasis')
                ->join('moyekolis', 'kelasis.moyekoli_id', 'moyekolis.id')
                ->where('moyekolis.id', $id)->where('user_id', Auth::user()->id)->get();
        foreach($eleves as $eleve){
                $classe = $eleve->classe;
                $cycle = $eleve->cycle;
        }
        return Modalite::where('classe', $classe)->where('cycles', $cycle)
                        ->where('annee_modalite', AnneeSco())
                        ->where('user_id', Auth::user()->id)->get();
      }

      public function FraisPremierT($id, $user){
        return DB::table('frais')
                ->join('moyekolis', 'frais.moyekoli_id', 'moyekolis.id')
                ->where('trimestre', $this->premierTri)
                ->where("(sum('franc') == $f), $this->premierTri")
                ->where('frais.user_id', $user)->orderBy('frais.created_at', 'DESC')->get();
      }

      public function recuEleves($id, $user){
        return DB::table('frais')
                    ->join('moyekolis', 'frais.moyekoli_id', 'moyekolis.id')
                    ->where('frais.id', $id)->get();
      }

      public function EditrecuEleves($id, $user){
        return DB::table('frais')
                    ->join('moyekolis', 'frais.moyekoli_id', 'moyekolis.id')
                    ->where('frais.id', $id)->get();
      }



}

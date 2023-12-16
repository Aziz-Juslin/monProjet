<?php

namespace App\Repository;

use App\Repository\EcoleRepository;
use Illuminate\Support\Facades\Auth;

class KamataNioso extends EcoleRepository{

    protected $id = [];
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUser(){
        return Auth::user()->id;
    }

    public function Kamata($user, $id){
        return [
            'infoEcole'=> $this->getInfos($user),
            'infoEleve'=> $this->getInfoEleve($user),
            'photos' => $this->getImageEcole($user),
            'photoAdmin' => $this->getPhotoAdmin($user),
            'Eleves' => $this->getEleve($user),
            'Admin' => $this->getAdmin($user),
            'cycles' => $this->getCycle($user),
            'options' => $this->getOption($user),
            'gestions' => $this->getGestion($user),
            'VoirEleve' => $this->VoirEleve($user, $id),
            'VoirElevePhoto' => $this->VoirElevePhoto($user, $id),
            'EleveRecent' => $this->getEleveRecent($user),
            'EleveQuitter' => $this->EleveQuitter($user),

            'VoirCycle' => $this->Cycles($user, $id),
            'EleveParCycle' => $this->EleveParCycle($user, $id),
            'EffectifParCycle' => $this->EffectifParCycle($user, $id),
            'EffectifParOption' => $this->EffectifParOption($user, $id),
            'SexeMasculinParOption' => $this->SexeMasculinParOption($user, $id),
            'SexeMasculin' => $this->SexeMasculin($user, $id),
            'SexeFeminin' => $this->SexeFeminin($user, $id),
            'SexeFemininParOption' => $this->SexeFemininParOption($user, $id),
            'EleveAbandonParOption' => $this->EleveAbandonParOption($user, $id),
            'EleveAbandon' => $this->EleveAbandon($user, $id),
            'ArchiveCycle' => $this->getArchiveCycle($user),
            'EleveParOption' => $this->EleveParOption($user, $id),
            /*** données de personnel */
            'VoirPersonnel' => $this->VoirPersonnel($user, $id),
            'Personnel_quitte' => $this->Personnel_quitte($user),
            'Personnel_active' => $this->Personnel_active($user),
            'PersonnelHomme' => $this->PersonnelHomme($user),
            'PersonnelFemme' => $this->PersonnelFemme($user),
            'Personnels' => $this->Personnels($user),
            'PersonnelCategorie' => $this->PersonnelCategorie($user),
            /*** données de modalité de frais scolaires */
            'ModaFixe' => $this->ModaFixe($user, $id),


            /*** données de fixation des frais scolaire */
            'journalFraisEleve' => $this->journalFraisEleve($id, $user),
            'journalFraisScolaireDuJour' => $this->journalFraisScolaireDuJour($id, $user),
            'recuEleves' => $this->recuEleves($id, $user),


        ];
    }
}

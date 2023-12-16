@extends('layouts.master1', ['title'=> 'Rapport autres frais'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.AutreFrais.head_autre_frais')   
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
         <div class="col-md-3 bg-slate-300 card">
          <div  class="btn bg-blue btn-block mt-1 rapport_autre">
          <span class="text-uppercase  font-size-sm font-weight-semibold"><i class="icon-statistics mr-2"></i>éffectuer le rapport</span>
            </div>
            <div class="mt-2">
              @foreach($VoirElevePhoto as $eleve)
              <form method="get" action="{{route('luka_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
              @csrf
              @endforeach
              <div class="row">
                <div class="form-group col-md-12">
                  <select name="luka" class="form-control form-control-lg" >
                    <option value="01">Janvier</option>
                    <option value="02">Février</option>
                    <option value="03">Mars</option>
                    <option value="04">Avril</option>
                    <option value="05">Mai</option>
                    <option value="06">Juin</option>
                    <option value="07">Juillet</option>
                    <option value="08">Août</option>
                    <option value="09">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                  </select>
                </div>
                  <div class="form-group col-md-12">
                  <input type="text" name="annee" class="form-control form-control-lg" placeholder="Année scolaire" >
                </div>
                  <div class="form-group col-md-12">
                     <button style="background: non;" type="submit" class="btn bg-light btn-block"> Afficher</button>
                  </div>
                  </div>
                  </form>
                </div>
                <div class="card-header bg-transparent header-elements-inline">
                <span class="text-uppercase font-size-sm font-weight-semibold">Categories par année</span>
                </div>
                <div class=" border-0 p-0">
                  <ul class="nav nav-sidebar ">
    
                    <li class="nav-item ">
                      <a href="" class="nav-link"><i class="icon-arrow-right13"></i>0</a>
                    </li>
                    
                  </ul>
                </div>
                </div>
        
              <!-- /categories -->

      <div class="col-md-9">
        <div class="">
        <div class="card-header bg-slate header-elements-inline">
        <span class="text-uppercase  font-size-sm font-weight-semibold">Rapport Journalier</span>
          </div>
          </div>
        <div class="card-body">
               <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                   <li class="list-inline-item"><a class="btn btn-link text-default"><i class="icon-statistics mr-2"></i> {{$datePayes->count()}}</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item dropdown">
                    <a href="{{route('invoice_rapport_frais_scolaire', Auth::user()->ecole)}}" class="btn btn-link text-default">
                      <i  class="icon-printer mr-2"></i>
                    </a>
                  </li>
                </ul>
              </div>
          </div>
          <div class="row">
            @foreach($datePayes as $journal)
              <div class="col-lg-6">
                <div class="card border-left-3 border-left-light rounded-left-0">
                  <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                      <div>
                        <h6 class="font-weight-semibold">{{Auth::user()->name}}</h6>
                        <ul class="list list-unstyled mb-0">
                          <li>Rapport journalier <b>Autre frais</b></li>
                          <li>Mois : <span class="font-weight-semibold">{{AfficheMois(( new DateTime($journal->date_rapport))->format('m'))}} {{date('Y')}}</span></li>
                        </ul>
                      </div>

                      <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                        <h3 class="font-weight-semibold ">$ {{$journal->dollar}}</h3>
                        <h3 class="font-weight-semibold ">CDF {{$journal->franc}}</h3>
                        <ul class="list list-unstyled mb-0">
                          <li>Année scolaire: <span class="font-weight-semibold">{{$journal->annee_rapport}}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer bg-light d-sm-flex justify-content-sm-between align-items-sm-center">
                    <span>
                      <i class="icon-calendar mr-2"></i>
                      <span class="font-weight-semibold">{{AfficheJour(( new DateTime($journal->date_rapport))->format('D'))}} {{( new DateTime($journal->date_rapport))->format('d/m/Y')}}</span>
                    </span>

                    <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                      
                      <li class="list-inline-item dropdown">
                        <div>
                          <a  class=""><i class="icon-printer"></i></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
              
          </div>



          </div>
      </div>
    </div>
</div>
</div>

@include('layouts.footer1')
@stop                   
       
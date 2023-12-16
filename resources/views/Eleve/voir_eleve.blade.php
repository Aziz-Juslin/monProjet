@extends('layouts.master1', ['title'=> 'Elève'])
@section('section')
@include('Eleve.head_eleve')
 		
         <div class="row">
          <div class="card col-md-4">
              <!-- Course details -->
             @foreach($VoirEleve as $eleve)
              <div class="text-muted">
                <div class="card-header header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">Profile</span>
                  <div class="header-elements">
                    <div class="list-icons">
                      <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                    </div>
                </div>

                <div class="card-body pb-0">
                  <a href="#" class="btn btn-light btn-block mb-2">Détails</a>
                </div>

                <table class="table table-borderless table-xs border-top-0 my-2">
                  <tbody class="text-muted">
                    <tr>
                      <td class="font-weight-semibold">Classe:</td>
                      <td class="text-right">{{$eleve->classe}} {{$eleve->cycle}}</td>
                    </tr>
                    @if($eleve->option != 'Aucune')
                    <tr>
                      <td class="font-weight-semibold">Option:</td>
                      <td class="text-right">
                        <span class="badge bg-pink">{{$eleve->option}}</span>
                      </td>
                    </tr>
                    @endif
                    <tr>
                      <td class="font-weight-semibold">Local:</td>
                      <td class="text-right">{{$eleve->local}}</td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">{{$eleve->sexe == 'M'?'Né à':'Née à'}}:</td>
                      <td class="text-right">{{$eleve->lieu}}, {{(new DateTime($eleve->date_ne))->format('d/m/Y')}}</td>
                    </tr>
                    
                    <tr>
                      <td class="font-weight-semibold">Adresse:</td>
                      <td class="text-right">{{$eleve->adresse}}</td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">Téléphone:</td>
                      <td class="text-right"><a href="#">{{$eleve->phone}}</a></td>
                    </tr>
                    <tr>
                      <td class="text-right text-muted">
                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              @endforeach
              <!-- /course details -->
             </div>

            <div class="col-md-8">
            @include('Eleve.frais.annee_frais')
            <!-- Simple text stats with icons -->
            <div class="card mt-3">
              <div class="card-header bg-transparent header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">Frais scolaires / <b class="mr-2">{{$moda}}</b></span>
                </div>
                @foreach($FraisFixePourEleve as $modalite)
                @if(! $modalite->montant_franc == null)
                @if($modalite->montant_franc == $FraisPremierTPayeParEleveEnFranc)
                @if($modalite->montant_franc == $FraisDeuxiemeTPayeParEleveEnFranc)
                @if($modalite->montant_franc == $FraisTroisiemeTPayeParEleveEnFranc)
                <div class="card-body border-top-primary">
                <div class="text-center">
                <p class="mb-3 text-muted">Frais scolaires <code>Totalité</code> </p>
                </div>
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">
                  <span>100% totalité de paiement</span>
                </div>
                </div>
                </div>
                @else
                @include('Finance.FraisScolaires.TTrimestre')
                @endif
                @else
                @include('Finance.FraisScolaires.DTrimestre')
                @endif
                @else
                @include('Finance.FraisScolaires.PTrimestre')
                @endif
                @else
                @if($modalite->montant_dollar == $FraisPremierTPayeParEleveEnDollar)
                @if($modalite->montant_dollar == $FraisDeuxiemeTPayeParEleveEnDollar)
                @if($modalite->montant_dollar == $FraisTroisiemeTPayeParEleveEnDollar)
                <div class="card-body border-top-primary">
                <div class="text-center">
                <p class="mb-3 text-muted">Frais scolaires <code>Totalité</code> </p>
                </div>
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">
                  <span>100% totalité de paiement</span>
                </div>
                </div>
                </div>
                @else
                @include('Finance.FraisScolaires.TTrimestre')
                @endif
                @else
                @include('Finance.FraisScolaires.DTrimestre')
                @endif
                @else
                @include('Finance.FraisScolaires.PTrimestre')
                @endif
                @endif 
                @endforeach
            </div>
          </div>
      </div>
<!-- /dashboard content -->
@include('Eleve.aside_eleve')
@include('layouts.footer1')
@stop          
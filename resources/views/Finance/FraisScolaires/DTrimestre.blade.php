              <div class="card-body pb-0">
                  <a class="btn btn-light btn-block mb-2">2<sup>ème</sup> Trimestre / {{AnneeSco()}}</a>
              </div>

               <div class="card-body border-top-primary">
              <div class="text-center">
                <p class="mb-3 text-muted">Frais scolaires <code>.progresse</code> </p>
              </div>
              @foreach($FraisFixePourEleve as $fixe)
              @if(!$fixe->montant_franc == '')
               <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)}}%">
                  <span>{{sprintf('%.1f', pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc))}}% du paiement</span>
                </div>
              </div>
              @else
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)}}%">
                  <span>{{sprintf('%.1f', pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar))}}% du paiement</span>
                </div>
              </div>
                @endif
              @endforeach
            </div>

              <div class="row text-center mt-2 p-2">
                @foreach($FraisFixePourEleve as $modalite)
                @if(! $modalite->montant_franc == null or ! $modalite->montant_dollar == null )
                @if($FraisDeuxiemeTPayeParEleveEnFranc > $modalite->montant_franc or $FraisDeuxiemeTPayeParEleveEnDollar > $modalite->montant_dollar)
                <div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible p-1">
                <h6 class="alert-heading font-weight-semibold mb-1"><strong>Procédure de paiement bloquée!</strong></h6>
                Vous avez dépassé le montant fixé pour le deuxième trimestre, vous pouvez modifier ce montant pour un autre trimestre ou le supprimer avant de continuer la procédure de paiement !
                </div>
                @else
                <div class="col-md-4">
                  <p><i class="icon-bag icon-2x d-inline-block text-info"></i></p>
                  @forelse($FraisFixePourEleve as $fixe)
                  <h3 class="font-weight-semibold mb-0">{{$fixe->montant_franc == ''? "$ $fixe->montant_dollar":"CDF $fixe->montant_franc"}}</h3>
                  <span class="text-muted font-size-lg">Montant fixé</span>
                  @empty
                  <span class="text-muted font-size-lg">Aucun Montant fixé</span>
                  @endforelse
                </div>

                <div class="col-md-4">
                  <p><i class="icon-cart-add2  icon-2x d-inline-block text-success"></i></p>
                   @foreach($FraisFixePourEleve as $fixe)
                  @if(!$fixe->montant_franc == '')
                     <h3 class="font-weight-semibold mb-0">CDF {{$FraisDeuxiemeTPayeParEleveEnFranc}}</h3>
                  @else
                   <h3 class="font-weight-semibold mb-0">$ {{$FraisDeuxiemeTPayeParEleveEnDollar}}</h3>
                  @endif
                  @endforeach
                 
                  <span class="text-muted font-size-lg">Montant payé</span>
                </div>

                <div class="col-md-4">
                <p><i class="icon-cart-remove icon-2x d-inline-block text-warning"></i></p>
                    @foreach($FraisFixePourEleve as $fixe)
                  @if(!$fixe->montant_franc == '')
                    <h3 class="font-weight-semibold mb-0">CDF {{$fixe->montant_franc - $FraisDeuxiemeTPayeParEleveEnFranc}}</h3>
                  @else
                  <h3 class="font-weight-semibold mb-0">$ {{$fixe->montant_dollar - $FraisDeuxiemeTPayeParEleveEnDollar}}</h3>
                  @endif
                  @endforeach
                  <span class="text-muted font-size-lg">Reste à payer</span>
                </div>
                @endif
                @endif
                @endforeach
              </div>
              @include('Finance.FraisScolaires.slide_paye')
              <div class="card-body pb-0">
                  <a class="btn btn-light btn-block mb-2">3<sup>ème</sup> Trimestre / {{AnneeSco()}}</a>
              </div>
              <div class="card-body border-top-primary">
              <div class="text-center">
                <p class="mb-3 text-muted">Frais scolaires <code>.progresse</code> </p>
              </div>
              @foreach($FraisFixePourEleve as $fixe)
              @if(!$fixe->montant_franc == '')
               <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisTroisiemeTPayeParEleveEnFranc, $fixe->montant_franc)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisTroisiemeTPayeParEleveEnFranc, $fixe->montant_franc)}}%">
                  <span>{{sprintf('%.1f', pourcentage($FraisTroisiemeTPayeParEleveEnFranc, $fixe->montant_franc))}}% du paiement</span>
                </div>
              </div>
              @else
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisTroisiemeTPayeParEleveEnDollar, $fixe->montant_dollar)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisTroisiemeTPayeParEleveEnDollar, $fixe->montant_dollar)}}%">
                  <span>{{sprintf('%.1f', pourcentage($FraisTroisiemeTPayeParEleveEnDollar, $fixe->montant_dollar))}}% du paiement</span>
                </div>
              </div>
                @endif
              @endforeach
            </div>
              <div class="row text-center mt-2 p-2">
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
                     <h3 class="font-weight-semibold mb-0">CDF {{$FraisTroisiemeTPayeParEleveEnFranc}}</h3>
                  @else
                   <h3 class="font-weight-semibold mb-0">$ {{$FraisTroisiemeTPayeParEleveEnDollar}}</h3>
                  @endif
                  @endforeach

                  <span class="text-muted font-size-lg">Montant payé</span>
                </div>

                <div class="col-md-4">
                  <p><i class="icon-cart-remove icon-2x d-inline-block text-warning"></i></p>
                    @foreach($FraisFixePourEleve as $fixe)
                  @if(!$fixe->montant_franc == '')
                    <h3 class="font-weight-semibold mb-0">CDF {{$fixe->montant_franc - $FraisTroisiemeTPayeParEleveEnFranc}}</h3>
                  @else
                  <h3 class="font-weight-semibold mb-0">$ {{$fixe->montant_dollar - $FraisTroisiemeTPayeParEleveEnDollar}}</h3>
                  @endif
                  @endforeach
                  <span class="text-muted font-size-lg">Reste à payer</span>
                </div>
              </div>
              @include('Finance.FraisScolaires.slide_paye')

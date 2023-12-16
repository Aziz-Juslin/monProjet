                              <div class="card">
                                <div class="card-header bg-slate text-center">
                                <h5 class="card-title"> 2<sup>ème</sup> Trimestre</h5>
                                </div>
                            <div class="card-body text-center">
                              
                                @foreach($FraisFixePourEleve as $fixe)
                                @if(!$fixe->montant_franc == '')
                                <h2 class="pricing-table-price"><span class="mr-1">CDF</span>{{$FraisDeuxiemeTPayeParEleveEnFranc}}</h2>
                                @else
                               <h1 class="pricing-table-price"><span class="mr-1">$</span> {{$FraisDeuxiemeTPayeParEleveEnDollar}}</h2>
                                @endif
                                @endforeach
                                <ul class="pricing-table-list list-unstyled mb-3">
                                @forelse($FraisFixePourEleve as $fixe)
                                <li><strong>{{$fixe->montant_franc == ''? "$ $fixe->montant_dollar":"CDF $fixe->montant_franc"}}</strong> Montant fixé</li>
                                @empty
                                <li>Aucun Montant fixé</li>
                                @endforelse
                                  @foreach($FraisFixePourEleve as $fixe)
                                  @if(!$fixe->montant_franc == '')
                                    <li><strong>CDF {{$fixe->montant_franc - $FraisDeuxiemeTPayeParEleveEnFranc}}</strong> reste à payer</li>
                                  @else
                                  <li><strong>$ {{$fixe->montant_dollar - $FraisDeuxiemeTPayeParEleveEnDollar}}</strong> reste à payer</li>
                                  @endif
                                  @endforeach
                                  
                                </ul>
                                <div class="card-body border-top-primary">
                                  @foreach($FraisFixePourEleve as $fixe)
                                  @if(!$fixe->montant_franc == '')
                                   <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc)}}%">
                                      <span>{{sprintf('%.0f', pourcentage($FraisDeuxiemeTPayeParEleveEnFranc, $fixe->montant_franc))}}% du paiement</span>
                                    </div>
                                  </div>
                                  @else
                                    <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{(pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)) != '50' ? 'bg-danger': 'bg-success'}}" style="width: {{pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar)}}%">
                                      <span>{{sprintf('%.0f', pourcentage($FraisDeuxiemeTPayeParEleveEnDollar, $fixe->montant_dollar))}}% du paiement</span>
                                    </div>
                                  </div>
                                    @endif
                                  @endforeach
                                </div>
                                 <a href="#" class=" bg bg-lg font-size-sm text-success font-weight-semibold">
                                  @foreach($FraisFixePourEleve as $fixe)
                                  @if(!$fixe->montant_franc == '')
                                  @if($FraisDeuxiemeTPayeParEleveEnFranc == $fixe->montant_franc)
                                   <i class="icon-checkmark4 text-success"></i> Trimestre soldé
                                  @else
                                  Encours de paiement
                                  @endif
                                  @else
                                  @if($FraisDeuxiemeTPayeParEleveEnDollar == $fixe->montant_dollar)
                                   <i class="icon-checkmark4 text-success"></i> Trimestre soldé
                                  @else
                                  Encours de paiement
                                  @endif
                                  @endif
                                  @endforeach
                                </a>
                            </div>
                        </div>
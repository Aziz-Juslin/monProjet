  <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
			<!-- Orders history (datatable) -->
      <div class="row">
         <div class="col-md-3">
            <div data-toggle="modal" data-target="#modal_default" class="btn bg-blue btn-block mt-1">
            <span class=" font-size-sm font-weight-semibold"><i class="icon-statistics mr-2"></i>{{$journalFraisEleve->count()}} {{count_number('Reçu', $journalFraisEleve->count())}}</span>
                </div>
                <div class="mt-2">
                @foreach($VoirElevePhoto as $eleve)
              <form method="get" action="{{route('luka_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
              @csrf
              @endforeach
              <div class="input-group mb-3">
                <div class="form-group-feedback form-group-feedback-right">
                  <input type="text" name="luka" class="form-control form-control-lg" placeholder="{{Anneesco()}}">
                  <div class="form-control-feedback form-control-feedback-lg">
                     <button style="background: non;" type="submit" class="btn btn-link"><i class="icon-search4 text-muted"></i></button>
                  </div>
                </div>
              </div>
                  </form>
                </div>
                

                <div class="card-header bg-transparent header-elements-inline">
                  <span class=" font-size-sm font-weight-semibold">Categories par année</span>
                </div>

                <div class=" border-0 p-0">
                  <ul class="nav nav-sidebar ">
                    @foreach($recus as $recu)
                    <li class="nav-item ">
                      <a href="{{route('luka_recu_annee', [$eleve->id, $recu->annee_frais ])}}" class="nav-link"><i class="icon-arrow-right13"></i>{{$recu->annee_frais}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                </div>
              <!-- /categories -->
             
        <div class="col-md-9">
        <div class="">
        <div class="card-header bg-light header-elements-inline">
        <span class="  font-size-sm font-weight-semibold"> Preuves de paiement frais scolaires</span>
          </div>
          </div>
          <!-- Course widget -->
          <div class="row mt-2">
          @forelse($journalFraisEleve as $journal)
          <div class="col-md-6">
            <div class="card">
              <div class="card-img-actions mx-1 mt-1">
                 <i class="icon-inbox icon-2x mr-2 text-muted"></i>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
                    <a href="#" class="text-default mr-2"> {{$journal->trimestre}}</a>
                    <span class="btn bg-slate-400 h4 ml-auto font-weight-semibold">{{$journal->franc == ''? " $journal->dollar $":"$journal->franc FC"}}</span>
                  </h6>
                  <span>Date : <a>{{(new DateTime($journal->created_at))->format('d/m/Y | H:m')}}</a></span>
                </div>
              </div>
              <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                <span> A payé  {{$journal->dat_frais == date('d/m/Y')?"aujourd'hui":\Carbon\Carbon::parse($journal->created_at)->diffforhumans()}}</span>
                  <div class="ml-3 align-self-center">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('recu_imprime', [$journal->id, $journal->num_recu])}}" class="dropdown-item"><i class="icon-printer"></i> Imprimer</a>
                        <a data-id="{{$journal->id}}" class="dropdown-item recu"><i class="icon-bin "></i> Supprimer</a>
                        <a href="{{route('edit_recu',[$journal->id, $journal->num_recu])}}" class="dropdown-item"><i class="icon-pencil7"></i> Modifier</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"><i class="icon-statistics"></i> {{$journal->trimestre}}</a>
                      </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </div>
            @empty
            <div class="col-md-12">
             <div class="card text-center mt-3 text-muted">
              <h6 class="card-title mt-2">
            <i class="icon-notification2 mr-2 icon-5x text-muted  p-0 mb-2 mt-1 mr-2"></i></h6>
            @if($journalFraisEleve->isEmpty())
            <div class="text-center mb-3 py-2">
              <span class="text-muted d-block h5">
                L'élève n'a encore rien payer <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">Clique-ici pour payer</a> 
              </span>
            </div>
            @endif
          </div>
          </div>
            @endforelse
            </div>
        <!-- /course widget -->
        </div>
     </div>
  </div>
</div>
     
     


   
 
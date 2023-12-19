    <div class="content-wrapper mt-4">
    <div class="page-header ">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-stack3 mr-2 icon-2x text-muted"></i> <span class="font-weight-semibold">{{Route::is('cycle_principal') ? 'Cycles':"Cycle / $cicles"}}</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    @if(!Route::is('cycle_principal'))
                      <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                        <div class="btn-group">
                            <button type="button" class="btn bg-pink-300 dropdown-toggle" data-toggle="dropdown"> <i class="icon-calendar5 "></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Accès rapide</div>
                         @forelse($cycles as $cycle)
                        <a href="{{route('cycle', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack3"></i> {{$cycle->cycle}}</a>
                        @empty
                        <a  class="dropdown-item"><i class="icon-cash3"></i> Aucun cycle</a>
                        @endforelse
                        <a href="{{route('cycle_principal')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                        </div>
                        </div>
                    </div>
                    @endif
                </div>
           @if(!Route::is('cycle_principal'))
          <div class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
              <i class="icon-menu7 mr-2"></i>
              Voir plus d'option
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a href="{{route('cycle', $cicles)}}" class="navbar-nav-link {{col_active('cycle')}}" >
                  <i class="icon-display mr-2"></i>
                  {{strtoupper($cicles)}}
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('eleve_actif', $cicles)}}" class="navbar-nav-link {{col_active('eleve_actif')}}" >
                  <i class="icon-users2 mr-2"></i>
                  Elèves fictif
                  <span class="badge badge-pill bg-indigo position-static ml-auto ml-lg-2">{{$EleveParCycle->count()}}</span>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('eleve_abandon', $cicles)}}" class="navbar-nav-link {{col_active('eleve_abandon')}}">
                  <i class="icon-user-cancel mr-2"></i>
                   Elèves abandon
                  <span class="badge badge-pill bg-indigo position-static ml-auto ml-lg-2">{{$EleveAbandon->count()}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('classe', $cicles)}}" class="navbar-nav-link {{col_active('classe')}}">
                  <i class="icon-collaboration mr-2"></i>
                  Classes
                </a>
              </li>
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a data-toggle="modal" data-target="#modal_default" class="navbar-nav-link">
                  <i class="icon-printer icon-1x mr-2 text-slate"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
        @endif
    </div>

                    <!-- Page header -->
                    <div class="page-header page-header-light">
                        <div class="page-header-content header-elements-md-inline">
                            <div class="page-title d-flex">
                                @if(Route::is('eleve_liste'))
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Répertoire</span> - Elève</h4>
                                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                                @elseif(Route::is('ajout_eleve'))
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Ajouter</span> - Elève</h4>
                                <a  class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                                @elseif(Route::is('eleve_quitter'))
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Elèves</span> - Abandon</h4>
                                <a  class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                                @elseif(Route::is('eleve'))
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Elèves</span> </h4>
                                <a  class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                                @else
                                @foreach($VoirEleve as $eleve)
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Elève</span> - {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h4>
                                <a  class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                                @endforeach
                                @endif
                            </div>

                            <div class="header-elements d-none">
                                <div class="d-flex justify-content-center">
                                    <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                        <i class="icon-bars-alt text-pink-300"></i>
                                        <span>Finance</span>
                                    </a>
                                    <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                        <i class="icon-calculator text-pink-300"></i>
                                        <span>Personnel</span>
                                    </a>
                                    <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                        <i class="icon-calendar5 text-pink-300"></i>
                                        <span>Elèves</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                            <div class="d-flex">
                                <div class="breadcrumb">
                                    <a href="{{route('home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Accueil</a>
                                    <a href="general_knowledgebase.html" class="breadcrumb-item">{{AnneeScolaire()}}</a>
                                </div>

                                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                            </div>

                            <div class="header-elements d-none">
                                <div class="breadcrumb justify-content-center">
                                    <div class="breadcrumb-elements-item dropdown p-0">
                                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-toggle mr-2"></i>
                                            Menu
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{route('ajout_eleve')}}" class="dropdown-item"><i class="icon-user-plus"></i>Ajouter élève</a>
                                        <a href="{{route('eleve_liste')}}" class="dropdown-item"><i class="icon-user-check"></i>Répertoire des élèves</a>
                                        <a href="{{route('eleve_quitter')}}" class="dropdown-item"><i class="icon-user-cancel"></i>Elève Abandon</a>
                                        <a href="{{route('eleve')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->






            <!-- Page header -->

            <!-- /page header -->

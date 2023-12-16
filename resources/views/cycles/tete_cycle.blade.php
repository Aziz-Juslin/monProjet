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
     
            <!-- /page header -->
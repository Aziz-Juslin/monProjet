@include('personnel.tete_personnel')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Search field -->
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-3 py-2">
              <h5 style="border-radius: 5px" class="mb-3 bg-slate-700"><i class="icon-user-tie mr-2 m-2 icon-2x text-default-400 p-1 mb-3 mt-1"></i>Mes Personnel</h5>
              <span class="text-muted d-block">
                @if($Personnels->isEmpty())
                <i class="icon-notification2 mr-2"></i> il n'y a pas des personnel <a href="{{route('ajout_personnel')}}">Clique-ici pour ajouter personnel</a> 
                @endif
              </span>
            </div>

            <form action="#">
              <div class="input-group mb-3">
                <div class="form-group-feedback form-group-feedback-left">
                  <input type="text" class="form-control form-control-lg" placeholder="Recherche Personnel">
                  <div class="form-control-feedback form-control-feedback-lg">
                    <i class="icon-search4 text-muted"></i>
                  </div>
                </div>

                <div class="input-group-append">
                  <button type="submit" class="btn btn-light btn-lg">Rechercher</button>
                </div>
              </div>

              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                   <li class="list-inline-item"><a href="{{route('personnel_principal')}}" class="btn btn-link text-default"><i class="icon-reset mr-2"></i> Retour</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
                      <li class="list-inline-item dropdown">
                    <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                      <i class="icon-database mr-2"></i>
                      Archive
                    </a>

                    <div class="dropdown-menu">
                      @foreach($ArchiveCycle as $archive)
                      <a href="#" class="dropdown-item"><i class="icon-database"></i>{{$archive->annee_scolaire}}</a>
                      @endforeach
                    </div>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
       
        <!-- Profile navigation -->
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
                <a href="{{route('personnel')}}" class="navbar-nav-link " >
                  <i class="icon-display mr-2"></i>
                  Personnel
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('personnel_fictif')}}" class="navbar-nav-link {{col_active('personnel_fictif')}}" >
                  <i class="icon-users2 mr-2"></i>
                  Personnel fictif
                  <span class="badge badge-pill bg-blue-800 position-static ml-auto ml-lg-2">{{$Personnel_active->count()}}</span>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('personnel_abandon')}}" class="navbar-nav-link {{col_active('personnel_abandon')}}">
                  <i class="icon-user-cancel mr-2"></i>
                   Personnel quitté
                  <span class="badge badge-pill bg-blue-800 position-static ml-auto ml-lg-2">{{$Personnel_quitte->count()}}</span>
                </a>
              </li>
            
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a data-toggle="modal" data-target="#modal_default" class="navbar-nav-link">
                  <i class="icon-printer mr-2"></i>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        
        <!-- /search field -->

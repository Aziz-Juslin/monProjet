@include('cycles.option.tete_option')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Search field -->
        
        <div class="card bg-slate text-muted">
          <div class="card-body">
            <div class="text-center mb-3 py-2">
              <h5 style="border-radius: 5px" class="mb-3 bg-slate-800"><i class="icon-align-right mr-2 m-2 icon-2x text-default-400 p-1 mb-3 mt-1"></i>{{strtoupper($opt)}}</h5>
              <span class="text-muted d-block">
                @if($EleveParOption->isEmpty())
                <i class="icon-notification2 mr-2"></i> il n'y a pas d'élèves <a href="{{route('ajout_eleve')}}">Clique-ici pour ajouter élève</a> 
                @endif
              </span>
            </div>

            <form action="#">
              <div class="input-group mb-3">
                <div class="form-group-feedback form-group-feedback-left">
                  <input type="text" class="form-control form-control-lg text-white" placeholder="Rechercher dans : {{strtoupper($opt)}}">
                </div>

                <div class="input-group-append">
                  <button type="submit" class="btn bg-slate btn-lg"><i class="icon-search4"></i></button>
                </div>
              </div>

              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                   <li class="list-inline-item"><a href="{{route('option_principal')}}" class="btn btn-link text-default"><i class="icon-reset mr-2"></i> Retour</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
                
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
                <a href="{{route('option', $opt)}}" class="navbar-nav-link {{col_active('option')}}" >
                  <i class="icon-display mr-2"></i>
                  {{strtoupper($opt)}}
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('eleve_fictif_option', $opt)}}" class="navbar-nav-link {{col_active('eleve_fictif_option')}}" >
                  <i class="icon-users2 mr-2"></i>
                  Elèves fictif
                  <span class="badge badge-pill bg-pink-400 position-static ml-auto ml-lg-2">{{$EleveParOption->count()}}</span>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('eleve_abandon_option', $opt)}}" class="navbar-nav-link {{col_active('eleve_abandon_option')}}">
                  <i class="icon-user-cancel mr-2"></i>
                   Elèves abandon
                  <span class="badge badge-pill bg-pink-400 position-static ml-auto ml-lg-2">{{$EleveAbandonParOption->count()}}</span>
                </a>
              </li>
              
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a data-toggle="modal" data-target="#modal_default" class="navbar-nav-link">
                  <i class="icon-printer mr-2"></i>
                  Imprimer liste d'élèves
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        
        <!-- /search field -->

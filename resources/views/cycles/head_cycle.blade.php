<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Search field -->
        <div class="card bg-slate">
            <div class="card-header bg-slate text-center ">
             <h5 class="card-title bg-slate-400  text-center"><i class="icon-stack3  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> {{strtoupper($cicles)}}</h5>
            </div>
          <div class="card-body">
            @if($EleveParCycle->isEmpty())
            <div class="text-center mb-3 py-2">
              <span class="text-muted d-block">
                <i class="icon-notification2 mr-2"></i> il n'y a pas d'élèves dans ce cycle <a href="{{route('ajout_eleve')}}">Clique-ici pour ajouter élève</a> 
              </span>
            </div>
            @endif

            <form action="#">
              <div class="input-group mb-3">
                <div class="form-group-feedback form-group-feedback-right">
                  <input type="text" class="form-control form-control-lg" placeholder="Rechercher dans : {{strtoupper($cicles)}}">
                  <div class="form-control-feedback form-control-feedback-lg">
                     <button style="background: non;" type="submit" class="btn btn-link"><i class="icon-search4 text-muted"></i></button>
                  </div>
                </div>
              </div>

              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                   <li class="list-inline-item"><a href="{{route('cycle_principal')}}" class="btn btn-link text-default"><i class="icon-reset mr-2"></i> Retour</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-md-auto">
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
       
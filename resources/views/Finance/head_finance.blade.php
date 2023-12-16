<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Search field -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-3 bg-pink"><i class="icon-coins mr-2 m-2 icon-2x text-default-400 border-default-400 border-2 rounded-round p-3 mb-3 mt-1"></i> Finance</h5>
              <form action="">
              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline list-inline-condensed mb-0">
                  <li class="list-inline-item dropdown">
                    <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                      <i class="icon-database mr-2"></i>
                      Archivage
                    </a>
                    <div class="dropdown-menu">
                    @foreach($ArchiveCycle as $archive)
                    <a href="#" class="dropdown-item"><i class="icon-calendar"></i> {{$archive->annee_scolaire}}</a>
                    @endforeach
                    </div>
                  </li>
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                </ul>

                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Balance</a></li>
                  <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-menu7 mr-2"></i> Advanced search</a></li>
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
              Voir plus
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a href="{{route('modalite_frais')}}" class="navbar-nav-link" >
                  <i class="icon-display mr-2"></i>
                  Modalité de frais
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="navbar-nav-link" >
                  <i class="icon-users2 mr-2"></i>
                  Elèves fictif
                  <span class="badge badge-pill bg-warning position-static ml-auto ml-lg-2">{{$EleveParCycle->count()}}</span>
                </a>
              </li>
               <li class="nav-item">
                <a href="" class="navbar-nav-link">
                  <i class="icon-user-cancel mr-2"></i>
                   Elèves abandon
                  <span class="badge badge-pill bg-warning position-static ml-auto ml-lg-2">{{$EleveAbandon->count()}}</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="navbar-nav-link">
                  <i class="icon-collaboration mr-2"></i>
                  Elèves par classe
                </a>
              </li>
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a data-toggle="modal" data-target="#modal_default" class="navbar-nav-link">
                  <i class="icon-printer mr-2"></i>
                  Imprimer liste
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-gear"></i>
                  <span class="d-lg-none ml-2">Settings</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item"><i class="icon-image2"></i> Update cover</a>
                  <a href="#" class="dropdown-item"><i class="icon-clippy"></i> Update info</a>
                  <a href="#" class="dropdown-item"><i class="icon-make-group"></i> Manage sections</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item"><i class="icon-three-bars"></i> Activity log</a>
                  <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Profile settings</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- /search field -->

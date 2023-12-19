 <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Search field -->


       <div class="navbar navbar-expand-lg navbar-light">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
              <i class="icon-menu7 mr-2"></i>
              Voir plus d'options
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
                  <li class="nav-item">
                <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-stack mr-2"></i> Trimestre
                  <span class="d-lg-none ml-2"></span>
                </a>
                <div class="dropdown-menu dropdown-menu">
                <a href="" class="dropdown-item"><i class="icon-stack"></i> 1<sup class="mr-2">ère</sup> Trimestre</a>
                <a href="" class="dropdown-item"><i class="icon-stack"></i> 2<sup class="mr-2">ème</sup> Trimestre</a>
                <a href="" class="dropdown-item"><i class="icon-stack"></i> 3<sup class="mr-2">ème</sup> Trimestre</a>
                </div>
              </li>

              <li class="nav-item">
                <a href="{{route('journal_frais')}}" class="navbar-nav-link {{col_active('journal_frais')}}" >
                  <i class="icon-clipboard3 mr-2"></i>
                  Journal de paiement
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('rapport_frais_scolaire')}}" class="navbar-nav-link {{col_active('rapport_frais_scolaire')}}">
                  <i class="icon-stats-growth mr-2"></i>
                  Rapport journalier
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="navbar-nav-link">
                  <i class="icon-stats-growth mr-2"></i>
                  Statistiques
                </a>
              </li>
            </ul>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-list3 mr-2"></i> Modalités de paiement
                  <span class="d-lg-none ml-2"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <a href="{{route('modalité_frais')}}" class="dropdown-item bg-orange"><i class="icon-file-download "></i> Fixé le frais</a>
                  @forelse($cycles as $cycle)
                  <a href="{{route('modalite_fixe', $cycle->slug)}}" class="dropdown-item"><i class="icon-stack-text"></i> {{$cycle->cycle}}</a>
                  @empty
                  <a class="dropdown-item"><i class="icon-notification2"></i> Aucun cycle</a>
                  @endforelse
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- /search field -->


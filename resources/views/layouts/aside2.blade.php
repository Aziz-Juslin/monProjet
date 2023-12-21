


            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content">
                  <!-- Search field -->
                  <!-- Profile navigation -->
                  <div class="navbar navbar-expand-lg navbar-light">
                    <div class="text-center d-lg-none w-100">
                      <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
                        <i class="icon-menu7 mr-2"></i>
                        Plus
                      </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-second">
                      <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link"><i class="{{$infoEcole->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} mr-2"></i> Information de l'école</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{route($photoAdmin->isEmpty() ?  'info_admin' :'admin_show')}}" class="nav-link"><i class="{{$photoAdmin->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} mr-2"></i> Administrateur</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{route($cycles->isEmpty() ?  'cycle_ecole' :'cycle_show')}}" class="nav-link"><i class="{{$cycles->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} mr-2"></i> Cycles</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{route($cycles->isEmpty() ?  'option_ecole' :'option_show')}}" class="nav-link"><i class="{{$options->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} mr-2"></i> Options</a>
                            </li>
                      </ul>

                      <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                          <a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-home mr-2"></i> Accueil
                            <span class="d-lg-none ml-2"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"><i class="icon-calendar"></i> Aucun cycle</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- /search field -->



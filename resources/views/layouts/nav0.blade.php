<!-- Main navbar -->
<!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light navbar-static fixed-top">
         <div class="navbar-header navbar-light d-none d-md-flex align-items-md-center">
            <div class="navbar-brand navbar-brand-md">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>
            
            <div class="navbar-brand navbar-brand-xs">
                <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>
        </div>
        <!-- /header with logos -->
    

        <!-- Mobile controls -->
        <div class="d-flex flex-1 d-md-none">
            <div class="navbar-brand mr-auto">
               <a href="{{route('home')}}" class="d-inline-block">
                <img src="/img/ds.png" alt="">
            </a>
            </div>  

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-menu9 icon-1x"></i>
            </button>

            
        </div>
        <!-- /mobile controls -->


        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-users2 icon-1x"></i>
                        <span class="d-md-none ml-2">Elèves</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Elèves</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                @foreach($Eleves as $eleve)
                                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                                <li class="media">
                                    <div class="mr-3">
                                     @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                                    @else
                                    <img src="/img/user.png" width="36" height="36" class="rounded-circle" alt="">
                                    @endif
                                    </div>
                                    <div class="media-body">
                                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a>
                                        <span class="d-block text-muted font-size-sm">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                                </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="{{route('eleve_liste')}}" class="text-grey mr-auto">Voir tous</a>
                            <a href="#" class="text-grey"><i class="icon-eye"></i></a>
                        </div>
                    </div>
                </li>

               
            </ul>

            <span class="badge bg-light-400 badge-pill ml-md-3 mr-md-auto">{{$Eleves->count()}}</span>

            <ul class="navbar-nav">
                @if(!Route::is('home'))
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-menu9 mr-2"></i>
                        Menu
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body p-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-4">
                                    <a href="{{route('eleve')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-users2 text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">élèves</div>
                                    </a>

                                    <a href="{{route('personnel_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-user-tie text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Personnel</div>
                                    </a>
                                </div>
                                
                                <div class="col-12 col-sm-4">
                                    <a href="{{route('cycle_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-stack3 text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Cycles</div>
                                    </a>

                                    <a href="{{route('option_principal')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-align-right text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Option</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="{{route('modalite_frais')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-coins text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Finance</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-envelope text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Messages</div>
                                    </a>
                                </div>
                                 <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-folder-open text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">documents</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-database text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Archive</div>
                                    </a>
                                </div>
                                 <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-cogs text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Parametres</div>
                                    </a>
                                    <a href="{{route('home')}}" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-home text-slate-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Accueil</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>


                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#" class="text-grey mr-auto">All messages</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                 <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        @if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" width="34" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('admin_show')}}" class="dropdown-item"><i class="icon-user-plus"></i> Mon profil</a>
                        <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-coins"></i> Finance</a>
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                         <i class="icon-exit3"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar content -->
        
    </div>
    <!-- /main navbar -->

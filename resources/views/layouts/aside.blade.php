<!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-fixed sidebar-expand-md">
            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Menu
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->

            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        <div style="background-image: none;" class="card-body text-center bg-slate-800">
                            @foreach($photos as $photo)
                            <a href=""><img src="/Dossier/images_ecole/{{$photo->photo_ecole}}" width="80" height="80" class="rounded-circle " alt=""></a>
                            @endforeach
                            <h6 class="mb-0 text-white text-shadow-dark">{{Auth::user()->ecole}}</h6>
                            <span class="font-size-sm text-white text-shadow-dark">{{Auth::user()->province}}</span>
                        </div>
                                                    
                        <div class="sidebar-user-material-footer bg-indigo">
                            <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>Mon école</span></a>
                        </div>
                    </div>

                    <div class="collapse" id="user-nav">
                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link">
                                    <i class="icon-user-plus"></i>
                                    <span>Profile de l'école</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('modalite_frais')}}" class="nav-link">
                                    <i class="icon-coins"></i>
                                    <span>Finance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-comment-discussion"></i>
                                    <span>Messages</span>
                                    <span class="badge bg-success-400 badge-pill align-self-center ml-auto">58</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link">
                                    <i class="icon-cog5"></i>
                                    <span>Paramettres du compte</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                 <i class="icon-exit3"></i>   
                                 <span> Se déconnecter</span>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->

                
                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                     <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                         <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link {{col_active('home')}}">
                                    <i class="icon-home4"></i>
                                    <span>
                                        Accueil
                                        <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('cycle_principal')}}" class="nav-link"><i class="icon-stack3"></i> <span>Cycles</span></a>
                           
                            </li>
                            <li class="nav-item nav-item-submenu">
                                <a href="{{route('option_principal')}}" class="nav-link {{col_active('option_principal')}}"><i class="icon-align-right"></i> <span>Options</span></a> 
                                
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('eleve')}}" class="nav-link {{col_active('eleve')}}"><i class="icon-users2"></i> <span>Elèves</span></a>
                            </li>
                            <li class="nav-item nav-item-submenu">
                            <a href="{{route('personnel_principal')}}" class="nav-link {{col_active('personnel_principal')}}"><i class="icon-user-tie"></i> <span>Personnel</span></a>
                            
                        </li>
                        <!-- /main -->
                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Structure</div> <i class="icon-menu" title="Forms"></i></li>
                        <li class="nav-item">
                        <a href="{{route('modalite_frais')}}"  class="nav-link {{col_active('modalite_frais')}}"><i class="icon-coins"></i> <span>Finance</span></a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-envelope"></i> <span>Messages</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Messages">
                                <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Nouveau</a></li>
                                <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Boîte de reception</a></li>
                                <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Message envoyé</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-folder-open"></i> <span>Mes Documents</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Mes Documents">
                                <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Elèves</a></li>
                                <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">Personnel</a></li>
                                <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Bureau</a></li>
                                <li class="nav-item"><a href="editor_code.html" class="nav-link">Finance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                                <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
                                <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
                                <li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                                <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                                <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                                <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <!-- /forms -->


                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->
            
        </div>
        <!-- /main sidebar -->


    
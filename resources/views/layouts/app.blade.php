            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        @if(Route::is('home'))
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{Auth::user()->ecole}}</span> - {{Auth::user()->province}}</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        @elseif(Route::is('ajout_eleve'))
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Ajouter</span> - Elève</h4>
                        <a  class="header-elements-toggle text-default d-md-none"><i class="icon-plus3"></i></a>
                        @else
                        @endif
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-bars-alt text-pink-300"></i>
                                <span>Statistics</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calculator text-pink-300"></i>
                                <span>Personnel</span>
                            </a>
                            <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
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
                            <a href="#" class="breadcrumb-elements-item">
                                <i class="icon-comment-discussion mr-2"></i>
                                Notification
                            </a>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear mr-2"></i>
                                    Paramètres
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="dropdown-item"><i class="icon-user-lock"></i> Compte et sécurité</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

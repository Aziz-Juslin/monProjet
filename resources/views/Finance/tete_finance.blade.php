
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                          @if(Route::is('journal_frais') OR Route::is('modalite_fixe') OR Route::is('modalité_frais') OR Route::is('rapport_frais_scolaire'))
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Frais</span> - Scolaires</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                            @elseif(Route::is('journal_caisse') OR Route::is('journal_rapport'))
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Journal</span> - Caisse</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                            @elseif(Route::is('autre_frais') OR Route::is('rapport_autre_frais'))
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Autre</span> - Frais</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                            @else
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Finance</span> - E</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    @endif
                    </div>
                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-bars-alt text-pink-300"></i>
                                <span>Finance</span>
                            </a>
                            <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                                <i class="icon-calculator text-pink-300"></i>
                                <span>Personnel</span>
                            </a>
                            <a href="" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
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
                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-toggle mr-2"></i>
                                    Option
                                </a>

                        <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('journal_frais')}}" class="dropdown-item"><i class="icon-cash3"></i> Frais scolaires</a>
                        <a href="{{route('autre_frais')}}" class="dropdown-item"><i class="icon-cash2"></i> Autres frais</a>
                        <a href="{{route('journal_caisse')}}" class="dropdown-item"><i class="icon-stack-text"></i> Journal de Caisse</a>
                        <a href="" class="dropdown-item"><i class="icon-stack-check"></i> Caisse - E</a>
                                <a href="{{route('modalite_frais')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->

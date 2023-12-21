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
                            <img class="img-fluid" width="100" src="img/d6.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{route('home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Accueil</a>
                            <a href="general_knowledgebase.html" class="breadcrumb-item">{{AnneeScolaire()}}</a>
                        </div>

                        </div>
                </div>
            </div>
            <!-- /page header -->

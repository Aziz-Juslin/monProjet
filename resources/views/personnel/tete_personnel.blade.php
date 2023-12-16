    <div class="content-wrapper mt-4">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h6><i class="icon-user-tie mr-2 icon-2x text-muted"></i> <span class="font-weight-semibold">Personnel </span></h6>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                        <div class="btn-group">
                            <button type="button" class="btn bg-pink " data-toggle="dropdown"><i class="icon-toggle "></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Accès rapide</div>
                                <a href="{{route('ajout_personnel')}}" class="dropdown-item"><i class="icon-user-plus"></i> Ajouter personnel</a>

                                <a href="{{route('personnel')}}" class="dropdown-item"><i class="icon-user-check"></i> Mes personnel</a>
                                <a href="{{route('personnel_principal')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->
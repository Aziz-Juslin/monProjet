<div class="page-content">
<div class="sidebar sidebar-slate-300 sidebar-main sidebar-fixed sidebar-expand-md">
<div class="sidebar-content">
<div class="card card-sidebar-mobile">
<ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- /main -->
<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"><i class="icon-cogs icon-1x mr-2"></i> Configuration compte</div> <i class="icon-cogs icon-1x"></i></i></li>
 
<li class="nav-item">
<a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="nav-link"><i class="{{$infoEcole->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i> <span>Information de l'école</span></a>
</li>

<li class="nav-item">
<a href="{{route($photoAdmin->isEmpty() ?  'info_admin' :'admin_show')}}" class="nav-link"><i class="{{$photoAdmin->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i> <span>Administrateur</span></a>
</li>

<li class="nav-item">
<a href="{{route($cycles->isEmpty() ?  'cycle_ecole' :'cycle_show')}}" class="nav-link"><i class="{{$cycles->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i> <span>Cycles</span></a>
</li>

<li class="nav-item">
<a href="{{route($cycles->isEmpty() ?  'option_ecole' :'option_show')}}" class="nav-link"><i class="{{$options->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i> <span>Options</span></a>
</li>
</ul>
</div>

</div>
</div>

<div class="content-wrapper">
<!-- Page header -->
 <div class="page-header page-header-light">
               

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a  class="breadcrumb-item"><i class="icon-cogs mr-2"></i> Configuration du compte</a>

                            <a  class="breadcrumb-item"><i class="icon-calendar mr-2"></i> {{AnneeScolaire()}}</a>
                            
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                        <div class="breadcrumb-elements-item dropdown p-0">
                        <a style="cursor: default;" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Parametres
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('home')}}" class="dropdown-item"><i class="icon-home"></i> Accueil</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Info blocks -->
<div class="content">
    <div class="row">
        <i class="icon-cogs icon-2x"></i>
        <hr class="text-muted">
         <div class="{{Route::is('home')?'col-lg-6':'col-lg-12'}}">
            <div class="card">
                <div class="card-body text-center">
                    <i class="icon-location4 icon-1x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h6 class="card-title">Info Ecole</h6>
                    <a href="{{route($infoEcole->isEmpty() ?  'info_ecole' :'info_ecole_show')}}" class="{{$infoEcole->isEmpty() ? 'btn bg-blue' :'btn bg-success'}}">
                    Etape 1 <i class="{{$infoEcole->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="{{Route::is('home')?'col-lg-6':'col-lg-12'}}">
            <div class="card">
                <div class="card-body text-center">
                    <i class="icon-user-tie icon-1x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h6 class="card-title">Administrateur</h6>
                    <a href="{{route($photoAdmin->isEmpty() ?  'info_admin' :'admin_show')}}" class="{{$photoAdmin->isEmpty() ? 'btn bg-blue' :'btn bg-success'}}">Etape 2 <i class="{{$photoAdmin->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i></a>
                </div>
            </div>
        </div>
         <div class="{{Route::is('home')?'col-lg-6':'col-lg-12'}}">
            <div class="card">
                <div class="card-body text-center">
                    <i class="icon-grid3 icon-1x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h6 class="card-title">Cycles</h6>
                    <a href="{{route($cycles->isEmpty() ?  'cycle_ecole' :'cycle_show')}}" class="{{$cycles->isEmpty() ? 'btn bg-blue' :'btn bg-success'}}">Etape 3 <i class="{{$cycles->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i></a>
                </div>
            </div>
        </div>
         <div class="{{Route::is('home')?'col-lg-6':'col-lg-12'}}">
            <div class="card">
                <div class="card-body text-center">
                    <i class="icon-stats-bars2 icon-1x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h6 class="card-title">Options</h6>
                    <a href="{{route($cycles->isEmpty() ?  'option_ecole' :'option_show')}}" class="{{$options->isEmpty() ? 'btn bg-blue' :'btn bg-success'}}">Etape 4  <i class="{{$options->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i></a>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- /info blocks ($photos->isEmpty() AND $infoEcole->isEmpty() AND $options->isEmpty() AND $cycles->isEmpty())
       <div class="col-lg-12">
            <div class="card">

                <div class="card-body text-center">
                    <i class="icon-collaboration icon-1x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h6 class="card-title">Multiple gestion</h6>
                    <a href="{{route($gestions->isEmpty() ?  'gestion_ecole' :'gestion_info')}}" class="{{$gestions->isEmpty() ? 'btn bg-blue' :'btn bg-success'}}">Etape 5 <i class="{{$gestions->isEmpty() ? 'icon-plus3' :'icon-checkmark4'}} ml-2"></i></a>
                </div>
            </div>
        </div>

    -->

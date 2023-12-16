     <div class="content-wrapper mt-4">
    <div class="page-header ">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-align-right mr-2 icon-2x text-muted"></i> <span class="font-weight-semibold">Option</span></h4>
                        <a href="#" class="header-elements-toggle text-muted d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements  d-none text-center text-md-left mb-3 mb-md-0">
                        <div class="btn-group bg-slate">
                            <button type="button" class="btn bg-default dropdown-toggle" data-toggle="dropdown"> <i class="icon-toggle "></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Accès rapide</div>
                         @forelse($options as $option)   
                        <a href="{{route('option', $option->option)}}" class="dropdown-item"><i class="icon-align-right"></i> {{$option->option}}</a>
                        @empty
                        <a  class="dropdown-item"><i class="icon-align-right"></i> Aucun option</a>
                        @endforelse
                        <a href="{{route('option_principal')}}" class="dropdown-item"><i class="icon-reset"></i> Retour</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->
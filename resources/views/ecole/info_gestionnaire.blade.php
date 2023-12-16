@extends('layouts.master', ['title' => Auth::user()->ecole])
@section('section')
<!-- Main content -->
@include('layouts.aside2')     
<!-- Content area -->
            <!-- Content area -->
            <div class="content">
                @include('ecole.message_ecole')
                
                <!-- Form validation -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Photos Admin</h5>
                        
                    </div>
                    <div class="card-body">
                      <div class="row">
                    @foreach($gestions as $gestion)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">

                            <div class="card-img-actions mx-1 mt-1">
                                <img class="card-img img-fluid" src="/Dossier/images_gestionnaire/{{$gestion->photo_gestionnaire}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/Dossier/images_gestionnaire/{{$gestion->photo_gestionnaire}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>

                                    <a href="{{route('gestion_show', [$gestion->id, Auth::user()->name])}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                        <i class="icon-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="d-flex align-items-start flex-nowrap">
                                    <div>
                                        <div class="font-weight-semibold mr-2">{{$gestion->nom}}</div>
                                        <span class="font-size-sm text-muted">Gestionnaire</span>
                                    </div>

                                    <div class="list-icons list-icons-extended ml-auto">
                                        <a href="{{route('gestion_show', [$gestion->id, Auth::user()->name])}}" class="list-icons-item"><i class="icon-compose top-0"></i></a>
                                        <a href="{{route('admin_destroy', [$gestion->id, Auth::user()->name])}}" class="list-icons-item"><i class="icon-bin top-0"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                    </div>

                
            

            </div>
            <!-- /content area -->         


@include('layouts.footer')
@endsection

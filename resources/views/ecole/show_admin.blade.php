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
                         <legend class="text-uppercase font-size-sm font-weight-bold">Photo d'administrateur</legend>
                        
                    </div>
                    <div class="card-body">
                      <div class="row">
                    @foreach($photoAdmin as $photo)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">

                            <div class="card-img-actions mx-1 mt-1">
                                <img class="card-img img-fluid" src="/Dossier/images_admin/{{$photo->photo_user}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/Dossier/images_admin/{{$photo->photo_user}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>

                                    <a href="{{route('edit_photo_admin', [$photo->id, Auth::user()->name])}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                        <i class="icon-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="d-flex align-items-start flex-nowrap">
                                    <div>
                                        <div class="font-weight-semibold mr-2">{{Auth::user()->name}}</div>
                                        <span class="font-size-sm text-muted">Administrateur</span>
                                    </div>

                                    <div class="list-icons list-icons-extended ml-auto">
                                        <a href="{{route('edit_photo_admin', [$photo->id, Auth::user()->name])}}" class="list-icons-item"><i class="icon-compose top-0"></i></a>
                                        <a href="{{route('admin_destroy', [$photo->id, Auth::user()->name])}}" class="list-icons-item"><i class="icon-bin top-0"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                    </div>

                       <!-- Form validation -->
                <div class="card">
                  
                    @foreach($Admin as $ecole)
                    <div class="card-body">
                        
                        <form  action="{{route('update_admin', $ecole->id)}}" method="POST" >
                        @csrf
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Information d'administrateur</legend>
                                 <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="nom" class="form-control" value="{{$ecole->nom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /basic text input -->
                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Sexe <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="sexe" class="form-control" value="{{$ecole->sexe}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                                <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Date de naissance <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="date_ne" class="form-control" value="{{$ecole->date_ne}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /basic text input -->

                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Etat civil <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="etat_civil" class="form-control" value="{{$ecole->etat_civil}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->

                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Niveau d'étude <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <select style="border: none;" class="form-control" name="qualification" id="exampleSelect1">
                                    <option >{{$ecole->qualification}}</option> 
                                    <option value="SRF">SRF</option> 
                                    <option value="D6">D6</option> 
                                    <option value="Gradué">Gradué</option> 
                                    <option value="Licencié">Licencié</option> 
                                    <option value="Docteur">Docteur</option> 
                                    <option value="S.E">S.E</option> 
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Téléphone <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="phone" class="form-control" value="{{$ecole->phone}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn bg-indigo ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
                <!-- /form validation -->
            

            </div>
            <!-- /content area -->         


@include('layouts.footer1')
@endsection

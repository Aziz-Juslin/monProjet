@extends('layouts.master3', ['title' => Auth::user()->ecole])
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
                         <legend class="text-uppercase font-size-sm font-weight-bold">Modifier la photo</legend>

                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            @foreach($photoAdmin as $photo)
                            <div class="card-img-actions mx-1 mt-1">
                                <img class="card-img img-fluid" src="/Dossier/images_admin/{{$photo->photo_user}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/Dossier/images_admin/{{$photo->photo_user}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    </div>
                    </div>
                    </div>

                    <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Choisissez une autre photo</h5>
                    </div>
                    <div class="card-body">
                          <form action="{{route('mod_photo_admin', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                        <input type="file" name="photo_admin" class="form-control-uniform-custom form-control">
                                        @error('photo_admin')
                                             <span class="text-left text-muted">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="d-flex justify-content-start align-items-center">
                                <button type="submit" class="btn bg-indigo ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                            </div>
                            </div>
                         </form>
                    </div>
                     @endforeach
                    </div>
            </div>

@include('layouts.footer1')
@endsection

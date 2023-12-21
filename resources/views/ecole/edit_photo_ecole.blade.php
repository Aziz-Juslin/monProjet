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
                            @foreach($photos as $photo)
                            <div class="card-img-actions mx-1 mt-1">
                                <img class="card-img img-fluid" src="/Dossier/images_ecole/{{$photo->photo_ecole}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/Dossier/images_ecole/{{$photo->photo_ecole}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
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
                          <form action="{{route('photo_update', $photo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                  <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="file" name="photo_ecole" class="form-control-uniform-custom">
                                        @error('photo_ecole')
                                             <span class="text-left text-muted">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start align-items-center">
                                <button type="submit" class="btn bg-blue ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                         </form>
                    </div>
                     @endforeach
                    </div>
            </div>
<!-- /content area -->
@include('layouts.footer1')
@endsection

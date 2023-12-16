@extends('layouts.master1', ['title'=> 'photo-personnel'])
@section('section')
@include('personnel.head_personnel')               
 <div class="card">
<div class="card-header header-elements-inline">
<legend class="text-uppercase font-size-sm font-weight-bold">Photo du Personnel</legend>            
            </div>
                <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            @foreach($VoirPersonnel as $personnel)
                            <div class="card-img-actions mx-1 mt-1">
                                @if(!$personnel->photo_personnel == '')
                                    <img src="/uploads/image_personnel/{{$personnel->photo_personnel}}" class="card-img img-fluid" alt="">
                                    @else
                                    <img src="/img/user.png" class="card-img img-fluid" alt="">
                                  @endif
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/uploads/image_personnel/{{$personnel->photo_personnel}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
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
                        @foreach($VoirPersonnel as $photo)
                          <form action="{{route('update_photo_personnel', [$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                               <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="file" name="photo_personnel" class="form-control-uniform-custom">
                                        @error('photo_personnel')
                                             <span class="text-left text-muted">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start align-items-center">  
                                <button type="submit" class="btn bg-info-400 ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                         </form>
                         @endforeach
                    </div>
                     
                    </div>
                    </div>

@include('personnel.foot_perso')
@include('layouts.footer1')
@stop                   
       
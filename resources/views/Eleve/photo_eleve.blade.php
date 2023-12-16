@extends('layouts.master1', ['title'=> 'Elève'])
@section('section')
@include('Eleve.tete')
@include('Eleve.head1_eleve')           
    <div class="content"> 
 <div class="card">
   <div class=" media-list media-list-linked">
        <span class="  media bg-light font-weight-semibold py-2">Photo de profile</span>
          </div>
    <div class="card-header">                      
        </div>
        <div class="card-body text-center">
                            @foreach($VoirElevePhoto as $eleve)
                            <div class="card-img-actions mx-1 mt-1">
                                @if(!$eleve->photo_eleve == '')
                                    <img style="width: 200px; height: 200px; border-radius: 50%"  src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="card-img img-fluid" alt="">
                                    @else
                                    <img src="/img/user.png" class="card-img img-fluid" alt="">
                                  @endif
                                <div class="card-img-actions-overlay card-img">
                                    <a href="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    </div>
                    <div class="card">
                    <div class=" media-list media-list-linked">
                    <span class="  media bg-light font-weight-semibold py-2">Changer photo</span>
                      </div>
                    <div class="card-body">
                        @foreach($VoirElevePhoto as $photo)
                          <form action="{{route('update_photo_eleve', $photo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="file" name="photo_eleve" class="form-control-uniform-custom">
                                        @error('photo_eleve')
                                             <span class="text-left text-muted">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                <div class="d-flex justify-content-start align-items-center mt-5">  
                                <button type="submit" class="btn bg-warning-400 font-weight-bold ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                            </div>
                         </form>
                         @endforeach
                    </div>
                    </div>
                    </div>
                    </div>
@include('layouts.footer1')
@stop                   
                <!-- Form validation -->
               
                
   

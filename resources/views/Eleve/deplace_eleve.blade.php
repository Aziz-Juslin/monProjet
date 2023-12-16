@extends('layouts.master1', ['title'=> 'Elève'])
@section('section')
@include('Eleve.tete')
<div class="content-wrapper">
  @foreach($VoirElevePhoto as $eleve)
  <div class="">
    @include('ecole.message_ecole')
          <div class="card-header header-elements-inline">
            <h5 class="card-title">
               @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                @else
                <img src="/img/user.png" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
              @endif
              {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
          </div>
          </div>
        <!-- Page header -->
         

  
<!-- Content area -->
            <div class="content">

                <!-- Simple lists -->
                <div class="row">
                

                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">

                        <!-- Custom handle -->
                        <div class="card">
                            <div class="card-header bg-slate header-elements-inline">
                                <h5 class="card-title">Ecoles</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                         <h5 class="card-title">Transfère de l'élève</h5>
                                    </div>
                                </div>
                            </div>

                            <ul class="media-list media-list-linked">
                                @foreach($ecoles as $ecole)
                                <li>
                                    <div class="media">
                                        <div class="mr-3">
                                        @if(!$ecole->photo_ecole == '')
                                        <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="rounded-circle" width="40" height="40" alt="">
                                        @else
                                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
                                        @endif
                                      </div>
                                        <div class="media-body">
                                            <div class="media-title font-weight-semibold">{{ucfirst($ecole->ecole)}}</div>
                                            <span class="text-muted">{{ucfirst($ecole->province)}}</span>
                                        </div>
                                        <div class="align-self-center ml-3">
                                            <a href="#" class="text-default" data-toggle="collapse" data-target="#james2">
                                                <i class="icon-menu7"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse" id="james2">
                                        <div class="card-body bg-light border-top border-bottom">
                                        <ul class="list list-unstyled mb-0">
                                        <li><i class="icon-pin mr-2"></i> {{$ecole->province}}</li>
                                        <li><i class="icon-user-tie mr-2"></i> {{ucfirst($ecole->name)}}</li>
                                        <li><i class="icon-phone mr-2"></i> {{ucfirst($ecole->telephone)}}</li>
                                        <li ><i class="icon-clippy mr-2"></i> <a class="btn btn-info text-white" href="{{route('emplacement_eleve', [$ecole->id, $eleve->code_eleve])}}">Transférer ici</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </li>
                                @endforeach
                                </ul>                
                </div>
                <!-- /video call modal -->
            </div>
             <div class="col-md-2">
        </div>
    </div>
</div>
</div>
</div>
</div>

@endforeach      <!-- /content area -->
@include('layouts.footer1')
@stop                   
                <!-- Form validation -->
               
                
   

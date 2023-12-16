@extends('layouts.master1', ['title'=> 'Elève quitté'])
@section('section')
<div class="content-wrapper">
  @include('Eleve.tete')
      <!-- Content area -->
      <div class="content">
        <!-- Simple lists -->
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <!-- Custom handle -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h5 class="card-title font-weight-semibold">Liste</h5>
                <div class="header-elements">
                  <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                          </div>
                        </div>
              </div>

              <ul class="media-list media-list-linked">
               <li class="media bg-light font-weight-semibold py-2">Elève Abandon</li>
                @forelse($EleveQuitter as $eleve)
                <li>
                  <div class="media">
                    <div class="mr-3">
                     @if(!$eleve->photo_eleve == '')
                        <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                        @else
                        <img src="/img/user.png" width="40" height="40" class="rounded-circle" alt="">
                        @endif
                    </div>
                    <div class="media-body">
                      <div class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</div>
                      <span class="text-muted">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}</span>
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
                        <li><i class="icon-pin mr-2"></i> {{$eleve->sexe}}</li>
                        <li><i class="icon-user-tie mr-2"></i> {{$eleve->classe}}</li>
                        <li><i class="icon-location4 mr-2"></i> {{$eleve->cycle}}</li>
                        <li> <a class="btn bg-success-400" href="{{route('active',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">Réstorer l'élève</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                @empty
                <div class=" text-center mt-3 text-muted">
                  <h6 class="card-title">
                    <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
                </div>
                @endforelse
              </ul>
            </div>
            <!-- /custom handle -->
            
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <!-- /collapsible lists -->
</div>

@include('layouts.footer1')
@stop
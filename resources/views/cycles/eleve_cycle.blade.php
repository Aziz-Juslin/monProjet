@extends('layouts.master1', ['title'=> $cicles])
@section('section')
@include('cycles.tete_cycle')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Customers -->
        <div class="">
         <div class="card-header bg-slate text-center ">
             <h5 class="card-title bg-slate-400  text-center"><i class="icon-users2  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> Elève fictif</h5>
            </div>
         
        @if(!$EleveParCycle->isEmpty())
        
            <div class="card card-body">
              @foreach($EleveParCycle as $eleve)
              <div class="media">
                <div class="mr-3">
                  <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}">
                    @if(!$eleve->photo_eleve == '')
                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="52" height="52" class="rounded-circle" alt="">
                        @else
                        <img src="/img/user.png" width="52" height="52" class="rounded-circle" alt="">
                    @endif
                  </a>
                </div>

                <div class="media-body">
                  <h6 class="mb-0">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h6>
                  <span class="text-muted">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}} | Classe: {{$eleve->classe}}</span>
                </div>

                <div class="ml-3 align-self-center">
                  <div class="list-icons">
                              <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-eye"></i> Voir plus</a>
                        <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" class="dropdown-item eleve"><i class="icon-bin "></i> Supprimer</a>
                        <a href="{{route('eleve_info', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-pencil7"></i> Modifier</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                      </div>
                              </div>
                            </div>
                </div>
              </div>
              <hr class="text-muted mt-1">
              @endforeach
            </div>
            <!-- /inline user card -->
        <!-- Customers -->
            
           @else
          <div class=" text-center mt-3 text-muted">
            <h6 class="card-title">
              <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
          </div>
          @endif
        </div>
        <!-- /customers -->
      
  <!-- /customers -->
@include('cycles.footer_cycle')
@include('layouts.footer1')
@stop
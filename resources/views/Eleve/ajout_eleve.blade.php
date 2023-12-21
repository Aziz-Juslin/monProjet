@extends('layouts.master3', ['title'=> 'Ajouter élève'])
@section('section')
<div class="content-wrapper">
@include('Eleve.tete')
<div class="content">
@include('ecole.message_ecole')
<!-- Form action components -->
<div class="row">

<div class="col-md-9">
@if(!$cycles->isEmpty())
 @include('Eleve.form')
@else
<div class="row">
<div class="col-md-12">
         <!-- Left aligned buttons -->
<div class="card">
<div class="text-center text-muted p-5">
<i style="font-size: 50px" class="icon-notification2"></i><br>
<h4>Impossible d'ajouter l'élève, aucun cycle n'est séléctioné.</h4>
</div>
</div>
</div>
</div>
@endif
</div>

<div class="col-md-3">
<div class="">


                            <ul class="media-list media-list-linked">
                                <li class="media  font-weight-semibold py-2">Elèves recents</li>
                                 @forelse($EleveRecent as $eleve)
                                <li>
                                    <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="media">
                                        <div class="mr-3">@if(!$eleve->photo_eleve == '')
                        <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                        @else
                        <img src="/img/user.png" width="40" height="40" class="rounded-circle" alt="">
                        @endif</div>

                                        <div class="media-body">
                                            <div class="media-title font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</div>
                                            <span class="text-muted">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m', strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}}</span>
                                        </div>

                                    </a>
                                </li>
                                @empty
                            <div class=" text-center mt-3 text-muted">
                            <img class="image-cicle  mr-2" width="200" height="225" src="./img/copy.png">
                            <h6 class="card-title">

                            <br> Aucun élève ici</h6>
                              </div>
                             @endforelse



                            </ul>
                        </div>
</div>
</div>
</div>
</div>
@include('layouts.footer1')
@stop

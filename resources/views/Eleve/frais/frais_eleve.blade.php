@extends('layouts.master1', ['title'=> 'paiement trimestriel de frais scolaires'])
@section('section')
@include('Eleve.tete')  
@foreach($VoirElevePhoto as $eleve)
  <div class="">
   @include('ecole.message_ecole')
          <div class="card-header bg-light header-elements-inline">
            <h5 class="card-title">
               @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                @else
                <img src="/img/user.png" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
              @endif
              {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
              
          </div>
          </div>
@endforeach    
@include('Eleve.frais.trimestre')                              
</div>
@include('Eleve.aside_eleve')
@include('layouts.footer1')
@stop                   
       
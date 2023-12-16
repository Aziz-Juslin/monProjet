@foreach($VoirElevePhoto as $eleve)
<div class="">
          <div class="card-header bg-slate-700 header-elements-inline">
            <h5 class="card-title">
               @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                @else
                <img src="/img/user.png" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
              @endif
              {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5>
          <h5 class="card-title"><a class="text-white" href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}"><i class="icon-reset"></i></a></h5>
    </div>
</div>
<!-- Page header -->
@endforeach
        
<!-- /profile navigation -->

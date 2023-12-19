@include('Eleve.tete')
<div class="content-wrapper">
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
          </div>
          </div>
        <!-- Page header -->
        <div class="profile-cover">
          <div class="profile-cover-img bg-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-position:center"></div>
          <div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
            <div class="mr-md-3 mb-2 mb-md-0">
              <a  class="profile-thumb">
              @if(!$eleve->photo_eleve == '')
                <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="border-white rounded-circle" width="48" height="48" alt="">
                @else
               <img src="/img/user.png" class="border-white rounded-circle" width="48" height="48" alt="">
              @endif
               </a>
            </div>
            <div class="media-body text-white">
              <h1 class="mb-0">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h1>
              <span class="d-block">{{$eleve->code_eleve}}</span>
            </div>
            <div class="ml-md-3 mt-2 mt-md-0">
              <ul class="list-inline list-inline-condensed mb-0">
                <li class="list-inline-item"><a class="btn bg-slate border-transparent"><i class="{{$eleve->active == 0 ?'icon-unlocked2':'icon-lock'}}"></i> </a></li>
              </ul>
            </div>
          </div>
        </div>
         @endforeach
        <!-- /cover area -->
        <div class="navbar navbar-expand-lg navbar-light bg-light-300">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
              <i class="icon-menu7 mr-2"></i>
              Voir plus
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
              @foreach($VoirElevePhoto as $eleve)
              <li class="nav-item">
                <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_show')}}">
                  <i class="icon-display mr-2"></i>
                  {{ucfirst($eleve->nom)}}
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('eleve_info',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_info')}}">
                  <i class="icon-user mr-2"></i>
                  Information de l'élève
                </a>
              </li>
              <li class="nav-item">
                <a href="#notes" class="navbar-nav-link" >
                  <i class="icon-folder-download mr-2"></i>
                   Dossier de l'élève
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('eleve_photo',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_photo')}}" >
                  <i class="icon-images2 mr-2"></i>
                   Profil de l'élève
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('frais_eleve')}}">
                  <i class="icon-bookmark4 mr-2"></i>
                  Paiement Trimestriel
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('eleve_recu',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('eleve_recu')}}" >
                  <i class="icon-clipboard3 mr-2"></i>
                   Preuve de paiement FS
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('autreFrais',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="navbar-nav-link {{col_active('autreFrais')}}" >
                  <i class="icon-cash2 mr-2"></i>
                   Autres frais
                </a>
              </li>
            </ul>
            <ul class="nav navbar-nav ml-lg-auto">
              <li class="nav-item">
              <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="icon-gear"></i>
                <span class="d-lg-none ml-2">Parametres</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="{{route($eleve->active ==  0 ?'desactive':'active',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="{{$eleve->active == 0 ?'icon-lock':'icon-unlocked2'}}"></i> {{$eleve->active == 0 ?'Bloqué':'Débloqué'}}</a>
                  <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" data-image="{{$eleve->photo_eleve}}" class="dropdown-item eleve"><i class="icon-bin"></i> Supprimer</a>
                  <div class="dropdown-divider"></div>
                  <a href="{{route('deplace_eleve',[$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-clippy"></i> Transférer à une école</a>
                </div>
              </li>
            </ul>
            @endforeach
          </div>
        </div>
<!-- /profile navigation -->
<div class="content">
<div class="d-flex align-items-start flex-column flex-md-row">
<div class="tab-content w-100 order-2 order-md-1">
<div class="tab-pane fade active show" id="activity">
<div class="">

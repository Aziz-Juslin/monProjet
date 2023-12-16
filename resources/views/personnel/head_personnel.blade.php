<div class="content-wrapper">
  @foreach($VoirPersonnel as $personnel)
  <div class="">
  @include('ecole.message_ecole')
          <div class="card-header bg-slate-800 header-elements-inline">
            <h5 class="card-title">
               @if(!$personnel->photo_personnel == '')
                <img src="/uploads/image_personnel/{{$personnel->photo_personnel}}" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
                @else
                <img src="/img/user.png" class="border-white rounded-circle mr-2" width="25" height="25" alt="">
              @endif
          {{$personnel->nom}} {{$personnel->post_nom}} {{$personnel->prenom}}</h5>
          </div>
          </div>
        <!-- Page header -->
        <div class="profile-cover">
          <div class="profile-cover-img" style="background-image: url(/uploads/image_personnel/{{$personnel->photo_personnel}})"></div>
          <div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
            <div class="mr-md-3 mb-2 mb-md-0">
              <a  class="profile-thumb">
              @if(!$personnel->photo_personnel == '')
                <img src="/uploads/image_personnel/{{$personnel->photo_personnel}}" class="border-white rounded-circle" width="48" height="48" alt="">
                @else
               <img src="/img/user.png" class="border-white rounded-circle" width="48" height="48" alt="">
              @endif
               </a>
            </div>
            <div class="media-body text-white">
              <h1 class="mb-0">{{$personnel->nom}} {{$personnel->post_nom}} {{$personnel->prenom}}</h1>
              <span class="d-block">UX/UI designer</span>
            </div>
            <div class="ml-md-3 mt-2 mt-md-0">
              <ul class="list-inline list-inline-condensed mb-0">
                <li class="list-inline-item"><a class="{{$personnel->active == 0 ?'btn btn-warning text-white':'btn btn-danger text-white'}} border-transparent"><i class="{{$personnel->active == 0 ?'icon-unlocked2':'icon-lock'}}"></i> </a></li> 
              </ul>
            </div>
          </div>
        </div>
         @endforeach
        <!-- /cover area -->
        <div class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
              <i class="icon-menu7 mr-2"></i>
              Voir plus
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-second">
            <ul class="nav navbar-nav">
              @foreach($VoirPersonnel as $personnel)
              <li class="nav-item">
                <a href="{{route('voir_personnel', [$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" class="navbar-nav-link {{col_active('voir_personnel')}}">
                  <i class="icon-user-tie mr-2"></i>
                  {{ucfirst($personnel->nom)}}
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="navbar-nav-link">
                  <i class="icon-calendar3 mr-2"></i>
                  Paiement
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{route('personnel_info', [$personnel->id, $personnel->nom, $personnel->post_nom, $personnel->prenom])}}" class="navbar-nav-link {{col_active('personnel_info')}}">
                  <i class="icon-user-tie mr-2"></i>
                  Profil du personnel
                </a>
              </li>
              <li class="nav-item">
                <a href="#notes" class="navbar-nav-link" >
                  <i class="icon-stack-text mr-2"></i>
                   Notes
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('personnel_photo', [$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" class="navbar-nav-link {{col_active('personnel_photo')}}" >
                  <i class="icon-images2 mr-2"></i>
                   Photos
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
                  <a href="{{route($personnel->active ==  0 ?'personnel_desactive':'personnel_active',[$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" class="dropdown-item"><i class="{{$personnel->active == 0 ?'icon-lock':'icon-unlocked2'}}"></i> {{$personnel->active == 0 ?'Bloqué':'Débloqué'}}</a>
                  <a href="#" class="dropdown-item"><i class="icon-clippy"></i> Update info</a>
                  <a href="#" class="dropdown-item"><i class="icon-make-group"></i> Manage sections</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item"><i class="icon-three-bars"></i> Activity log</a>
                  <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Profile settings</a>
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
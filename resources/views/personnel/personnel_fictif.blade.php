@extends('layouts.master1', ['title'=> 'Personnel'])
@section('section')
@include('personnel.headPersonnel')
  <div class="content-wrapper">
      <div class="content">
        <div class="card">
          <div class="card-header text-center">
            <h5 class="card-title bg-light"><i class="icon-user-tie mr-2 m-2 icon-1x text-default-400  p-2 mb-3 mt-1 mr-2"></i> Personnel fictif</h5>
          </div>
           @if(!$Personnel_active->isEmpty())
          <table class="table table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Fonction</th>
                <th>Année</th>
                <th>Status</th>
                <th>Actions</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($Personnel_active as $personnel)
              <tr>
                <td>
                  <div class="media">
                    <div class="mr-3">
                      <a>
                        @if(!$personnel->photo_personnel == '')
                        <img src="/uploads/image_personnel/{{$personnel->photo_personnel}}" width="40" height="40" class="rounded-circle" alt="">
                        @else
                        <img src="/img/user.png" width="40" height="40" class="rounded-circle" alt="">
                        @endif
                      </a>
                    </div>
                    <div class="media-body align-self-center">
                      <a  class="font-weight-semibold">{{$personnel->nom}} {{$personnel->post_nom}} {{$personnel->prenom}}</a>
                      <div class="text-muted font-size-sm">
                       {{$personnel->sexe == 'M'? 'Engagé':'Engagée'}} le {{date('d M, Y', strtotime($personnel->created_at))}}
                      </div>
                    </div>
                  </div>
                </td>
                <td><a>{{$personnel->sexe}}</a></td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="icon-infinite font-size-base text-warning mr-2"></i>
                      {{$personnel->fonction}}
                    </li>
                    <li>
                      <i class="icon-checkmark3 font-size-base text-success mr-2"></i>
                      {{$personnel->qualification}}
                    </li>
                  </ul>
                </td>
                <td>{{$personnel->annee_scolaire}}</td>
                <td><span class="{{$personnel->active != 0 ? 'badge badge-danger': 'badge badge-warning'}}">{{$personnel->active != '0' ? 'Désactivé': 'Activé'}}</span></td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a  class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('voir_personnel', [$personnel->id, $personnel->nom, $personnel->post_nom, $personnel->prenom])}}" class="dropdown-item"><i class="icon-users2"></i> Afficher</a>
                        <a href="{{route('delete_personnel', [$personnel->id, $personnel->slug])}}" class="dropdown-item"><i class="icon-bin"></i> Supprimer</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="pl-0"></td>
              </tr>
               @endforeach
            </tbody>
          </table>
           @else
          <div class=" text-center mt-3 text-muted">
            <h6 class="card-title">
              <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun personnel</h6>
          </div>
          @endif
        </div>
        <!-- /customers -->
      </div>
      </div>
      </div>
@include('layouts.footer1')
@stop
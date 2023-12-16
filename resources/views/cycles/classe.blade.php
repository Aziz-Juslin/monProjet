@extends('layouts.master1', ['title'=> $cicles])
@section('section')
@include('cycles.tete_cycle')
<div class="content-wrapper">
      <div class="content">
         <div class="row">
          <div class="col-xl-12">
                @include('cycles.form')   
              </div>
            <div class="col-xl-12">
            <div class="card">
            <div class="card-header bg-slate header-elements-inline card">
            <h6 class="card-title"><i class="icon-collaboration mr-2 icon-1x p-0 mb-2 mt-1 mr-2"></i> {{$classe == ''?"Classe":"$classe $cicles $local $optio"}}</h6>
          </div>
           @if(!$classe == '')
          <table class="table table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Classe</th>
                <th>Année</th>
                <th>Status</th>
                <th>Actions</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($AfficheClasse as $eleve)
              <tr>
                <td>
                  <div class="media">
                    <div class="mr-3">
                       <a>
                        @if(!$eleve->photo_eleve == '')
                        <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="40" height="40" class="rounded-circle" alt="">
                        @else
                        <img src="/img/user.png" width="40" height="40" class="rounded-circle" alt="">
                        @endif
                      </a>
                    </div>

                    <div class="media-body align-self-center">
                      <a  class="font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</a>
                      <div class="text-muted font-size-sm">
                       {{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d M, Y', strtotime($eleve->created_at))}}
                      </div>
                    </div>
                  </div>
                </td>
                
                <td><a href="#">{{$eleve->sexe}}</a></td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="icon-infinite font-size-base text-warning mr-2"></i>
                      {{$eleve->classe}}
                    </li>
                    <li>
                      <i class="icon-checkmark3 font-size-base text-success mr-2"></i>
                      {{$eleve->cycle}}
                    </li>
                  </ul>
                </td>
                <td>{{$eleve->annee_scolaire}}</td>
                <td><span class="{{$eleve->active != 0 ? 'badge badge-danger': 'badge badge-warning'}}">{{$eleve->active != '0' ? 'Désactivé': 'Activé'}}</span></td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a href="#" class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-users2"></i> Afficher</a>
                        <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" class="dropdown-item"><i class="icon-bin"></i> Supprimer</a>
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
              <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucune classe séléctionée</h6>
          </div>
          @endif
        </div>
                    </div>
                </div>
@include('cycles.footer_cycle')
@include('layouts.footer1')
@stop
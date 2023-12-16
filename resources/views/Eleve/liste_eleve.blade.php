@extends('layouts.master1', ['title'=> 'repertoire des élèves'])
@section('section')
<div class="content-wrapper">
  @include('Eleve.tete')
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
         <div class="col-md-3">
          <div class="card">
            <div class="card-header ">
          <div data-toggle="modal" data-target="#ajout" class="btn bg-orange-400 btn-block mt-1">
            <span class="text-uppercase  font-size-sm font-weight-semibold"><i class="icon-user-plus mr-2"></i>Ajouter élève</span>
                </div>
                <div class="mt-4">
               </div>
                <div class="card-header bg-transparent header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                </div>
                <div class=" border-0 p-0">
                  <ul class="nav nav-sidebar ">
                    @foreach($ArchiveCycle as $archive)
                      <li class="nav-item ">
                      <a href="" class="nav-link"><i class="icon-arrow-right13"></i>{{$archive->annee_scolaire}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                </div>
                </div>
                </div>
              <!-- /categories -->

        <div class="col-md-9">
             <div class="card">
                    <div class="card-body">

                        <form action="{{route('eleve_liste')}}" method="get">
                          @csrf
                            <div class="input-group mb-3">
                                <div class="form-group-feedback form-group-feedback-left">
                                    <input type="text" name="qbjnnknknk1047" class="form-control form-control-lg" placeholder="Tapez le nom de la recherche">
                                    <div class="form-control-feedback form-control-feedback-lg">
                                        <i class="icon-search4 text-muted"></i>
                                    </div>
                                </div>

                                <div class="input-group-append">
                                    <button type="submit" class="btn bg-light btn-lg">Recherche</button>
                                </div>
                            </div>

                            <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                                <ul class="list-inline list-inline-condensed mb-0">
                                    <li class="list-inline-item dropdown">
                                        <a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-stack2 mr-2"></i>
                                            All categories
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item"><i class="icon-question7"></i> Getting started</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-calendar mr-2"></i> {{AnneeSco()}}</a></li>
                                </ul>

                                <ul class="list-inline mb-0 ml-md-auto">
                                    <li class="list-inline-item"><a  class="btn btn-link text-default"><i class="icon-users4 mr-2"></i> {{$Eleves->count()}} {{count_number('Elève', $Eleves->count())}}</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /search field -->

          <div class="card-body">
            @if($Eleves->isEmpty())
            <div class="text-center mb-3 py-2">
              <span class="text-muted d-block">
                 il n'y a pas d'élèves <a href="{{route('ajout_eleve')}}">Clique-ici pour ajouter élève</a>
              </span>
            </div>
            @endif


          @if(!$Eleves->isEmpty())
            <div class="row">
          @foreach($Eleves as $eleve)
          <div class="col-md-6">
            <div class="card card-body">
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
                  <h6 class="mb-0 font-weight-semibold">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h6>
                  <span class="text-muted">{{$eleve->sexe == 'M'? 'inscrit':'inscrite'}} le {{date('d', strtotime($eleve->created_at))}} {{AfficheMois(date('m', strtotime($eleve->created_at)))}} {{date('Y', strtotime($eleve->created_at))}} | Classe: {{$eleve->classe}} {{$eleve->cycle}}</span>
                </div>

                <div class="ml-3 align-self-center">
                  <div class="list-icons">
                              <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="dropdown-item"><i class="icon-eye"></i> Voir plus</a>
                        <a data-id="{{$eleve->id}}" data-name="{{$eleve->nom}}" class="dropdown-item eleve"><i class="icon-bin "></i> Supprimer</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                      </div>
                              </div>
                            </div>
                </div>
              </div>
              </div>
              </div>
              @endforeach

            <!-- /inline user card -->
        <!-- Customers -->

           @else
          <div class=" text-center mt-3 text-muted">
            <h6 class="card-title">
              <i class="icon-notification2 mr-2 icon-2x text-muted  p-0 mb-2 mt-1 mr-2"></i><br> Aucun élève</h6>
          </div>
          @endif
        </div>

          </div>
      </div>
  </div>

@include('Eleve.slide_ajout')
@include('layouts.footer1')
@stop

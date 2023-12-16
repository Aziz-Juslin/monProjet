@extends('layouts.master_imp', ['title'=> $cicles])
@section('section')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Invoice template -->
        <div class="card">
          <div style="background-color: wheat;" class="card-header  header-elements-inline ">
            <img src="/img/ds.png" style="width: 80px" class="mb-3 mt-2" alt="" style="width: 120px;">
            <h6 class="card-title">Gérer votre école Autrement</h6>
            <div class="header-elements">
              <button onclick="window.addEventListener('load', window.print())" type="button" class="btn btn-light btn-sm ml-3"><i class="icon-printer mr-2"></i> Imprimer</button>
              
              </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 h4">
                <div class="mb-4">
                  <h1 class="text-slate mb-2 mt-md-2"><b>{{Auth::user()->ecole}}</b></h1>
                  @foreach($infoEcole as $ecole)
                  <ul class="list list-unstyled mb-0">
                    <li>{{$ecole->adresse}}</li>
                    <li class="text-slate"><u>{{Auth::user()->province}}/{{$ecole->commune}}</u></li>
                  </ul>
                  @endforeach
                </div>
              </div>
              <div class="col-sm-2 text-center">
                </div>
              <div class="col-sm-4 text-center h4">
                <div class="mb-4">
                  <div class="">
                    <P class="text-slate mb-2 mt-md-2">{{Auth::user()->province}} le, {{date('d/m/Y')}}</P>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center btn btn-light btn-block">
                <div class="mb-4">
                  <h1 class="text-slate mb-2 mt-md-2"><b><u>LISTE D'ELEVES</u></b></h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4  h4">
                  <ul class="list list-unstyled mb-0">
                    <li>Classe : {{$classe}} {{$cicles}}</li>
                    <li>Nombre d'élèves : {{$AfficheClasse->count()}}</li>
                  </ul>
                </div>
              <div class="col-sm-4 text-center h4">
                <div class="mb-4">
                </div>
              </div>
              <div class="col-sm-4 h4">
                  <ul class="list list-unstyled mb-0">
                    <li>Année Scolaire : {{AnneeSco()}}</li>
                    <li>Option : {{$optio}}</li>
                  </ul>
              </div>
            </div>
          </div>

          <div class="table-responsive">
              <table class="table table-striped text-nowrap table-customers">
               <thead>
                      <tr class="h4">
                          <th><b> N° Code</th>
                          <th><b> Nom, Post-nom & Prénom</th>
                          <th class="text-center"><b>Sexe</b></th>
                          <th class="text-center"><b>Lieu de naissance</b></th>
                          <th class="text-center"><b>Date de naissance</b></th>
                          <th class="text-center"><b>Observation</b></th>
                      </tr>
                  </thead>
                  <tbody class="h4">
                    @foreach($AfficheClasse as $eleve)
                      <tr>
                          <td>
                            {{$eleve->code_eleve}}
                          </td>
                          <td>
                            {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}
                          </td>
                          <td class="text-center">{{$eleve->sexe}}</td>
                          <td class="text-center">{{$eleve->lieu}}</td>
                          <td class="text-center">{{(new DateTime($eleve->date_ne))->format('d/m/Y')}}</td>
                          <td class="text-center"><span class="font-weight-semibold"></span></td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          <div class="card-body">
            <div class="d-md-flex flex-md-wrap">
            
              <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                <div class="text-right mt-5 mb-3 text-center">
                  <h4><u>La Direction</u></h4> 
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <span class="text-muted"> <i class="icon-thumbs-up2 mr-2"></i> Merci pour avoir utilisé 2-Six</span>
          </div>
        </div>
        <!-- /invoice template -->
 </div>
      <!-- /content area -->
@include('layouts.footer1')
@stop
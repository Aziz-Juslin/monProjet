@extends('layouts.master_imp', ['title'=> 'reçu'])
@section('section')
<div class="content-wrapper">

      <!-- Page header -->
    


      <!-- Content area -->
      <div class="content">

        <!-- Invoice template -->
        <div class="card">
           <div class="card-header bg-transparent header-elements-inline">
            <img src="/img/ds.png" style="width: 80px" class="mb-3 mt-2" alt="" style="width: 120px;">
            
            <div class="header-elements">
              <h6 class="card-title">Gérer votre école Autrement</h6>
              </div>
          </div>

           <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-4">
                  <h1 class="text-slate mb-0 mt-md-2"><b>{{Auth::user()->ecole}}</b></h1>
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
              <div class="col-sm-4">
                <div class="mb-4">
                  <div class="">
                    <P class="text-slate mb-0 mt-md-2">{{Auth::user()->province}} le, {{date('d/m/Y')}}</P>
                  </div>
                </div>
              </div>
            </div>
            @foreach($recuEleves as $recu)
            <div class="row">
              <div class="col-sm-12 text-center btn btn-light btn-block">
                <div class="mb-4">
                  <h1 class="text-slate mb-2 mt-md-0"><b>Reçu de Paiement / N° {{$recu->num_recu}} </b></h1>
                </div>
              </div>
            </div>
       
          </div>

          <div class="card-body">
            
            <div class="d-md-flex flex-md-wrap">
                <div class="pt-2 mb-3">
                <h3 class="mb-3 text-slate">Par : <b>{{$recu->nom}} {{$recu->post_nom}} {{$recu->prenom}}</b></h3>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Classe:</th>
                        <td class="text-right">{{$recu->classe}} {{$recu->cycle}}</td>
                      </tr>
                      <tr>
                        <th>Trimestre: <span class="font-weight-normal"></span></th>
                        <td class="text-right">{{$recu->trimestre}}</td>
                      </tr>
                      <tr>
                        <th>Montant payé:</th>
                        <td class="text-right text-primary"><h3 class="font-weight-semibold">{{$recu->franc == ''? "$ $recu->dollar":"CDF $recu->franc"}}</h3></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="text-right mt-3 text-center">
                  <button onclick="window.addEventListener('load', window.print())" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-printer"></i></b> Imprimer</button>
                </div>
              </div>

              
                <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                <h6 class="mb-3"><u>La Direction</u> </h6>
                <div class="mb-3">
                  <img src="../../../../global_assets/images/signature.png" width="150" alt="">
                </div>

                <ul class="list-unstyled text-muted">
                  <li>Date de paiement</li>
                  <li>{{$recu->dat_frais}}</li>
                </ul>
              </div>

          
            </div>
            
          </div>
          @endforeach
         <div class="card-footer text-center">
            <span class="text-muted"> <i class="icon-thumbs-up2 mr-2"></i> Merci pour avoir utilisé 2-Six</span>
          </div>
        </div>
         </div>
          </div>
        <!-- /invoice template -->

@include('layouts.footer1')
@stop 
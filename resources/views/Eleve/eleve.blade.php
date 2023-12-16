@extends('layouts.master1', ['title'=> 'Elèves'])
@section('section')

<div class="content-wrapper">
    @include('Eleve.tete')
      <!-- Content area -->
      <div class="content">
<div class="card">
                    <div class="card-body">
                    </div>
                </div>

                   <div class="row">
                     <div class="col-lg-4"><a href="{{route('ajout_eleve')}}">
                        <div class="card   text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                             <i class="icon-user-plus icon-4x text-slate-300 border-slate border-3 rounded-round p-3  "></i>
                                <h4 class="card-title text-slate-300">Ajouter</h4>
                            </div>
                        </div>
                   </a></div>
                        <div class="col-lg-4"><a href="{{route('eleve_liste')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-user-check icon-4x error-title-300 text-slate-300 border-slate border-3 rounded-round p-3  "></i>
                                 <h4 class="card-title text-slate-300">Répertoire des élèves</h4>
                            </div>
                        </div>
                    </a></div>

                    <div class="col-lg-4"> <a href="{{route('eleve_quitter')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                               <i class="icon-user-cancel icon-4x text-slate-300 border-slate border-3 rounded-round p-3  "></i>
                                <h4 class="card-title text-slate-300">Les abandons</h4>
                            </div>
                        </div>
                    </a></div>
</div>



             <!-- /seamless button group -->
    </div>
</div>
@include('layouts.footer1')
@stop


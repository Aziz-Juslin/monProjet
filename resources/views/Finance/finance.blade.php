@extends('layouts.master1', ['title'=> 'Finance'])
@section('section')
<div class="content-wrapper">
    @include('Finance.tete_finance')

      <!-- Content area -->
      <div class="content">
<div class="card">
                    <div class="card-body">
                    </div>
                </div>

                   <div class="row">
                     <div class="col-lg-3"><a href="{{route('journal_frais')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                             <i class="icon-cash4 icon-4x text-white-400 border-slate border-3 rounded-round p-3  "></i>
                                <h4 class="card-title text-slate">Frais scolaires</h4>
                            </div>
                        </div>
                   </a></div>
                        <div class="col-lg-3"><a href="{{route('autre_frais')}}">
                        <div class="card  text-whit" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-cash icon-4x error-title-300 text-slate-400 border-slate border-3 rounded-round p-3  "></i>
                                 <h4 class="card-title text-slate">Autres frais</h4>
                            </div>
                        </div>
                    </a></div>

                    <div class="col-lg-3"> <a href="{{route('journal_caisse')}}">
                        <div class="card  text-whit" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                               <i class="icon-stack-text icon-4x text-slate-400 border-slate border-3 rounded-round p-3  "></i>
                                <h4 class="card-title text-slate">Journal de caisse</h4>
                            </div>
                        </div>
                    </a></div>

                     <div class="col-lg-3"> <a href="">
                        <div class="card  text-whit" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                               <i class="icon-stack-check icon-4x text-slate-400 border-slate border-3 rounded-round p-3  "></i>
                                <h4 class="card-title text-slate">Caisse-E</h4>
                            </div>
                        </
                    </a></div>
</div>



             <!-- /seamless button group -->
    </div>
</div>
@include('layouts.footer1')
@stop


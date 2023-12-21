@extends('layouts.master1', ['title'=> Auth::user()->ecole])
@section('section')
      <!-- Main content -->
        <div class="content-wrapper">
            @include('layouts.app')
            <!-- Content area -->
            <div class="content">
                <!-- Search field -->
                <!-- Info blocks -->
                <div class="row">
                     <div class="col-lg-3"><a href="{{route('eleve')}}">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                            <i class="icon-users icon-2x border-slate border-3 rounded-round border text-slate-400  p-3 "></i>
                                <h4 class="card-title text-slate">Elèves</h4>
                            </div>
                        </div>
                   </a></div>
                        <div class="col-lg-3"><a href="{{route('personnel_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-user-tie icon-2x border-slate border-3 rounded-round text-slate-400 border- p-3 "></i>
                                 <h4 class="card-title text-slate">Personnel</h4>
                            </div>
                        </div>
                    </a></div>

                    <div class="col-lg-3"> <a href="{{route('cycle_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-dropbox text-slate-400 icon-2x border-slate border-3 rounded-round p-3 "></i>
                                <h4 class="card-title text-slate">Cycles</h4>
                            </div>
                        </div>
                    </a></div>

                       <div class="col-lg-3"><a href="{{route('option_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-align-bottom icon-2x border-slate border-3 rounded-round text-slate-400  p-3 "></i>
                                 <h4 class="card-title text-slate">Options</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="{{route('modalite_frais')}}">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-coins icon-2x border-slate border-3 rounded-round text-slate-400  p-3 "></i>
                                 <h4 class="card-title text-slate">Finances</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-graduation2 icon-2x border-slate border-3 rounded-round text-slate-400  p-3 "></i>
                              <h4 class="card-title text-slate">Pédagogie</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-folder-open2 icon-2x border-slate border-3 rounded-round text-slate-400  p-3 "></i>
                                 <h4 class="card-title text-slate">Documents</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="">
                        <div class="card   text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-archive icon-2x border-slate border-3 rounded-round text-slate-400  p-3 "></i>
                                 <h4 class="card-title text-slate">Archives</h4>
                            </div>
                        </div>
                    </a></div>

                </div>
                <!-- /info blocks -->






            </div>
            <!-- /content area -->
@include('layouts.footer1')
@stop

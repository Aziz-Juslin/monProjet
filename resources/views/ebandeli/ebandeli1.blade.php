@extends('layouts.master1', ['title'=> Auth::user()->ecole])
@section('section')
      <!-- Main content -->
        <div class="content-wrapper">
            @include('layouts.app')
            <!-- Content area -->
            <div class="content">
                <!-- Search field -->
                <div class="card">
                    <div class="card-body">

                        <form action="#">
                            <div class="input-group mb-3">
                                <div class="form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control form-control-lg" placeholder="Tapez le nom de la recherche">
                                    <div class="form-control-feedback form-control-feedback-lg">
                                        <i class="icon-search4 text-muted"></i>
                                    </div>
                                </div>

                                <div class="input-group-append">
                                    <button type="submit" class="btn bg-orange btn-lg">Recherche</button>
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
                                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Registration</a>
                                            <a href="#" class="dropdown-item"><i class="icon-reading"></i> General info</a>
                                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> Your settings</a>
                                            <a href="#" class="dropdown-item"><i class="icon-graduation"></i> Copyrights</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item"><i class="icon-mail-read"></i> Contacting authors</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-reload-alt mr-2"></i> Refine your search</a></li>
                                </ul>

                                <ul class="list-inline mb-0 ml-md-auto">
                                    <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
                                    <li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-menu7 mr-2"></i> Advanced search</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /search field -->


                <!-- Info blocks -->
                <div class="row">
                     <div class="col-lg-3"><a href="{{route('eleve')}}">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                            <i class="icon-users icon-4x border-slate border-3 rounded-round border text-slate-400  p-3 mb-3 mt-1"></i>
                                <h4 class="card-title text-slate">Elèves</h4>
                            </div>
                        </div>
                   </a></div>
                        <div class="col-lg-3"><a href="{{route('personnel_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-user-tie icon-4x border-slate border-3 rounded-round text-slate-400 border- p-3 mb-3 mt-1"></i>
                                 <h4 class="card-title text-slate">Personnel</h4>
                            </div>
                        </div>
                    </a></div>

                    <div class="col-lg-3"> <a href="{{route('cycle_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-dropbox text-slate-400 icon-4x border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h4 class="card-title text-slate">Cycles</h4>
                            </div>
                        </div>
                    </a></div>

                       <div class="col-lg-3"><a href="{{route('option_principal')}}">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-align-bottom icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                                 <h4 class="card-title text-slate">Options</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="{{route('modalite_frais')}}">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-coins icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                                 <h4 class="card-title text-slate">Finances</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="">
                        <div class="card text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-graduation2 icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                              <h4 class="card-title text-slate">Pédagogie</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="#">
                        <div class="card  text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-folder-open2 icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
                                 <h4 class="card-title text-slate">Documents</h4>
                            </div>
                        </div>
                    </a></div>

                        <div class="col-lg-3"><a href="#">
                        <div class="card   text-slate" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                            <div class="card-body text-center">
                                <i class="icon-archive icon-4x border-slate border-3 rounded-round text-slate-400  p-3 mb-3 mt-1"></i>
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

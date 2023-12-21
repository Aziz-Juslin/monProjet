@extends('layouts.master3', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')

    <!-- Form validation -->
                <div class="card bg">
                    <div class="card-header header-elements-inline">
                         <legend class="text-uppercase font-size-sm font-weight-bold">Cycles</legend>
                    </div>

                    <div class="card-body">
                    <p class="mb-4"> Séléctionner les cycles dont l'école  organise</p>
                    <form class="form-validate-jquery" action="{{route('cycle_store')}}" method="POST">
                    @csrf
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold"></legend>
                                <!-- Basic checkbox group -->
                                <div class="form-group row">
                                <label class="col-lg-3 col-form-label">
                                @if(!$cycles->isEmpty())
                                 <a href="{{route('cycle_show')}}" class="btn btn-success" id="reset"> Voir liste de cycles <i class="icon-list3 ml-2"></i></a>
                                 @endif
                                    </label>
                                    <div class="col-lg-6">
                                    <div class="form-check">
                                    <select class="form-control text-white" name="cycle" required>
                                    <option value="Maternelle">Maternelle</option>
                                    <option value="Primaire">Primaire</option>
                                    <option value="Education-b">Education-B</option>
                                    <option value="Humanite">Humanité</option>
                                    </select>
                                    </div>
                                    </div>
                                </div>
                                <!-- /basic checkbox group -->
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn bg-orange-400 ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- /content area -->
@include('layouts.footer1')
@endsection

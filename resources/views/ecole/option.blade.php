@extends('layouts.master', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')     
<!-- Content area -->


            <!-- Content area -->
            <div class="content">
                @include('ecole.message_ecole')
                <!-- Form validation -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        
                         <legend class="text-uppercase font-size-sm font-weight-bold">selection des options</legend>
                    </div>

                    <div class="card-body">
                        <p class="mb-4"> Séléctionner les options dont votre école  organise, si votre école n'organise pas des options séléctionner <strong>Aucune option</strong></p>
                        <form  action="{{route('option_store')}}" method="POST">
                            @csrf
                            <fieldset>
                                <legend class="text-uppercase font-size-sm font-weight-bold">Options</legend>

                                <!-- Switchery group -->
                                <div class="form-group row">

                                    <label class="col-lg-3 col-form-label">
                                    @if(! $options->isEmpty())
                                     <a href="{{route('option_show')}}" class="btn btn-success" id="reset"> Voir liste des options <i class="icon-list3 ml-2"></i></a>
                                     @endif
                                    </label>
                                    <div class="col-lg-6">
                                    <div class="form-check">
                                    <select class="form-control" name="option" required>
                                    <option  value="Aucune">Aucune option</option>
                                    <option  value="Biologie-Chimie">Biologie-Chimie</option>
                                    <option  value="Commerciale">Commerciale</option>
                                    <option  value="Coupe-Couture">Coupe-Couture</option>
                                    <option  value="Eléctricité">Eléctricité</option>
                                    <option  value="Eléctronique">Eléctronique</option>
                                    <option  value="Hôtéllerie">Hôtellerie</option>
                                    <option  value="Hôtesse">Hôtesse</option>
                                    <option  value="Latin-Philo">Latin - Philo</option>
                                    <option  value="Math-Physique">Math - Physique</option>
                                    <option  value="Mécanique">Mecanique générale</option>
                                    <option  value="Maçonnerie">Maçonnerie</option>
                                    <option  value="Pédagogie">Pédagogie</option>
                                    <option  value="Sociale" >Sociale</option>
                                    </select>
                                </div>
                            </div>
                        
                                <hr>
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" name="submit" class="btn btn-primary ml-3">Ajouter <i class="icon-plus3 ml-2"></i></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- /form validation -->

            </div>
            <!-- /content area -->         
<!-- /content area -->
@include('layouts.footer1')
@endsection

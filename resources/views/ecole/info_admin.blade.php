@extends('layouts.master3', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->

                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">

                        <!-- Left aligned buttons -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Autres informations d'administrateur</legend>
                            </div>
                            <div class="card-body">
                            <form action="{{route('store_admin')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="date" name="date_ne" class="form-control" placeholder="Date de naissance">
                                        @error('date_ne')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Qualification:</label>
                                    <select class="form-control" name="qualification" id="exampleSelect1">
                                    <option value="SRF">SRF</option>
                                    <option value="D6">D6</option>
                                    <option value="Gradué">Gradué</option>
                                    <option value="Licencié">Licencié</option>
                                    <option value="Docteur">Docteur</option>
                                    <option value="S.E">S.E</option>
                                    </select>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Etat civil:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="etat_civil" value="Marié">
                                                    Marié
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="etat_civil" value="Célibataire">
                                                    Célibataire
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sexe:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="M">
                                                    Homme
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="F">
                                                    Femme
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                    </div>


                                <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Photo d'administrateur:</label>
                                <div class="col-lg-10">
                                    <input type="file" name="photo_admin" class="form-control-uniform-custom">
                                    @error('photo_admin')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                    <div class="d-flex justify-content-start align-items-center">

                                        <button type="submit" class="btn bg-orange-400 ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

@include('layouts.footer1')
@endsection

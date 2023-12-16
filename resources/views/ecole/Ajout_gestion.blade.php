@extends('layouts.master', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')      
<!-- Content area -->
            <div class="content">
                @include('ecole.message_ecole')
                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Left aligned buttons -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Créer un gestionnaire</legend>
                            </div>
                            <div class="card-body">
                            <form action="{{route('store_gestion')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom complet:</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nom complet">
                                        @error('name')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Téléphone:</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                                        @error('telephone')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>
                                        <div class="row">
                                      <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mot de passe:</label>
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                                        @error('password')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirmer mot de passe:</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
                                        @error('password_confirmation')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
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
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Rôle:</label>
                                    <select class="form-control" name="role" id="exampleSelect1">
                                    <option value="FI">Financier</option>
                                    <option value="CI">Charger d'inscription</option>
                                    </select>
                                    </div>
                                    </div>
                                   
                                    <div class="col-md-12">
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
                                    
                                 <div class="col-md-12">
                                <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Photo:</label>
                                <div class="col-lg-10">
                                    <input type="file" name="photo_gestion" class="file-input" >
                                    @error('photo_gestion')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                    @enderror
                                </div>
                                </div>
                                    </div>
                                    </div>
                                 
                            
                                    <div class="d-flex justify-content-start align-items-center">
                                        
                                        <button type="submit" class="btn bg-blue ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
<!-- /content area -->
@include('layouts.footer1')
@endsection

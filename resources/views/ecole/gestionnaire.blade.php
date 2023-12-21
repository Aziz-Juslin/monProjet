@extends('layouts.master3', ['title' => Auth::user()->name])
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
                            <form action="{{route('store_gestionnaire')}}" method="POST">
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
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Rôle:</label>
                                    <select class="form-control" name="role" id="exampleSelect1">
                                    <option value="FI">Financier</option>
                                    <option value="CI">Charger d'inscription</option>
                                    </select>
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

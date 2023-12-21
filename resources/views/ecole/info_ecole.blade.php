@extends('layouts.master3', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')
<!-- Content area -->
            <div class="content">
                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">
                        @if($infoEcole->isEmpty())
                        @endif
                        <!-- Left aligned buttons -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Autres informations de votre école</legend>
                            </div>

                            <div class="card-body">
                            <form action="{{route('info_store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Rue:</label>
                                        <input type="text" name="adresse" class="form-control" placeholder="exemple: Av.kinshasa n°123 bis">
                                        @error('adresse')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Commune:</label>
                                        <input type="text" name="commune" class="form-control" placeholder="Commune">
                                        @error('commune')
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
                                        <label>District:</label>
                                        <input type="text" name="district" class="form-control" placeholder="District">
                                        @error('district')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Regime:</label>
                                           <select class="form-control" name="regime" id="exampleSelect1">
                                    <option value="Privée">Privée</option>
                                    <option value="Salitiste">Salitiste</option>
                                    <option value="Conventionée Protéstante">Conventionée Protéstante</option>
                                    <option value="Conventionée Chatholique">Conventionée Chatholique</option>
                                    <option value="Conventionée Kimbanguiste">Conventionée Kimbanguiste</option>
                                    <option value="Islamique">Islamique</option>
                                        </select>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Dévise:</label>
                                        <textarea name="devise" rows="3" cols="3" class="form-control" placeholder="Ecrivez..."></textarea>
                                        @error('devise')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Photo de l'école</label>
                                        <div class="col-lg-10">
                                            <input type="file" name="photo_ecole" class="form-control-uniform-custom">
                                            @error('photo_ecole')
                                                 <span class="text-left text-muted">
                                                  <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                                </span>
                                            @enderror
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

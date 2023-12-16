@extends('layouts.master1', ['title'=> 'Ajouter personnel'])
@section('section')
@include('personnel.tete_personnel')
 <div class="content">
                @include('ecole.message_ecole')
                <!-- Form action components -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Left aligned buttons -->
                        <div class="">
                           <div class="card bg-slate">
                            <div class="card-header bg-slate-700 header-elements-inline">
                            <span class="text-uppercase  font-size-sm font-weight-semibold"><i class="icon-user-plus mr-2"></i>Ajouter personnel</span>
                              </div>
                            <div class="card-body">
                            <form action="{{route('personnel_store')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="nom" class="form-control text-white" placeholder="Nom">
                                        @error('nom')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="post" class="form-control text-white" placeholder="Post-nom">
                                        @error('post')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="prenom" class="form-control text-white" placeholder="Prénom">
                                        @error('prenom')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>
                         
                                    <div class="row">
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="telephone" class="form-control text-white" placeholder="Téléphone">
                                        @error('telephone')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Adresse:</label>
                                      <input type="text" name="adresse" class="form-control text-white" placeholder="exemple: Kinshasa n°243, Q/Kinshasa, C/Kinshasa">
                                        @error('adresse')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>


                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="date" name="date_ne" class="form-control text-white" placeholder="Date de naissance">
                                        @error('nom')
                                         <span class="text-left text-white">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Qualification:</label>
                                    <select class="form-control text-white" name="qualification" id="exampleSelect1">
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
                                                    <input type="radio" class="form-input-styled" name="etat" value="Marié">
                                                    Marié
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled text-white" name="etat" value="Célibataire">
                                                    Célibataire
                                                </label>
                                            </div>
                                            @error('sexe')
                                            <span class="text-left text-white">
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
                                            <span class="text-left text-white">
                                            <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Fonction:</label>
                                    <select name="fonction" class="form-control @error('fonction') is-invalid @enderror text-white"
                                     name="fonction" value="{{ old('fonction') }}" required autocomplete="fonction">
                                  
                                    <option value="Promoteur">Promoteur</option> 
                                    <option value="Promotrice">Promotrice</option> 
                                    <option value="Coordonnateur">Coordonnateur</option> 
                                    <option value="Coordonnatrice">Coordonnatrice</option> 
                                    <option value="Coordinnateur">Coordinnateur</option> 
                                    <option value="Coordinnatrice">Coordinnatrice</option> 
                                    <option value="Caissier">Caissier</option> 
                                    <option value="Caissière">Caissière</option> 
                                    <option value="Directeur">Directeur</option>
                                    <option value="Directrice">Directrice</option>
                                    <option value="Directeur AD">Directeur Adjt</option>
                                    <option value="Directrice AD">Directrice Adjt</option>
                                    <option value="D.E">Directeur des Etudes</option>
                                    <option value="D.D">Directeur de discipline</option>
                                     <option value="Enseignant">Enseignant(e)</option> 
                                    <option value="Informaticien">Informaticien(e)</option>
                                    <option value="Préfet">Préfet</option>
                                    <option value="Professeur">Professeur</option>                       
                                    <option value="Ouvrier">Ouvrier</option>
                                    <option value="Sentinelle">Sentinelle</option>
                                  </select>
                                    </div>
                                </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Photo du personnel</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="photo_personnel" class="form-control-uniform-custom">
                                        @error('photo_personnel')
                                             <span class="text-left text-white">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <button type="submit" class="btn bg-info-400 ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
@include('layouts.footer1')
@stop
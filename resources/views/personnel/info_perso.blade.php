@extends('layouts.master1', ['title'=> 'information du personnel'])
@section('section')
@include('personnel.head_personnel')               
    <div class="card">
        <div class="card-body">
            @foreach($VoirPersonnel as $personnel)
            <form  action="{{route('update_info_personnel', [$personnel->id, $personnel->slug, $personnel->post_nom, $personnel->prenom])}}" method="POST" >
            @csrf
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Profil du Personnel</legend>
                                 <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="nom" class="form-control" value="{{$personnel->nom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post-nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="post" class="form-control" value="{{$personnel->post_nom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Prénom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="prenom" class="form-control" value="{{$personnel->prenom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /basic text input -->
                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Sexe <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="sexe" class="form-control" value="{{$personnel->sexe}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                     <label class="col-form-label col-lg-3">Etat civil <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="etat" class="form-control" value="{{$personnel->etat_civil}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Date de naissance <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="dat" class="form-control" value="{{$personnel->date_ne}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /basic text input -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Adresse <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="adresse" class="form-control" value="{{$personnel->adresse}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Qualification <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                    <div class="form-group-feedback form-group-feedback-right">
                                    <select  style="border:none" class="form-control" name="qualification" id="exampleSelect1">
                                    <option >{{$personnel->qualification}}</option>
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
                                <!-- Input with icons -->
                                <div class="form-group row">
                                <label class="col-form-label col-lg-3">Fonction <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                <select style="border:none" class="form-control" name="fonction" id="exampleSelect1">
                                <option >{{$personnel->fonction}}</option>
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
                                <!-- /inputper with icons -->
                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Téléphone <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="tel" class="form-control" value="{{$personnel->phone}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn bg-info-400 ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                        @endforeach
                    </div>
              
              <!-- /video post -->
          </div>
@include('personnel.foot_perso')
@include('layouts.footer1')
@stop                   
       
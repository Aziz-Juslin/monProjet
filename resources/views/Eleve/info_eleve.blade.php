@extends('layouts.master1', ['title'=> 'information de l\'élève'])
@section('section')
@include('Eleve.tete')
@include('Eleve.head1_eleve')           
    <div class="content">   
    <div class=" card">
        <div class="">
        <div class=" media-list media-list-linked">
        <span class=" media bg-light font-weight-bold  py-2">Information de l'élève</span>
          </div>
          </div>
        <div class="card-body">
            @foreach($VoirEleve as $eleve)
            <form class=""  action="{{route('update_eleve', $eleve->id)}}" method="POST" >
            @csrf
                            <fieldset class="mb-3">
                                 <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="nom" class="form-control " value="{{$eleve->nom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post-nom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="post" class="form-control " value="{{$eleve->post_nom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Prénom <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="prenom" class="form-control " value="{{$eleve->prenom}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
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
                                            <input style="border: none;" type="text" name="sexe" class="form-control " value="{{$eleve->sexe}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Lieu de naissance<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                    <div class="form-group-feedback form-group-feedback-right">
                                    <select  style="border:none" class="form-control " name="lieu" id="exampleSelect1">
                                    <option selected>{{$eleve->lieu}}</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Matadi">Matadi</option>
                                    <option value="Lubumbashi">Lubumbashi</option>
                                    <option value="Maniema">Maniema</option>
                                    <option value="Kisantu">Kisantu</option>
                                    <option value="Luwozi">Luwozi</option>
                                    <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                    <option value="Kolwezi">Kolwezi</option>
                                    <option value="Goma">Goma</option>
                                    <option value="Mbuji-mayi">Mbuji-mayi</option>
                                    <option value="Kenge">Kenge</option>
                                    <option value="Kikwiti">Kikwiti</option>
                                    <option value="Nord-Kivu">Nord-Kivu</option>
                                    <option value="Sud-Kivu">Sud-Kivu</option>
                                    <option value="Boma">Boma</option>
                                    <option value="Popo">Popo</option>
                                    <option value="Muanda">Muanda</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Kinshasa">Kinshasa</option>
                                    </select>
                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Basic text input -->
                                 <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Date de naissance <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="dat" class="form-control " value="{{$eleve->date_ne}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /basic text input -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Adresse <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="adresse" class="form-control " value="{{$eleve->adresse}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Niveau <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                    <div class="form-group-feedback form-group-feedback-right">
                                    <select  style="border:none" class="form-control " name="classe" id="exampleSelect1">
                                    <option >{{$eleve->classe}}</option>
                                    <option value="1èr">1èr</option>
                                    <option value="2ème">2ème</option> 
                                    <option value="3ème">3ème</option>
                                    <option value="4ème">4ème</option>
                                    <option value="5ème">5ème</option>
                                    <option value="6ème">6ème</option>
                                    <option value="7ème">7ème</option>
                                    <option value="8ème">8ème</option>
                                    </select>
                                            
                                  </div>
                                    </div>
                                </div>
                                <!-- Input with icons -->
                                <div class="form-group row">
                                <label class="col-form-label col-lg-3">Cycle <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                <select style="border:none" class="form-control " name="cycle" id="exampleSelect1">
                                <option >{{$eleve->cycle}}</option>
                                @foreach($cycles as $cycle)
                                <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-form-label col-lg-3">Option <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                <select style="border:none" class="form-control " name="option" id="exampleSelect1">
                                <option >{{$eleve->option}}</option>
                                <option value="">Aucune</option>
                                @foreach($options as $option)
                                <option value="{{$option->option}}">{{$option->option}}</option>
                                @endforeach
                                </select>
                                </div>
                                </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-form-label col-lg-3">Local <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                <div class="form-group-feedback form-group-feedback-right">
                                 <select style="border:none" class="form-control " name="local" id="exampleSelect1">
                                     <option>{{$eleve->local}}</option> 
                                      <option value="A">A</option> 
                                      <option value="B">B</option> 
                                      <option value="C">C</option> 
                                      <option value="D">D</option> 
                                      <option value="E">E</option> 
                                      <option value="F">F</option>
                                      <option value="G">G</option>
                                      <option value="1">1</option> 
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                    </select>
                                </div>
                                </div>
                                </div>
                                <!-- /input with icons -->
                                <!-- Input with icons -->
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Téléphone <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input style="border: none;" type="text" name="tel" class="form-control " value="{{$eleve->phone}}">
                                            <div class="form-control-feedback">
                                                <i class="icon-pencil "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /input with icons -->
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn bg-warning-400 font-weight-bold ml-3">Modifier <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                        @endforeach
                    </div>
              
              <!-- /video post -->
          </div>
          </div>
          </div>
          

@include('layouts.footer1')
@stop                   
       
<div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Formulaire</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                            <form  action="{{route('store_eleve')}}" method="post" enctype="multipart/form-data">
                             @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">

                                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                                        @error('nom')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="post" class="form-control" placeholder="Post-nom">
                                        @error('post')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                        @error('prenom')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    </div>
                                    <!--- bloc 1 --->
                                    <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Lieu de naissance:</label>
                                    <select class="form-control" name="lieu" id="exampleSelect1">
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
                                    @error('lieu')
                                    <span class="text-left text-muted">
                                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                    </span>
                                    @enderror
                                    </div>
                                    </div>

                                     <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date de naissance:</label>
                                        <input type="date" name="dat" class="form-control" placeholder="Date de naissance">
                                        @error('date_ne')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Adresse complète:</label>
                                        <input type="text" name="adresse" class="form-control" placeholder="Exemple: Av. Kinshasa, n°20, C/Kinshasa">
                                        @error('adresse')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    </div>

                                     <!--- bloc 1 --->
                                    <div class="row">

                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Cycle:</label>
                                    <select class="form-control" name="cycle" id="exampleSelect1">
                                    @foreach($cycles as $cycle)
                                    <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                                    @endforeach
                                    </select>
                                    @error('cycle')
                                    <span class="text-left text-muted">
                                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                    </span>
                                    @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Niveau:</label>
                                    <select class="form-control" name="classe" id="exampleSelect1">
                                    <option value="1èr">1èr</option>
                                    <option value="2ème">2ème</option>
                                    <option value="3ème">3ème</option>
                                    <option value="4ème">4ème</option>
                                    <option value="5ème">5ème</option>
                                    <option value="6ème">6ème</option>
                                    <option value="7ème">7ème</option>
                                    <option value="8ème">8ème</option>
                                    </select>
                                    @error('classe')
                                    <span class="text-left text-muted">
                                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                    </span>
                                    @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Option:</label>
                                    <select class="form-control" name="option" id="exampleSelect1">
                                    <option value="Aucune">Aucune</option>
                                    @foreach($options as $option)
                                   <option value="{{$option->option}}">{{$option->option}}</option>
                                   @endforeach
                                    </select>
                                    @error('option')
                                    <span class="text-left text-muted">
                                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                    </span>
                                    @enderror
                                    </div>
                                    </div>
                                    </div>

                                     <!--- bloc 1 --->
                                    <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Local:</label>
                                    <select class="form-control" name="local" id="exampleSelect1">
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
                                    @error('local')
                                    <span class="text-left text-muted">
                                    <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                    </span>
                                    @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Téléphone:</label>
                                        <input type="text" name="tel" class="form-control" placeholder="Téléphone">
                                        @error('tel')
                                         <span class="text-left text-muted">
                                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sexe:</label>
                                        <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="M">
                                                    Garçon
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-input-styled" name="sexe" value="F">
                                                    Fille
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
                                     <!--- bloc 1 --->
                                    <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Photo de l'élève</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="photo_eleve" class="form-control-uniform-custom">
                                        @error('photo_eleve')
                                             <span class="text-left text-muted">
                                              <span style="color: darkred;" ><m>{{ $message }}</m></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                     <!--- bloc 1 --->
                         <div class="d-flex justify-content-start align-items-center">

                             <button type="submit" class="btn bg-orange-400 ml-3">Ajouter <i class="icon-paperplane ml-2"></i></button>
                         </div>
                    </form>
                </div>
             </div>
